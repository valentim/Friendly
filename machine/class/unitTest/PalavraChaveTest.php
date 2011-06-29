<?php

require_once 'Robo/PalavraChave.class.php';

require_once 'PHPUnit/Framework.php';

/**
 * PalavraChave test case.
 */
class PalavraChaveTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * @var PalavraChave
	 */
	private $PalavraChave;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated PalavraChaveTest::setUp()
		

		$this->PalavraChave = new PalavraChave("teste");
	
	}
	public function testRequest() {
		$request = $this->PalavraChave->request = true;
		$this->assertFalse($request, "True");
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated PalavraChaveTest::tearDown()
		

		$this->PalavraChave = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
	
	/**
	 * Tests PalavraChave->__construct()
	 */
	public function test__construct() {
		// TODO Auto-generated PalavraChaveTest->test__construct()
		$this->markTestIncomplete ( "__construct test not implemented" );
		
		$this->PalavraChave->__construct(/* parameters */);
	
	}
	
}
$test  = new PalavraChaveTest();
$test->testRequest();
