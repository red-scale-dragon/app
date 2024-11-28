<?php

use Illuminate\Support\Facades\Route;
use Dragon\Core\Config;
use App\Http\Controllers\Admin\SettingsController;
use Dragon\Http\Middleware\ValidatesNonce;
use App\Http\Controllers\Shortcode\ExampleController;
use App\Http\Controllers\Admin\AdminLogController;

/*
 |--------------------------------------------------------------------------
 | Web Routes
 |--------------------------------------------------------------------------
 |
 | Here is where you can register web routes for your application.
 |
 */

Route::view('/plugin-author/', 'plugin-author')->name('plugin-author');

Route::middleware(['web'])->prefix(Config::prefix())->group(function () {
	Route::controller(SettingsController::class)->name('admin-settings')->group(function () {
		Route::get('admin-settings', 'show');
		Route::post('admin-settings', 'store')->middleware(ValidatesNonce::class);
	});
	
	Route::controller(AdminLogController::class)->name('admin-log')->group(function () {
		Route::get('admin-log', 'show');
		Route::post('admin-log', 'clear')->middleware(ValidatesNonce::class);
	});
	
	Route::controller(ExampleController::class)->name('example-shortcode')->group(function () {
		Route::get('example-shortcode', 'show');
	});
});
