<?php

use App\Cron;

return [
	/*
	 |--------------------------------------------------------------------------
	 | Schedules
	 |--------------------------------------------------------------------------
	 |
	 | Set the name of the schedule to an array containing "interval" in seconds
	 | between runs, and "display" for the name to appear in WP when viewing the
	 | list of cron jobs.
	 |
	 */
	'schedules' => [
		'dragon_every_minute' => [
			'interval' => 60,
			'display' => 'Once Every Minute',
		],
	],
	
	/*
	 |--------------------------------------------------------------------------
	 | Actions
	 |--------------------------------------------------------------------------
	 |
	 | Set the name of the action to an array containing "schedule" which is a
	 | slug for any schedule in WP, including the default schedules of "hourly",
	 | "twicedaily", "daily", and "weekly". Also set "callback" to a callable.
	 |
	 */
	'actions' => [
		'dragon_spew_fire' => [
			'callback' => [Cron::class, 'spewFire'],
			'schedule' => 'dragon_every_minute',
		],
	],
];
