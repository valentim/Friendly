<?php

require_once ('Decorator.class.php');

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Verbo extends Decorator {
	public function setWord($w) {
		$this->word = $w;
	}
}

?>