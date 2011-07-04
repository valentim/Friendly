<?php

/** 
 * @author thiago.valentim
 * 
 * 
 */
require_once ('Mensagem.class.php');
require_once ('Sintaxe.class.php');
class Palavra {
	
	private $word;
	private static $instance;
	
	private function __construct() {}
	
	public static function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new Palavra();
		}
		return self::$instance;
	}
	
	public function setWord($w) {
		$this->word = $w;
	}
	
	public function getWord() {
		return $this->word;
	}
	
	public function doWrite() {
		$sentence = new Mensagem(new Sintaxe(1));
		$sentence->create();
	}
}

?>