<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Mensagem {
	private $frase = null;
	private $word;
	private $twitter;

	public function __construct(Sintaxe $f, $w) {
		$this->frase = $f;
		$this->word = '#'.$w;
		$this->twitter = Twitter::getInstance();
		$this->create();
	}
	
	public function getFrase() {
		return "{$this->frase->getSentence()} {$this->getWord()}";
	}
	
	public function getWord() {
		return $this->word;
	}
	
	private function create() {
		$this->twitter->makeMsg($this->getFrase());
	}
	
	public function getMsg() {
		return $this->twitter->getMsg();
	}
}
