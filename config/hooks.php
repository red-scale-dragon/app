<?php

use App\UserProfile;
use App\Http\Ajax\DragonAjax;
use App\Exceptions\Handler;

return [
	/*
	 |--------------------------------------------------------------------------
	 | Activation and Deactivation
	 |--------------------------------------------------------------------------
	 |
	 | If you wish to have code called during the activation and/or deactivation
	 | of your plugin, then you can set the callbacks here. There isn't a hook name,
	 | nor are any parameters passed to your callbacks.
	 |
	 | EXAMPLE:
	 |	'activation' => [
	 |		[ClassName::class, 'method'],
	 |		[ClassName::class, 'method2']
	 |	],
	 |
	 */
	'activation' => [
		//
	],
	'deactivation' => [
		//
	],
	
	/*
	 |--------------------------------------------------------------------------
	 | Actions and Filters
	 |--------------------------------------------------------------------------
	 |
	 | The same layout is used for both actions and filters below. This is where
	 | you configure all of your WP hooks for your app. each actions/filters
	 | array contains key names for each hook, mapped to an array of callbacks
	 | for that hook, which in turn must contain a "callback", and optionally
	 | a "priority" integer, and/or an "args" integer for the number of arguments.
	 |
	 | EXAMPLE:
	 |	'hook_name_here' => [
	 |		[
	 |			'callback'  => [ClassName::class, 'method'],
	 |			'priority'  => 5, //Default is 10
	 |			'args'		=> 2, // Default is 1
	 |		]
	 |	],
	 |
	 */
	'admin' => [
		'actions' => [
			'show_user_profile' => [
				['callback' => [UserProfile::class, 'render']],
			],
			'edit_user_profile' => [
				['callback' => [UserProfile::class, 'render']],
			],
			'personal_options_update' => [
				['callback' => [UserProfile::class, 'update']],
			],
			'edit_user_profile_update' => [
				['callback' => [UserProfile::class, 'update']],
			],
		],
		'filters' => [
			//
		],
	],
	'frontend' => [
		'actions' => [
			//
		],
		'filters' => [
			//
		],
	],
	'global' => [
		'actions' => [
			//
		],
		'filters' => [
			'acorn/throw_error_exception' => [
				[
					'callback'	=> [Handler::class, 'shouldShow'],
					'args'		=> 2,
				],
			],
		],
	],
	
	/*
	 |--------------------------------------------------------------------------
	 | Ajax Hooks
	 |--------------------------------------------------------------------------
	 |
	 | To add an ajax endpoint to your admin area or frontend, set the name of the
	 | hook to an array of callbacks. The hook name will get namespaced using the
	 | value set in config('app.namespace'), so be sure to use the full hook name
	 | whenever you call it.
	 |
	 | Each callback array contains "frontend" which is true or false depending on
	 | if you want it available on the frontend of the website. It also takes a
	 | "callback" set to a callable.
	 |
	 */
	'ajax' => [
		'get_dragon_names' => [
			[
				'frontend' => true,
				'callback' => [DragonAjax::class, 'getNames'],
			],
		],
	],
];
