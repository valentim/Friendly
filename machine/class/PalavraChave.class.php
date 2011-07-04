<?php
require_once ('Decorator.class.php');

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class PalavraChave extends Decorator {

	public function setWord() {}
	
	public function make() {
		return "{$this->getKeyWord()} {$this->cmp->make()}";
	}
}
