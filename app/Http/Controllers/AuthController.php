<?php

namespace App\Http\Controllers;

use App\Lib\Message;
use App\Models\User;
use App\Models\Customer\Customer;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /** @var object|null $user */
    protected $user = [];
    /** @var object|null $customer */
    protected $customer = [];

    /**
     * Construct function
     */
    public function __construct()
    {
        $auth = Auth::user();
        if(!$auth) {
            return $this->sendError(Message::CONNECTION_KO, [
                'status' => false,
            ], 404);
        }

        $user = User::checkUserAuth($auth);
        if ($user) {
            $user['role'] = User::haveRole($user);
            $user['permission'] = User::havePermissions($user);;
            $customer = Customer::where('user_id', $user['id'])->first();

            $this->user = $user;
            $this->customer = $customer ?? [];
        }
    }
}
