<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\PassportController;
use App\Http\Controllers\PrivateAPIController;
use App\Http\Controllers\PublicAPIController;

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

Route::post('create', [PassportController::class, 'create']);
Route::post('login', [PassportController::class, 'login']);

// Public API
Route::get('products', [PublicAPIController::class, "index"])->name("products");

// Private user api
Route::prefix('user')->middleware(['auth:sanctum'])->group(function () {
    Route::get('cart', [PrivateAPIController::class, "index"])->name("user_cart");
});
