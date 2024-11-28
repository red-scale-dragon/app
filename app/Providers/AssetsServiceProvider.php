<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Dragon\Assets\Asset;

class AssetsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    	$hook = is_admin() ? 'admin_enqueue_scripts' : 'wp_enqueue_scripts';
    	add_action($hook, function () {
    		Asset::loadScript('app', 'global/app.js');
    		
    		if (is_admin()) {
    			Asset::loadCss('app', 'global/admin.css');
    		} else {
    			Asset::enableFrontendAjax('app');
    			Asset::loadCss('app', 'global/frontend.css');
    		}
    	});
    }
}
