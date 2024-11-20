<?php

use Dragon\Core\Boot;
use Dragon\Core\Config;

/**
 * Plugin Name: Dragon App
 * Description: You can configure this text in your loader.php file.
 * Author: Dragon Framework
 * Author URI: https://github.com/red-scale-dragon/app
 * Text Domain: dragon-app
 * Version: 1.0.0
 * Requires at least: 5.4
 * Requires PHP: 8.1
 * Tested up to: 6.7
 * License: MIT
 */

require_once('vendor/autoload.php');

Config::setPluginLoaderFile(__FILE__);
Boot::init();
