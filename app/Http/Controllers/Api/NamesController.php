<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class NamesController extends Controller {
	public function show(Request $request) {
		return [
			'Black Drack',
			'Red Scale',
		];
	}
}
