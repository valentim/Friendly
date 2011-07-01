<?php

require_once ('Decorator.class.php');

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Verbo extends Decorator {

	public function make() {
		return "{$this->word} {$this->cmp->make()}";
	}
}

?>