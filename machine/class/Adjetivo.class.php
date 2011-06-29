<?php

require_once ('Decorator.class.php');

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Adjetivo extends Decorator {
	public function getWord() {
		return $this->word;
	}
	
	public function getCmp() {
		return $this->cmp;
	}
}

?>