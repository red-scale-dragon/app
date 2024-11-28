<?php

namespace App\Http\Controllers\Shortcode;

use Illuminate\Http\Request;
use Dragon\Http\Controllers\ShortcodeController;

class ExampleController extends ShortcodeController {
	/**
	 * See the app.namespace config setting to set the prefix attached to your tag.
	 */
	protected static string $shortcodeTag = "dragon_test";
	protected static string $routeName = "example-shortcode";
	
	protected static array $scripts = [
		'example' => [
			'script' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js',
		],
	];
	
	protected static array $styles = [
		'example' => [
			'style' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css',
		],
	];
	
	public function show(Request $request) {
		static::loadPageAssets();
		
        return view('shortcode.dragon-test', [
        	'page_url' => $request->attributes->get('url'),
        	'shortcode_url' => $request->url(),
        	'content' => $request->attributes->get('content'),
        ]);
    }
}
