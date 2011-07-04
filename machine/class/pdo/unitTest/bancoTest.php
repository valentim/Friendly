<?php

/**
 * test case.
 */
require_once '../Banco.class.php';
class bancoTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * Prepares the environment before running a test.
	 */
	private $db;
	protected function setUp() {
		parent::setUp ();
	
		// TODO Auto-generated bancoTest::setUp()
		$this->db = Banco::getInstance();	

	}
	
	public function testConn() {
		$this->assertInternalType('string', $this->db);
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated bancoTest::tearDown()
		

		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}

}

