<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Dragon\Support\User;

class AdminSettingsRequest extends FormRequest {
	public function authorize(): bool {
		return is_admin() && User::isAdmin();
	}
	
	public function messages(): array {
		return [
			'remove_migrations_on_deactivation.in' => 'Remove DB tables on deactivation must be yes or no.',
		];
	}
	
	public function rules(): array {
		return [
			'remove_migrations_on_deactivation' => 'required|in:yes,no',
			'test_field'	=> 'string|nullable',
		];
	}
}
