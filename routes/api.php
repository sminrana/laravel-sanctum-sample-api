<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\PassportController;
use App\Http\Controllers\PrivateAPIController;

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
//Route::get('products', [PrivateAPIController::class, "index"])->name("private-apis");

Route::prefix('private')->middleware(['auth:sanctum'])->group(function () {
    Route::get('products', [PrivateAPIController::class, "index"])->name("products");
});
