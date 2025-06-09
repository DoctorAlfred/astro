<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CheckSanctumAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth('sanctum')->user()) {
            Log::error('BAD_REQUEST', ['login' => false, 'request' => $request->all()]);
            return response()->json(['status' => false, 'message' => 'BAD_REQUEST', 'errors' => ['login' => false, 'request' => $request]], 401);
        }
        
        return $next($request);
    }
}
