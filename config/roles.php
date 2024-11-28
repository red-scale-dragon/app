<?php

return [
	/*
	 |--------------------------------------------------------------------------
	 | Roles
	 |--------------------------------------------------------------------------
	 |
	 | The RoleServiceProvider will load all of the roles listed here. Set the
	 | slug for the role to an array consisting of the "name" to display and the
	 | "capabilities" array. The "capabilities" array sets each capability to
	 | true to enable it, or false if you want to take that capability away.
	 | 
	 | "administrator" is a special role, and it contains a list of capabilities
	 | to add or remove any custom capabilities you're adding to the system.
	 | This way you can grant extra capabilities to admins without having to check
	 | the user's role or if they have "manage_options" or the like in addition
	 | to checking the capability. 
	 |
	 */
	
	'roles' => [
		'dragon_master' => [
			'name' => 'Dragon Master',
			'capabilities' => [
				'read'				=> true,
				'edit_user'			=> true,
				'authorize_dragons'	=> true,
			],
		],
		'administrator' => [
			'capabilities' => [
				'authorize_dragons' => true,
			],
		],
	],
];
