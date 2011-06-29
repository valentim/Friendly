<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Sintaxe {
	private $sintaxe;
	private $comp;
	
	public function __construct($n) {
		$this->sintaxe = $n;
		
		switch($this->sintaxe) {
			case 1:
				$this->firstSentence();
				break;
			default:
				$this->secondSentence();
				break;
		}
	}
	public function getSintaxe() {
		return $this->sintaxe;
	}
	
	private function firstSentence() {
		$this->comp = array('Conectivos', 'PalavraChave', 'Verbo', 'Expressao');
	}
	
	private function secondSentence() {
		$this->comp = array('PalavraChave', 'Expressao');
	}
	
	public function getSentence() {
		return $this->comp;
	}
}