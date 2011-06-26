<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Mensagem {
	private $frase = null;
	

	public function __construct(Sintaxe $f) {
	
		$this->frase = $f;
	}
	
	public function create() {
		$this->frase = implode(" ", $this->frase);
		return $this->frase;
	}
}

?>