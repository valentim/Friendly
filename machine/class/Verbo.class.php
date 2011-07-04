<?php


/** 
 * @author Thiago Valentim
 * 
 * 
 */
require_once ('Decorator.class.php');
class Verbo extends Decorator {

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