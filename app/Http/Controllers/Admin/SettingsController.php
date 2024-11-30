<?php

namespace App\Http\Controllers\Admin;

use Dragon\Http\Controllers\Admin\SettingsController as DragonSettingsController;
use App\Http\Requests\Admin\AdminSettingsRequest;
use Illuminate\Http\Request;

class SettingsController extends DragonSettingsController {
	protected static string $pageTitle = "Admin Settings";
	protected static string $menuText = "Dragon Settings";
	protected static string $capability = "manage_options";
	protected static string $routeName = "admin-settings";
	protected static string $slug = "settings";
	
	protected array $encryptedFields = [
		//
	];
	
	public function store(AdminSettingsRequest $request) {
		return $this->save($request);
	}
    
	protected function getFields(Request $request) {
    	return array_merge(parent::getFields($request), [
    		//
    	]);
    }
}
