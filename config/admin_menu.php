<?php

use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\AdminLogController;

return [
	/*
	 |--------------------------------------------------------------------------
	 | Menus
	 |--------------------------------------------------------------------------
	 |
	 | Your admin menu sidebar contains "menu" items which are the ones with icons,
	 | "submenu" items which appear indented under the "menu" items", as well as
	 | "hidden_menu" pages which are pages that do not appear in the sidebar. (Ex.
	 | a page linked to from another page.)
	 |
	 | Each array below consists of controllers that extend the AdminPageController
	 | either directly or indirectly. The properties on AdminPageController set
	 | the parent menu slug, menu text, slug, and more.
	 |
	 */
	
	'menu' => [
		SettingsController::class,
	],
	'submenu' => [
		AdminLogController::class,
	],
	'hidden_menu' => [
		
	],
];
