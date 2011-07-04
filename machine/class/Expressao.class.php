<?php

require_once ('Decorator.class.php');

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Expressao extends Decorator {

	public function setWord() {
		if(empty($this->word)) {
			$this->word = $this->makeRequest();
		}
	}
	
	public function make() {
		$this->setWord();
		return "{$this->word}";
	}
}

?>