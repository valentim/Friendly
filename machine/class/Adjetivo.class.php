<?php

require_once ('Decorator.class.php');

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Adjetivo extends Decorator {
	public function setWord($w) {
		$this->word = $w;
	}
}

?>