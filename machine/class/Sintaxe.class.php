<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Sintaxe {
	private $comp = array();
	
	public function __construct(Componente $comp) {
		array_push($this->comp, $comp->name);
	}
	
	public function getSentence() {
		return $this->comp;
	}
}

?>