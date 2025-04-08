<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Dragon\Support\User;

class DragonDataDetailsRequest extends FormRequest {
	public function messages(): array {
		return [
			'name.required' => 'Name is required.',
			'color.required' => 'Color is required.',
		];
	}
	
	public function rules(): array {
		return [
			'name' => 'required',
			'color' => 'required',
		];
	}
}
