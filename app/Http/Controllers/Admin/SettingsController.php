<?php

namespace App\Http\Controllers\Admin;

use Dragon\Http\Controllers\Admin\SettingsController as DragonSettingsController;

class SettingsController extends DragonSettingsController {
	protected static string $pageTitle = "Admin Settings";
	protected static string $menuText = "Dragon Settings";
	protected static string $capability = "manage_options";
	protected static string $routeName = "admin-settings";
	protected static string $slug = "settings";
	
	protected array $encryptedFields = [
		//
	];
    
    protected function getFields() {
    	return array_merge(parent::getFields(), [
    		//
    	]);
    }
}
