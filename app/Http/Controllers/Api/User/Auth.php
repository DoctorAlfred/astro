<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class Auth extends Controller
{
    /**
     * Login function
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse $response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Credenziali non valide.'],
            ]);
        }

        $token = $user->createToken('API Token')->accessToken;

        return $this->sendResponse('Message', [
            'user' => $user,
            'token' => $token
        ]);
    }

    /**
     * Register function
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse $response
     */
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:100',
            'surname'  => 'required|string|max:100',
            'email'    => 'required|email|unique:users,email',
            'phone'    => 'required|string|max:100',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'id'       => Str::uuid(),
            'name'     => $request->name,
            'surname'  => $request->surname,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('API Token')->accessToken;

        return response()->json([
            'user'  => $user,
            'token' => $token
        ], 201);
    }

    /**
     * Logout function
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse $response
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json(['message' => 'Logout effettuato.']);
    }

    /**
     * Delete function
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse $response
     */
    public function delete(Request $request)
    {
        $user = $request->user();
        $user->tokens->each->revoke();
        $user->delete();

        return response()->json(['message' => 'Utente cancellato.']);
    }

    /**
     * Forgot password function
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse $response
     */
    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? response()->json(['message' => 'Email di recupero inviata.'])
            : response()->json(['message' => 'Errore nell\'invio email.'], 400);
    }

    /**
     * Reset Password function
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse $response
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
                // Invalidate all token
                $user->tokens()->delete();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? response()->json(['message' => 'Password reimpostata con successo.'])
            : response()->json(['message' => 'Token o email non validi.'], 400);
    }
}
