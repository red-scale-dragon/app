<?php

namespace Tests;

use Dragon\Database\Migrate;

class TestCase extends \WP_UnitTestCase {
	
	public function setUp() : void {
		static::wpSetUp();
		Migrate::up();
	}
	
	public function tearDown() : void {
		Migrate::removeDatabaseTables();
		parent::tearDown();
	}
	
	protected function checkRequirements() {
		// Shhhhh... Stop the useless warnings.
	}
	
	protected function wpSetUp() {
		set_time_limit( 0 );
		
		$this->factory = static::factory();
		
		if ( ! self::$ignore_files ) {
			self::$ignore_files = $this->scan_user_uploads();
		}
		
		if ( ! self::$hooks_saved ) {
			$this->_backup_hooks();
		}
		
		global $wp_rewrite;
		
		$this->clean_up_global_scope();
		
		/*
		 * When running core tests, ensure that post types and taxonomies
		 * are reset for each test. We skip this step for non-core tests,
		 * given the large number of plugins that register post types and
		 * taxonomies at 'init'.
		 */
		if ( defined( 'WP_RUN_CORE_TESTS' ) && WP_RUN_CORE_TESTS ) {
			$this->reset_post_types();
			$this->reset_taxonomies();
			$this->reset_post_statuses();
			$this->reset__SERVER();
			
			if ( $wp_rewrite->permalink_structure ) {
				$this->set_permalink_structure( '' );
			}
		}
		
		$this->start_transaction();
		add_filter( 'wp_die_handler', array( $this, 'get_wp_die_handler' ) );
	}
}
