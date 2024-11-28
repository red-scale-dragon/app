<?php

use App\Http\Controllers\Shortcode\ExampleController;

return [
	/*
	 |--------------------------------------------------------------------------
	 | Shortcode Controllers
	 |--------------------------------------------------------------------------
	 |
	 | Your front end WP shortcodes are loaded through a type of sandboxed route.
	 | This allows you the flexibility of adding a route in /routes/web.php
	 | using the typical capabilities, yet still keeping your WordPress styling
	 | instead of using Acorn's native "virtual pages" which load the page on a
	 | blank page. (Virtual pages are still possible, mind you.)
	 |
	 | List your shortcode controllers here, and extend the ShortcodeController.
	 | Be sure to set the properties for your shortcode tag, and the name of the
	 | route you'd like to use for your shortcode. Optionally set the JS/CSS
	 | assets that should load for your shortcode.
	 |
	 */
	
	'controllers' => [
		ExampleController::class,
	],
];
