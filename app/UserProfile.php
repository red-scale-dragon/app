<?php

namespace App;

use Dragon\Support\User;

class UserProfile {
	public static function render(\WP_User $user) {
		$data = [
			'name_of_dragon' => User::getMeta('name_of_dragon', null, $user->ID),
		];
		
		if (User::isAdmin()) {
			$data['admin_notes'] = User::getMeta('admin_notes', null, $user->ID);
		}
		
		echo view('admin.profile', $data);
	}
	
	public static function update(int $userId) {
		if (empty(request('_wpnonce')) || !wp_verify_nonce(request('_wpnonce'), 'update-user_' . $userId)) {
			return;
		}
		
		if (!current_user_can('edit_user', $userId)) {
			return;
		}
		
		User::setMeta('name_of_dragon', request('name_of_dragon'), $userId);
		
		if (User::isAdmin()) {
			User::setMeta('admin_notes', request('admin_notes'), $userId);
		}
	}
}
