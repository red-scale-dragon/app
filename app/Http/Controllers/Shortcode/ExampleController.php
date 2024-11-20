<?php

namespace App\Http\Controllers\Shortcode;

use Illuminate\Http\Request;
use Dragon\Controllers\ShortcodeController;

class ExampleController extends ShortcodeController {
	/**
	 * See the app.namespace config setting to set the prefix attached to your tag.
	 */
	protected static string $shortcodeTag = "dragon_test";
	
    public function render(Request $request) {
        return view('shortcode.dragon-test', [
        	'page_url' => $request->url(),
        	'content' => $this->content,
        ]);
    }
}
