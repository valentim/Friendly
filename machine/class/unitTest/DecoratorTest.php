<?php

require_once '../Adjetivo.class.php';
require_once '../Expressao.class.php';

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

		$this->Adjetivo = new Adjetivo(null, new Adjetivo(null, new Expressao(null)));
	
	}
	
	public function testMake() {
		$this->assertInternalType('string', $this->Adjetivo->make());
	}
	
	public function testName() {
		$this->assertInternalType('string', $this->Adjetivo->getName());
	}
	
	public function testMakeRequest() {
		$this->assertInternalType('string', $this->Adjetivo->makeRequest());
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
		$this->Adjetivo = new Adjetivo(null, new Adjetivo(null, new Expressao(null)));
	}

}

