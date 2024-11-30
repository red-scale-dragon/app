<?php

namespace App\Http\Controllers\Admin\Table;

use App\Models\DragonTest;
use Dragon\Http\Controllers\Admin\Table;

class DragonDataTable extends Table {
	protected static string $pageTitle = "Dragons";
	protected static string $menuText = "Dragons";
	protected static string $capability = "manage_options";
	protected static string $routeName = "admin-dragons";
	protected static string $slug = "admin-dragons";
	protected static string $parentSlug = "settings";
	
	protected bool $canCreate = true;
	protected bool $canRead = true;
	protected bool $canUpdate = true;
	protected bool $canDelete = true;
	
	protected string $detailsSlug = "admin-dragon-details";
	
	protected array $headers = [
		'name'			=> 'Name',
		'color'			=> 'Color',
		'created_at'	=> 'Creation Date',
	];
	
	protected function getRows() {
		return DragonTest::orderBy('created_at', 'DESC')->get();
	}
}
