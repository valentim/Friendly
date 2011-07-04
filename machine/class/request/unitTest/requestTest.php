<?php

/**
 * test case.
 */
require_once '../Request.class.php';

class requestTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * Prepares the environment before running a test.
	 */
	private $request;
	protected function setUp() {
		parent::setUp ();
	
		// TODO Auto-generated requestTest::setUp()
		$this->request = new Request('Adjetivo', 'amor');

	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated requestTest::tearDown()
		

		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
		$this->request = new Request('Adjetivo', 'amor');
	}

}

