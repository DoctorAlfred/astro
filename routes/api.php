<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Session\Middleware\StartSession;

Route::get('/test', function () {
    return response()->json([
        'ok'      => true,
        'message' => 'Benvenuti su Astro',
    ]);
});

Route::group([
    'as' => 'astro.'
], function () {

    // Route::get('/test', [\App\Http\Controllers\Test\Test::class, 'test']);

    // ---------- ---------- ---------- AUTH ---------- ---------- ---------- //
    Route::group([
        'prefix' => 'auth',
        'as' => 'auth.',
        'name' => 'auth.',
    ], function () {
        // GET Method
        Route::get('/verify/token/{token}', [\App\Http\Controllers\Api\Auth\VerificationController::class, 'checkToken']);
        // POST Method
        Route::post('/login', [\App\Http\Controllers\Api\Auth\LoginController::class, 'login'])->middleware(StartSession::class);
        Route::post('/check/token', [\App\Http\Controllers\Api\Auth\LoginController::class, 'checkTokenResetPassword']);           // If you need to reset your password from user
        Route::post('/password/forgot', [\App\Http\Controllers\Api\Auth\ForgotController::class, 'forgot']);
        Route::post('/password/recovery', [\App\Http\Controllers\Api\Auth\ResetPasswordController::class, 'resetPassword']);
        Route::post('/register', [\App\Http\Controllers\Api\Auth\RegisterController::class, 'register']);

        Route::group([
            'prefix' => 'logged',
            'as' => 'logged.',
            'name' => 'logged.',
            'middleware' => ['auth:sanctum', 'authenticated', 'admin']
        ], function () {
            // GET Method
            Route::get('/activate/{userId}/{from?}', [\App\Http\Controllers\Api\Auth\VerificationController::class, 'activate']);
            // POST Method
            Route::post('/logout', [\App\Http\Controllers\Api\Auth\LoginController::class, 'logout']);
            
        });
    });

    // ---------- ---------- ---------- STONES ---------- ---------- ---------- //
    Route::group([
        'prefix' => 'angels',
        'as' => 'angels.',
        'name' => 'angels.',
        'middleware' => ['auth:sanctum', 'authenticated']
    ], function () {
        Route::get('/all/{number?}', [\App\Http\Controllers\Angel\AngelController::class, 'getAngels']);
    });

    // ---------- ---------- ---------- Numerology ---------- ---------- ---------- //
    Route::group([
        'prefix' => 'numerology',
        'as' => 'numerology.',
        'name' => 'numerology.',
        'middleware' => ['auth:sanctum', 'authenticated']
    ], function () {
        // NAI
        Route::post('/nai-from-date', [App\Http\Controllers\Numerology\NaiController::class, 'naiFromDate']);
        Route::post('/nai-from-name', [App\Http\Controllers\Numerology\NaiController::class, 'naiFromName']);
        Route::post('/nai-matrix', [App\Http\Controllers\Numerology\NaiController::class, 'naiMatrix']);
        // Pythagoric
        Route::post('/pythagoric', [App\Http\Controllers\Numerology\PythagoricController::class, 'pythagoric']);
    });
    
    // ---------- ---------- ---------- STONES ---------- ---------- ---------- //
    Route::group([
        'prefix' => 'stones',
        'as' => 'stones.',
        'name' => 'stones.',
        'middleware' => ['auth:sanctum', 'authenticated']
    ], function () {
        Route::post('/daily', [\App\Http\Controllers\Stones\StonesController::class, 'daily']);
    });

    // ---------- ---------- ---------- USER ---------- ---------- ---------- //
    Route::group([
        'prefix' => 'user',
        'as' => 'user.',
        'name' => 'user.',
        'middleware' => ['auth:sanctum', 'authenticated']
    ], function () {
        // GET Method
        Route::get('/me', [\App\Http\Controllers\UserController::class, 'me']);
        // POST Method
        // Route::post('/add', [\App\Http\Controllers\UserController::class, 'addNewUser']);

        Route::group([
            'prefix' => 'admin',
            'as' => 'admin.',
            'name' => 'admin.',
            'middleware' => ['admin']
        ], function () {
            // GET Method
            Route::get('/all', [\App\Http\Controllers\UserController::class, 'getUsers']);
            // POST Method
            Route::post('/add', [\App\Http\Controllers\UserController::class, 'addNewUser']);
            Route::post('/change-role', [\App\Http\Controllers\UserController::class, 'changeUserRole']);
        });
    });

    // ---------- ---------- ---------- CUSTOMER ---------- ---------- ---------- //
    Route::group([
        'prefix' => 'customer',
        'as' => 'customer.',
        'name' => 'customer.',
        'middleware' => ['auth:sanctum', 'authenticated', 'admin']
    ], function () {
        // GET Method
        Route::get('/get-contacts', [\App\Http\Controllers\Customer\CustomerController::class, 'getContacts']);
        // POST Method
        Route::post('/add-contact', [\App\Http\Controllers\Customer\CustomerController::class, 'addNewContact']);
    });
});
