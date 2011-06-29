<?php

require_once '../Sintaxe.class.php';
require_once 'PHPUnit/Autoload.php';
/**
 * Sintaxe test case.
 */
class SintaxeTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * @var Sintaxe
	 */
	private $Sintaxe;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated SintaxeTest::setUp()
		

		$this->Sintaxe = new Sintaxe(1);
	
	}
	
	public function testGetSintaxe() {
		$this->assertInternalType('integer', $this->Sintaxe->getSintaxe());
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated SintaxeTest::tearDown()
		

		$this->Sintaxe = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
		$this->Sintaxe = new Sintaxe(1);
	}
		
	/**
	 * Tests Sintaxe->getSentence()
	 */
	public function testGetSentence() {
		// TODO Auto-generated SintaxeTest->testGetSentence()
		
		$this->assertContains('PalavraChave', $this->Sintaxe->getSentence());
	
	}

}

