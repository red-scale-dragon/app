<?php

use App\PostTypes\DragonPostType;

return [
	/*
	 |--------------------------------------------------------------------------
	 | Post Types
	 |--------------------------------------------------------------------------
	 |
	 | Set the class array to automatically populate all of your custom WP
	 | post types. These classes must extend the Dragon\Posts\PostType
	 | class and use properties to set the slug and name.
	 |
	 */
	
	'post_types' => [
		DragonPostType::class,
	],
];
