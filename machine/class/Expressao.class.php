<?php

require_once ('Decorator.class.php');

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Expressao extends Componente {
	public function __construct($w = null) {
		$this->word = $w;
	}
	
	public function getWord() {
		return $this->word;
	}
	
	public function make() {
		return "{$this->word}";
	}
}

?>