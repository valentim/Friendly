<?php

require_once ('Decorator.class.php');

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Conectivos extends Decorator {
	
	public function setWord() {
		if(empty($this->word)) {
			$this->word = $this->makeRequest();
		}
	}
	
	public function make() {
		$this->setWord();
		return "{$this->word} {$this->cmp->make()}";
	}
}

?>