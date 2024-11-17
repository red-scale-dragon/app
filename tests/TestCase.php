<?php

namespace Tests;

use Dragon\DB;

class TestCase extends \WP_UnitTestCase {
	public function setUp() : void {
		$db = DB::make();
		$db->migrate();
	}
	
	public function tearDown() : void {
		$db = DB::make();
		$db->rollback();
	}
}
