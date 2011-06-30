<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Mensagem {
	private $frase = null;
	private $twitter;

	public function __construct(Sintaxe $f) {
		$this->frase = $f;
		$this->twitter = Twitter::getInstance();
	}
	
	public function getFrase() {
		return $this->frase->getSentence();
	}
	
	public function create() {
		$this->twitter->makeMsg($this->frase->getSentence());
	}
	
	public function getMsg() {
		return $this->twitter->getMsg();
	}
}
