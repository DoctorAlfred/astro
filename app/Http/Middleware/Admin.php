<?php

namespace App\Http\Middleware;

use Closure;
use App\Lib\Message;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth('sanctum')->user();

        if($user) {
            $role = $user->roles->first()->code;
            if($role != 'adminx' && $role != 'admin' && $role != 'staff') {
                return response()->json(['error' => Message::PERMISE_API_KO], 400);
            } else {
                return $next($request);
            }
        }
        
        return response()->json(['error' => Message::PERMISE_API_KO], 400);

        // return $next($request);
    }
}
