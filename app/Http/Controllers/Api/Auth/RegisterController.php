<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Lib\Message;
use App\Mail\Auth\RegisterMail;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Shop\Plan;
use App\Models\Shop\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /**
     * Registers a single user via API
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request): JsonResponse
    {
        try {

            $data = $request->all();

            $validator = Validator::make($data, [
                'firstname' => 'required|string|min:3',
                'lastname'  => 'required|string|min:2',
                'email' => [
                    'required',
                    'email:rfc,dns',
                ],
                'phone'     => 'nullable|string|min:9',
                'city_birth' => 'nullable|string|min:2',
                'date_birth' => 'nullable|string|min:8',
                'hour_birth' => 'nullable|string|min:3',
                'password'   => [
                    'required',
                    'confirmed',
                    Password::min(8)
                        ->letters()
                        ->numbers()
                        ->symbols()
                ],
                'password_confirmation' => 'required'
            ]);

            if ($validator->fails()) {
                Log::error(Message::REGISTER_KO, [__METHOD__, json_encode($validator->errors()->toArray())]);
                return $this->sendError(Message::REGISTER_KO, $validator->errors()->toArray(), 400);
            }

            $dateBirthValidation = $this->validateDateBirth($request->date_birth);
            if ($dateBirthValidation !== true) {
                return $this->sendError(Message::REGISTER_KO, ['date_birth' => $dateBirthValidation], 400);
            }

            $plan = Plan::where('slug', 'free')->first();

            $existUserToDb = User::withTrashed()
                ->where('email', $request->email)
                ->select(
                    'id',
                    'firstname',
                    'lastname',
                    'email',
                    'phone',
                    'city_birth',
                    'date_birth',
                    'hour_birth',
                    'from',
                    'ip',
                    'user_agent',
                    'deleted_at'
                )
                ->first();

            if ($existUserToDb) {
                $existUser = [
                    'id' => $existUserToDb->id,
                    'firstname' => $existUserToDb->firstname,
                    'lastname' => $existUserToDb->lastname,
                    'email' => $existUserToDb->email,
                    'phone' => $existUserToDb->phone,
                    'city_birth' => $existUserToDb->city_birth,
                    'date_birth' => $existUserToDb->date_birth,
                    'hour_birth' => $existUserToDb->hour_birth,
                    'from' => $existUserToDb->from,
                    'ip' => $existUserToDb->ip,
                    'user_agent' => $existUserToDb->user_agent,
                    'deleted_at' => $existUserToDb->deleted_at,
                ];

                Log::warning('Existing user', ['user' => $existUser]);
                if ($existUser['deleted_at']) {
                    // dd('reg', $existUser);
                    $recover = $existUserToDb->restore();
                    Log::warning('Restore user', ['recover' => $recover]);
                    if ($recover) {
                        $role = Role::where('name', 'User')->first();
                        $existUserToDb->roles()->attach($role);

                        $permission = Permission::where('name', 'User')->first();
                        $existUserToDb->permissions()->attach($permission);

                        DB::table('permission_user')
                            ->where('user_id', $existUserToDb->id)
                            ->update([
                                'is_active'     => 1,
                                'is_banned'     => 0,
                                'first_in'      => false,
                                'first_login'   => false,
                                'created_at'    => now(),
                                'updated_at'    => now()
                            ]);

                        if ($plan) {
                            Subscription::create([
                                'user_id'       => $existUserToDb->id,
                                'plan_id'       => $plan->id,
                                'price_paid'    => 0.00,
                                'billing_cycle' => 'annual',
                                'starts_at'     => now(),
                                'expires_at'    => now()->addYears(1), // Free 1 anno
                                'is_active'     => true,
                            ]);
                        }

                        $response = [
                            'user' => $request->email,
                            'message' => 'Recover Account Succesfully - please repeat login and update your data'
                        ];
                        return $this->sendResponse(Message::USER_RESTORED_OK, $response, 201);
                    }

                    Log::info(Message::REGISTER_OK, ['Firstname' => $request->firstname, 'Lastname' => $request->lastname, 'email' => $request->email, 'registerDate' => now()]);
                    return $this->sendResponse(Message::REGISTER_OK, ['token' => $existUser], 201);
                } else {
                    $error = [
                        'code' => 403,
                        'user' => $existUserToDb->email,
                        'message' => 'This email is already registered'
                    ];
                    Log::error(Message::REGISTER_KO, [__METHOD__, $error]);
                    return $this->sendError(Message::REGISTER_KO, $error, 403);
                }
            }

            $from = strtolower($request->from) ?? 'astro';

            $dateBirth = null;
            if ($request->filled('date_birth')) {
                $dateBirth = Carbon::createFromFormat('d-m-Y', $request->date_birth)->format('Y-m-d');
            }

            $hourBirth = null;
            if ($request->filled('hour_birth')) {
                $hourBirth = Carbon::createFromFormat('H:i', $request->hour_birth)->format('H:i:s');
            }

            $firstname  = ucfirst(mb_strtolower($request->firstname, 'UTF-8'));
            $lastname   = ucfirst(mb_strtolower($request->lastname, 'UTF-8'));
            $cityBirth  = $request->filled('city_birth')
                ? ucfirst(mb_strtolower($request->city_birth, 'UTF-8'))
                : null;

            $userData = [
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $request->email,
                'password' => $request->password,
                'phone' => $request->phone,
                'city_birth' => $cityBirth,
                'date_birth' => $dateBirth, // $request->date_birth,
                'hour_birth' => $hourBirth,
                'from' => $from,
                'ip' => $request->ip(),
                'user_agent' => $request->server('HTTP_USER_AGENT') ?? $from,
            ];

            $newUser = User::createUser($userData);

            if ($plan) {
                Subscription::create([
                    'user_id'       => $newUser['userId'],
                    'plan_id'       => $plan->id,
                    'price_paid'    => 0,
                    'billing_cycle' => 'annual',
                    'starts_at'     => now(),
                    'expires_at'    => now()->addYears(1), // Free 1 anno
                    'is_active'     => true,
                ]);
            }

            Mail::mailer('smtp')->to($request->email)->bcc(config('app.admin'))->send(new RegisterMail($userData, $from));
            Log::info(Message::REGISTER_OK, $userData);

            return $this->sendResponse(Message::REGISTER_OK, ['token' => $newUser], 201);
        } catch (\Throwable $ex) {
            Log::error(Message::BAD_REQUEST, [__METHOD__, $ex]);
            return $this->sendError(Message::BAD_REQUEST, [$ex->getMessage()], 400);
        }
    }

    private function validateDateBirth($dateBirth)
    {
        // Se non obbligatoria, è valido
        if (empty($dateBirth)) {
            return true;
        }

        // 1. Controllo formato base (GG-MM-AAAA)
        if (!preg_match('/^\d{2}-\d{2}-\d{4}$/', $dateBirth)) {
            return 'Il formato della data di nascita deve essere GG-MM-AAAA (es: 15-04-1984)';
        }

        // 2. Parsing con verifica validità
        $date = \DateTime::createFromFormat('d-m-Y', $dateBirth);
        if (!$date || $date->format('d-m-Y') !== $dateBirth) {
            return 'La data inserita non è valida. Verifica giorno, mese e anno.';
        }

        $year = (int)$date->format('Y');
        $month = (int)$date->format('m');
        $day = (int)$date->format('d');
        $currentYear = (int)now()->format('Y');
        $currentDate = now();

        // 3. Controllo anno minimo (1900)
        if ($year < 1900) {
            return 'L\'anno di nascita non può essere precedente al 1900. Hai inserito: ' . $year;
        }

        // 4. Controllo anno futuro
        if ($year > $currentYear) {
            return 'L\'anno di nascita non può essere futuro. Hai inserito: ' . $year;
        }

        // 5. CONTROLLO SPECIFICO PER ANNI A 2 CIFRE (es: 0084)
        // Se l'anno è troppo basso (es < 100) probabilmente l'utente ha inserito 2 cifre
        if ($year < 100) {
            $possibleYear4Digits = $year + 1900; // 84 -> 1984
            if ($possibleYear4Digits <= $currentYear) {
                return sprintf(
                    'Hai inserito un anno a 2 cifre (%d). Forse intendevi %d? Per favore inserisci l\'anno completo a 4 cifre (es: 1984)',
                    $year,
                    $possibleYear4Digits
                );
            }
            return 'Per favore inserisci l\'anno completo a 4 cifre (es: 1984)';
        }

        // 6. Controllo età minima (18 anni)
        $birthDate = Carbon::create($year, $month, $day);
        $age = $birthDate->age;

        if ($age < 18) {
            return sprintf('Devi avere almeno 18 anni per registrarti. La tua età sarebbe: %d anni', $age);
        }

        // 7. Controllo età massima (120 anni)
        if ($age > 120) {
            return sprintf('Età non valida. Hai inserito una data che corrisponde a %d anni', $age);
        }

        // 8. Controllo data non troppo vicina al futuro (es. domani)
        if ($birthDate->isFuture()) {
            return 'La data di nascita non può essere nel futuro';
        }

        // Tutti i controlli passati
        return true;
    }

    private function parseDateBirth($dateBirth)
    {
        if (empty($dateBirth)) {
            return null;
        }

        try {
            // Assicurati che la data sia già stata validata
            $date = Carbon::createFromFormat('d-m-Y', $dateBirth);
            return $date->format('Y-m-d');
        } catch (\Exception $e) {
            // Questo non dovrebbe accadere perché la validazione è già passata
            Log::error('Errore parsing data nonostante validazione', [
                'date_birth' => $dateBirth,
                'error' => $e->getMessage()
            ]);
            return null;
        }
    }
}
