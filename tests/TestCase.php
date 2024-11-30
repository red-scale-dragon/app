<?php

namespace Tests;

use Dragon\Database\Migrate;

class TestCase extends \WP_UnitTestCase {
	public function setUp() : void {
		Migrate::up();
	}
	
	public function tearDown() : void {
		Migrate::removeDatabaseTables();
	}
	
	protected function checkRequirements() {
		// Shhhhh... Stop the useless warnings.
	}
}
