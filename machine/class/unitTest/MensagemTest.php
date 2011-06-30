<?php

require_once '../Mensagem.class.php';
require_once '../Sintaxe.class.php';
require_once 'PHPUnit/Autoload.php';

/**
 * Mensagem test case.
 */
class MensagemTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * @var Mensagem
	 */
	private $Mensagem;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated MensagemTest::setUp()
		
		$this->Mensagem = new Mensagem(new Sintaxe(1));
		$this->Mensagem->create();
	
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated MensagemTest::tearDown()
		

		$this->Mensagem = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
		$this->Mensagem = new Mensagem(new Sintaxe(1));
		$this->Mensagem->create();
	}

	public function testGetFrase() {
		// TODO Auto-generated MensagemTest->testCreate()
		print_r($this->Mensagem->getFrase());
		$this->assertInternalType('string', $this->Mensagem->getFrase());
	
	}
	
	public function testGetMsg() {
		print_r($this->Mensagem->getMsg());
		$this->assertInternalType('string', $this->Mensagem->getMsg());
	}

}

