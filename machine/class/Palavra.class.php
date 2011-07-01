<?php

/** 
 * @author thiago.valentim
 * 
 * 
 */
require_once ('Mensagem.class.php');
require_once ('Sintaxe.class.php');
require_once ('Verbo.class.php');
require_once ('Conectivos.class.php');
require_once ('Expressao.class.php');
require_once ('Adjetivo.class.php');
require_once ('Twitter.class.php');
class Palavra {
	
	private $word;
	
	function __construct($w) {
		$this->word = $w;
	}
	
	public function getWord() {
		return $this->word;
	}
	
	public function doWrite() {
		$sentence = new Mensagem(new Sintaxe(1), $this->getWord());
	}
}

?>