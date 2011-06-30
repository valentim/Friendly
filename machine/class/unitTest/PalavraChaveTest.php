<?php

require_once '../PalavraChave.class.php';
require_once 'PHPUnit/Autoload.php';

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
		$this->assertTrue($request);
	}
	
	public function testGetWord() {
		$this->assertInternalType('string', $this->PalavraChave->getWord());
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
		$this->PalavraChave = new PalavraChave("teste");
	}
	
}
