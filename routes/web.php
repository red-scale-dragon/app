<?php

use Illuminate\Support\Facades\Route;
use Dragon\Core\Config;
use App\Http\Controllers\Admin\SettingsController;
use Dragon\Http\Middleware\ValidatesNonce;
use App\Http\Controllers\Shortcode\ExampleController;
use App\Http\Controllers\Admin\AdminLogController;
use App\Http\Controllers\Admin\Table\DragonDataTable;
use App\Http\Controllers\Admin\Table\DragonDataDetails;
use Dragon\Http\Middleware\AdminOnly;
use Dragon\Http\Controllers\Admin\Table\ConfigurationEditorTable;
use Dragon\Http\Controllers\Admin\Table\ConfigurationFileDetails;

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
	
	Route::middleware(AdminOnly::class)->group(function () {
		Route::controller(SettingsController::class)->name('admin-settings')->group(function () {
			Route::get('admin-settings', 'show');
			Route::post('admin-settings', 'store')->middleware(ValidatesNonce::class);
		});
			
		Route::controller(ConfigurationEditorTable::class)->name('admin-config-editor')->group(function () {
			Route::get('admin-config-editor', 'show');
		});
		
		Route::controller(ConfigurationFileDetails::class)->name('admin-config-editor-details')->group(function () {
			Route::get('admin-config-editor-details', 'show');
			Route::post('admin-config-editor-details', 'store')->middleware(ValidatesNonce::class);
		});
		
		Route::controller(AdminLogController::class)->name('admin-log')->group(function () {
			Route::get('admin-log', 'show');
			Route::post('admin-log', 'clear')->middleware(ValidatesNonce::class);
		});
		
		Route::controller(DragonDataTable::class)->name('admin-dragons')->group(function () {
			Route::get('admin-dragons', 'show');
			Route::delete('admin-dragons', 'delete');
		});
		
		Route::controller(DragonDataDetails::class)->name('admin-dragon-details')->group(function () {
			Route::get('admin-dragon-details', 'show');
			Route::post('admin-dragon-details', 'store')->middleware(ValidatesNonce::class);
		});
	});
		
	Route::controller(ExampleController::class)->name('example-shortcode')->group(function () {
		Route::get('example-shortcode', 'show');
	});
});
