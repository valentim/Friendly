<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
require_once ('../Decorator.class.php');
require_once ('../Verbo.class.php');
require_once ('../Conectivos.class.php');
require_once ('../Expressao.class.php');
require_once ('../Adjetivo.class.php');
require_once ('../PalavraChave.class.php');

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
		$this->comp = new Conectivos(null, new PalavraChave(null, new Verbo(null, new Expressao())));
	}
	
	private function secondSentence() {
		$this->comp = new PalavraChave(new Expressao());
	}
	
	public function getSentence() {
		return $this->comp->make();
	}
}