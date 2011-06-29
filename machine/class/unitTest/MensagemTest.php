<?php

require_once 'Mensagem.class.php';
require_once ('Sintaxe.class.php');

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
	}
	
	/**
	 * Tests Mensagem->getSentence()
	 */
	public function testGetSentence() {
		// TODO Auto-generated MensagemTest->testGetSentence()		
		$this->assertInstanceOf('Sintaxe', $this->Mensagem->getSentence());
	
	}
	
	/**
	 * Tests Mensagem->create()
	 */
	public function testCreate() {
		// TODO Auto-generated MensagemTest->testCreate()
		$this->assertContains('PalavraChave', $this->Mensagem->create());
	
	}

}

