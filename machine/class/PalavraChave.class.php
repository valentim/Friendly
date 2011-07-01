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

	public function make() {
		return "{$this->word} {$this->cmp->make()}";
	}
	
	public function doWrite() {
		$sentence = new Mensagem(new Sintaxe(1), $this->getWord());
	}
}
