<?php

use App\Taxonomy\DragonTax;

return [
	/*
	 |--------------------------------------------------------------------------
	 | Taxonomies
	 |--------------------------------------------------------------------------
	 |
	 | Set the class array to automatically populate all of your custom WP
	 | taxonomies. These classes must extend the Dragon\Posts\Taxonomy
	 | class and use properties to set the taxonomy slug and name.
	 |
	 */
	
	'tax' => [
		DragonTax::class,
	],
];
