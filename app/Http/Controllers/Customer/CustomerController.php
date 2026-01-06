<?php

namespace App\Http\Controllers\Customer;

use Throwable;
use Carbon\Carbon;
use App\Lib\Message;
use App\Models\User;
use App\Models\Shop\Plan;
use Illuminate\Http\Request;
use App\Models\Customer\Customer;
use App\Models\Shop\Subscription;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
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
                'firstname'  => 'required|string|max:100',
                'lastname'   => 'required|string|max:100',
                'date_birth' => 'required|date_format:d-m-Y',
                'city_birth' => 'required|string|min:2',
                'hour_birth' => 'sometimes|nullable|string|date_format:H:i',
                'email'      => 'required|nullable|string|min:5',
                'phone'      => 'sometimes|nullable|string|min:5',
            ]);

            if ($validator->fails()) {
                Log::error(Message::CREATE_KO, [__METHOD__, json_encode($validator->errors()->toArray())]);
                return $this->sendError(Message::CREATE_KO, $validator->errors()->toArray(), 400);
            }

            $customer = Customer::where('user_id', Auth::user()->id)->first();

            $currentPlan = null;
            $activeSub = Subscription::where('user_id', Auth::id())
                ->where('is_active', true)
                ->where('expires_at', '>', now())
                ->latest()
                ->first();

            if ($activeSub) {
                $currentPlan = $activeSub->plan;
            } else {
                $currentPlan = Plan::where('slug', 'free')->first();
            }

            $currentPlan = $activeSub ? $activeSub->plan : Plan::where('slug', 'free')->first();

            $contactCount = DB::table('address_book_customer')
                ->where('customer_id', $customer->id)
                ->count();

            if ($contactCount >= $currentPlan->max_contacts) {
                return $this->sendError("Hai già aggiunto {$contactCount} contatti su un massimo di {$currentPlan->max_contacts} a te consentito.", [], 400);
            }

            $contact = AddressBook::updateOrCreate(
                [
                    'email' => $data['email'] ?? null,
                ],
                [
                    'firstname'  => $data['firstname'],
                    'lastname'   => $data['lastname'],
                    'phone'      => $data['phone'] ?? null,
                    'city_birth' => $data['city_birth'],
                    'date_birth' => $data['date_birth'],
                    'hour_birth' => $data['hour_birth'] ?? null,
                ]
            );

            $customer->addressBooks()->syncWithoutDetaching([$contact->id]);
            return $this->sendResponse(Message::CREATE_OK, [
                'status' => 'success',
                'contact' => $contact,
            ], 201);
        } catch (Throwable $e) {
            return $this->sendError(Message::SHOW_KO, [
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }
}
