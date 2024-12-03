<?php

namespace App\Http\Controllers\Admin\Table;

use App\Http\Requests\Admin\DragonDataDetailsRequest;
use Dragon\Http\Form\Textbox;
use Illuminate\Http\Request;
use App\Models\DragonTest;
use Dragon\Http\Controllers\Admin\Details;

class DragonDataDetails extends Details {
	protected static string $pageTitle = "Dragon Details";
	protected static string $menuText = "Dragon Details";
	protected static string $capability = "manage_options";
	protected static string $routeName = "admin-dragon-details";
	protected static string $slug = "admin-dragon-details";
	protected static string $parentSlug = "admin-dragons";
	protected static bool $readOnly = false;
	
	protected string $modelName = DragonTest::class;
	
	protected array $encryptedFields = [
		//
	];
	
	public function store(DragonDataDetailsRequest $request) {
		return $this->save($request);
	}
	
	protected function getFields(Request $request) {
		return [
			Textbox::make('name')
			->value($this->getValue($request->get('id'), 'name'))
			->label('What\'s the dragon\'s name?')
			->required(),
			Textbox::make('color')
			->value($this->getValue($request->get('id'), 'color'))
			->label('What color is the dragon?')
			->required(),
		];
	}
}
