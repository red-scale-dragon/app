<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Assets Manifest
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default asset manifest that should be used.
    | The "theme" manifest is recommended as the default as it cedes ultimate
    | authority of your application's assets to the theme.
    |
    */

    'default' => 'theme',

    /*
    |--------------------------------------------------------------------------
    | Assets Manifests
    |--------------------------------------------------------------------------
    |
    | Manifests contain lists of assets that are referenced by static keys that
    | point to dynamic locations, such as a cache-busted location. We currently
    | support two types of manifest:
    |
    | assets: key-value pairs to match assets to their revved counterparts
    |
    | bundles: a series of entrypoints for loading bundles
    |
    */

    'manifests' => [
        'theme' => [
            'path' => get_theme_file_path('public'),
            'url' => get_theme_file_uri('public'),
            'assets' => get_theme_file_path('public/manifest.json'),
            'bundles' => get_theme_file_path('public/entrypoints.json'),
        ],
    ],
	
    /*
     |--------------------------------------------------------------------------
     | Assets for All Pages
     |--------------------------------------------------------------------------
     |
     | An alternative to the above is to set your assets for the "admin" area,
     | "frontend", or "global" (both) in the arrays below. If you prefer
     | page-specific assets, you'll instead want to configure those in the
     | controller for the page/shortcode.
     |
     */
	'admin' => [
		'css' => [
			'app' => [
				'style' => 'global/admin.css',
			],
		],
		'js' => [
			//
		],
	],
	'frontend' => [
		'enable_ajax' => true,
		'css' => [
			'app' => [
				'style' => 'global/frontend.css',
			],
		],
		'js' => [
			'app' => [
				'script' => 'global/app.js',
				'dependencies' => ['jquery'],
			],
		],
	],
	'global' => [
		'css' => [
			//
		],
		'js' => [
			//
		],
	],
];
