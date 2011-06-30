<?php

/**
 * test case.
 */
require_once '../Twitter.class.php';
require_once 'PHPUnit/Autoload.php';

class TwitterTest extends PHPUnit_Framework_TestCase {
	private $Twitter;
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
	
		// TODO Auto-generated TwitterTest::setUp()
		$this->Twitter = Twitter::getInstance();

	}
	
	public function testGetMsg() {
		$this->Twitter->makeMsg('Paz e Amor, o mundo precisa');
		$this->assertInternalType('string', $this->Twitter->getMsg());
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated TwitterTest::tearDown()
		

		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
		$this->Twitter = Twitter::getInstance();
	}

}

