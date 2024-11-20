<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Dragon\Controllers\AdminPageController;

class SettingsController extends AdminPageController {
	protected static string $pageTitle = "Admin Settings";
	protected static string $menuText = "Dragon Settings";
	protected static string $capability = "manage_options";
	protected static string $slug = "settings";
	
    public function render(Request $request) {
        echo view('admin.settings', [
        	'page_url' => $request->url(),
        	'title' => static::$pageTitle,
        ]);
    }
}
