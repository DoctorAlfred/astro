<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Test\Test;
use Illuminate\Support\Facades\Route;
use Illuminate\Session\Middleware\StartSession;
use App\Http\Controllers\Api\NumerologyController;
use App\Http\Controllers\Api\User\AuthController;

Route::get('/test', [Test::class, 'test']);

Route::group([
    'as' => 'astro.'
], function () {

    // ---------- ---------- ---------- AUTH ---------- ---------- ---------- //
    Route::group([
        'prefix' => 'auth',
        'as' => 'auth.',
        'name' => 'auth.',
    ], function () {
        // GET Method
        Route::get('/verify/token/{token}', [\App\Http\Controllers\Api\Auth\LoginController::class, 'checkToken']);
        // POST Method
        Route::post('/login', [\App\Http\Controllers\Api\Auth\LoginController::class, 'login'])->middleware(StartSession::class);
        Route::post('/check/token', [\App\Http\Controllers\Api\Auth\LoginController::class, 'checkTokenResetPassword']);           // If you need to reset your password from user
        Route::post('/password/forgot', [\App\Http\Controllers\Api\Auth\ForgotController::class, 'forgot']);
        Route::post('/password/recovery', [\App\Http\Controllers\Api\Auth\ResetPasswordController::class, 'resetPassword']);

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
            Route::post('/register', [\App\Http\Controllers\Api\Auth\RegisterController::class, 'register']);
        });
    });

    // ---------- ---------- ---------- Numerology ---------- ---------- ---------- //
    Route::prefix('numerology')->group(function () {
        Route::post('/nai-from-date', [NumerologyController::class, 'naiFromDate']);
        Route::post('/nai-from-name', [NumerologyController::class, 'naiFromName']);

        Route::post('/nai-matrix', [NumerologyController::class, 'naiMatrix']);
    });

    // ---------- ---------- ---------- AUTH ---------- ---------- ---------- //
    Route::group([
        'prefix' => 'user',
        'as' => 'user.',
        'name' => 'user.',
        'middleware' => ['auth:sanctum', 'authenticated', 'admin']
    ], function () {
        // GET Method
        // Route::get('/me', [\App\Http\Controllers\UserController::class, 'me']);
        // POST Method
        // Route::post('/add', [\App\Http\Controllers\UserController::class, 'addNewUser']);
    });

    // ---------- ---------- ---------- AUTH ---------- ---------- ---------- //
    Route::group([
        'prefix' => 'customer',
        'as' => 'customer.',
        'name' => 'customer.',
        'middleware' => ['auth:sanctum', 'authenticated', 'admin']
    ], function () {
        // GET Method
        // Route::get('/get', [\App\Http\Controllers\Customer\CustomerController::class, 'getCustomerData']);
        // POST Method
        // Route::post('/add', [\App\Http\Controllers\Customer\CustomerController::class, 'addNewCustomer']);
    });

    // ---------- ---------- ---------- AUTH ---------- ---------- ---------- //
    Route::group([
        'prefix' => 'site',
        'as' => 'site.',
        'name' => 'site.'
    ], function () {
        // GET Method
        // Route::get('/check/{url}', [\App\Http\Controllers\Site\SiteController::class, 'checkSite']);                    // Check if the site is present and active
        // POST Method 
        // Route::post('/update/links', [\App\Http\Controllers\Site\SiteController::class, 'updateSiteLinks']);            // Update Links

        Route::group([
            'prefix' => 'admin',
            'as' => 'admin.',
            'name' => 'admin.',
            'middleware' => ['auth:sanctum', 'authenticated', 'admin']
        ], function () {
            // GET Method
            // Route::get('/toggle/{url}', [\App\Http\Controllers\Site\SiteController::class, 'activateSite']);                // Activate or Deactivate the Web Site
            // POST Method 
            // Route::post('/add', [\App\Http\Controllers\Site\SiteController::class, 'addSite']);                             // Manually adding a website
            // Route::post('/verify/script', [\App\Http\Controllers\Site\SiteController::class, 'verifyInstallScriptOnSite']); // Activate or Deactivate the Web Site
            // Route::post('/install', [\App\Http\Controllers\Site\SiteController::class, 'installSite']);                     // Activate or Deactivate the Web Site
        });
    });

    // ---------- ---------- ---------- AUTH ---------- ---------- ---------- //
    Route::group([
        'prefix' => 'ai',
        'as' => 'ai.',
        'name' => 'ai.',
        'middleware' => ['auth:sanctum', 'authenticated', 'admin']
    ], function () {
        // GET Method
        // Route::get('/get/chat/{name?}', [\App\Http\Controllers\Ai\AiController::class, 'getAiChat'])->name('get.model'); // Get All or Single Ai Models
        // Route::get('/get/model/{group?}', [\App\Http\Controllers\Ai\AiController::class, 'getAiModels'])->name('get.model'); // Get All or Single Ai Models
        // Route::get('/get/prompt/{id?}', [\App\Http\Controllers\Ai\AiController::class, 'getAiPrompt'])->name('get.prompt');  // Get All or Single Prompt to database
        // POST Method
        // Route::post('/add-update', [\App\Http\Controllers\Ai\AiController::class, 'addOrUpdateFirstPrompt']);                // Manually adding or update Prompt
        // Route::post('/continue-prompt', [\App\Http\Controllers\Ai\AiController::class, 'continuePrompt']);                          // Manually adding or update Prompt
    });

    // ---------- ---------- ---------- AUTH ---------- ---------- ---------- //
    // ---------- ---------- ---------- AUTH ---------- ---------- ---------- //
    // ---------- ---------- ---------- AUTH ---------- ---------- ---------- //
    // ---------- ---------- ---------- AUTH ---------- ---------- ---------- //
    // ---------- ---------- ---------- AUTH ---------- ---------- ---------- //

});



// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');
