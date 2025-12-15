<?php

namespace App\Http\Controllers\Customer;

use Throwable;
use App\Lib\Message;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Customer\Customer;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Customer\AddressBook;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function getContacts(int $perPage = 22, string $lastname = null): JsonResponse
    {
        try {
            $user = User::where('id', Auth::user()->id)->first();
            $customer = Customer::where('user_id', $user->id)->first();
            $role = $user->roles()->first()->code;

            $contacts = [];
            // dd('User', $role, $user);
            if ($role === 'admin') {
                $contacts = AddressBook::orderBy('lastname')
                    ->orderBy('firstname')
                    ->get();
            } else {
                $contacts = $user->addressBooks()
                    ->orderBy('lastname')
                    ->orderBy('firstname')
                    ->get();
            }

            return $this->sendResponse(Message::CREATE_OK, [
                'status' => 'success',
                'contact' => $contacts,
            ], 201);
        } catch (Throwable $e) {
            return $this->sendError(Message::SHOW_KO, [
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }

    /**
     * Add New Contact function
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addNewContact(Request $request): JsonResponse
    {
        try {
            $data = $request->all();

            $validator = Validator::make($data, [
                'firstName' => 'required|string|max:100',
                'lastName'  => 'required|string|max:100',
                'birthDate' => 'required|date_format:d-m-Y',
                'cityBirth' => 'required|string|min:2',
                'hourBirth' => 'sometimes|nullable|string|date_format:H:i',
                'email'     => 'sometimes|nullable|string|min:5',
                'phone'     => 'sometimes|nullable|string|min:5',
            ]);

            if ($validator->fails()) {
                Log::error(Message::CREATE_KO, [__METHOD__, json_encode($validator->errors()->toArray())]);
                return $this->sendError(Message::CREATE_KO, $validator->errors()->toArray(), 400);
            }

            $customer = Customer::where('user_id', Auth::user()->id)->first();

            $contact = AddressBook::updateOrCreate(
                [
                    'firstname'  => $data['firstName'],
                    'lastname'   => $data['lastName'],
                    'date_birth' => $data['birthDate'],
                ],
                [
                    'firstname'  => $data['firstName'],
                    'lastname'   => $data['lastName'],
                    'email'      => $data['email'] ?? null,
                    'phone'      => $data['phone'] ?? null,
                    'city_birth' => $data['cityBirth'],
                    'date_birth' => $data['birthDate'],
                    'hour_birth' => $data['hourBirth'] ?? null,
                ]
            );

            if (!$customer->addressBooks()->where('address_book_id', $contact->id)->exists()) {
                $customer->addressBooks()->syncWithoutDetaching($contact->id);
                return $this->sendResponse(Message::CREATE_OK, [
                    'status' => 'success',
                    'contact' => $contact,
                ], 201);
            }

            return $this->sendError(Message::CREATE_KO, [
                'status' => false,
                'message' => Message::BAD_REQUEST
            ], 404);
        } catch (Throwable $e) {
            return $this->sendError(Message::SHOW_KO, [
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }
}
