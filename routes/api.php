<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APi\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1/auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('signup', [AuthController::class, 'signup']);

    Route::post('resend_code', [AuthController::class, 'resendCode']);
    Route::post('confirm_code', [AuthController::class, 'confirmCode']);

    // Route::post('password/create', 'Api\PasswordResetController@create');
    // Route::middleware('auth:api')->group(function () {
    //     Route::get('logout', 'Api\AuthController@logout');
    //     Route::get('user', 'Api\AuthController@user');
    // });
});


Route::fallback(function () {
    return response()->json([
        'data' => [],
        'success' => false,
        'status' => 404,
        'message' => 'Invalid Route'
    ]);
});
