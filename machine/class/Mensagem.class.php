<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
require_once 'Twitter.class.php';
require_once 'Palavra.class.php';
class Mensagem {
	private $frase = null;
	private $word;
	private $twitter;
	private $keyword;

	public function __construct(Sintaxe $f) {
		$this->frase = $f;
		$this->twitter = Twitter::getInstance();
		$this->keyword = Palavra::getInstance();
	}
	
	public function getFrase() {
		return "{$this->frase->getSentence()} #{$this->keyword->getWord()}";
	}
	
	public function getWord() {
		return $this->keyword->getWord();
	}
	
	public function create() {
		$this->twitter->makeMsg($this->getFrase());
	}
	
	public function getMsg() {
		return $this->twitter->getMsg();
	}
}
