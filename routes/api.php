<?php

use Illuminate\Support\Facades\Route;
use Dragon\Core\Config;
use App\Http\Controllers\Api\NamesController;

/*
 |--------------------------------------------------------------------------
 | API Routes
 |--------------------------------------------------------------------------
 |
 | Here is where you can register API routes for your application. These
 | routes are loaded by the RouteServiceProvider and all of them will
 | be assigned to the "api" middleware group. Make something great!
 |
 */

Route::middleware('api')->prefix(Config::prefix())->group(function () {
	Route::controller(NamesController::class)->name('api-names')->group(function () {
		Route::get('names', 'show');
	});
});
