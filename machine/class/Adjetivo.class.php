<?php

require_once ('Decorator.class.php');

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Adjetivo extends Decorator {
	
	public function make() {
		return "{$this->word} {$this->cmp->make()}";
	}
}

?>