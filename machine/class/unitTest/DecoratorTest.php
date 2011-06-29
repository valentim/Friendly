<?php

require_once 'Adjetivo.class.php';

require_once 'PHPUnit/Autoload.php';

/**
 * Adjetivo test case.
 */
class DecoratorTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * @var Adjetivo
	 */
	private $Adjetivo;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated DecoratorTest::setUp()
		

		$this->Adjetivo = new Adjetivo();
	
	}
	
	public function testCmp() {
		$this->assertNull($this->Adjetivo->getCmp(), "Customizei");
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated DecoratorTest::tearDown()
		

		$this->Adjetivo = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
		$this->Adjetivo = new Adjetivo('bonito', new Adjetivo('feio'));
	}
	
	/**
	 * Tests Adjetivo->getWord()
	 */
	public function testGetWord() {
		// TODO Auto-generated DecoratorTest->testGetWord()
		$this->markTestIncomplete ( "getWord test not implemented" );
		
		$this->assertNull($this->Adjetivo->getWord(/* parameters */));
		
	
	}

}
$test = new DecoratorTest();
$test->testCmp();
