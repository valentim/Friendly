<?php
require_once ('Mensagem.class.php');
require_once ('Sintaxe.class.php');
require_once ('Verbo.class.php');
require_once ('Conectivos.class.php');
require_once ('Expressao.class.php');
require_once ('Adjetivo.class.php');
require_once ('Twitter.class.php');
/** 
 * @author Thiago Valentim
 * 
 * 
 */
class PalavraChave extends Decorator {
	public $request = false;
	private $twitter;
	
	public function setWord($w) {
		$this->word = $w;
	}
	
	public function make() {
		return "{$this->word} {$this->cmp->make()}";
	}
	
	private function open() {
		
	}
	
	private function verifyContext() {
		$this->request ;//= $this->open($this->keyWord);
		
		if($this->request) {
			$sentence = new Mensagem(new Sintaxe(1));
			$sentence->create();
		}		
	}
}
