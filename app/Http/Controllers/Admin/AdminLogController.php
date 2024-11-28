<?php

namespace App\Http\Controllers\Admin;

use Dragon\Http\Controllers\Admin\AdminLogController as DragonAdminLogController;

class AdminLogController extends DragonAdminLogController {
	protected static string $pageTitle = "Log";
	protected static string $menuText = "Log";
	protected static string $capability = "manage_options";
	protected static string $routeName = "admin-log";
	protected static string $slug = "log";
	protected static string $parentSlug = "settings";
}
