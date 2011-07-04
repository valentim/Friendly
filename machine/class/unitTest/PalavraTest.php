<?php

/**
 * test case.
 */
require_once '../Palavra.class.php';
require_once 'PHPUnit/Autoload.php';
class PalavraTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * Prepares the environment before running a test.
	 */
	private $Palavra;
	
	protected function setUp() {
		parent::setUp ();
	
		// TODO Auto-generated PalavraTest::setUp()
		$this->Palavra = Palavra::getInstance();
		$this->Palavra->setWord('Amor');
		$this->Palavra->doWrite();
	
	}
	
	public function testGetWord() {
		$this->assertInternalType('string', $this->Palavra->getWord());
	}
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated PalavraTest::tearDown()
		

		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
		$this->Palavra = Palavra::getInstance();
		$this->Palavra->setWord('Amor');
		$this->Palavra->doWrite();
	}

}

