<?php
require_once ('Componente.class.php');
//require_once ('Palavra.class.php');
require_once ('request/Request.class.php');
/** 
 * @author Thiago Valentim
 * 
 * 
 */
abstract class Decorator extends Componente {
	protected $cmp;
	protected $word;
	
	public function __construct($w = null, Componente $cmp = null) {
		$this->word = $w;
		$this->cmp = $cmp;
	}	
	abstract function setWord();

	public function getKeyWord() {
		//$key = Palavra::getInstance();
		return 'Amor'; //$key->getWord();
	}
	
	public function makeRequest() {
		$request = new Request($this->getName(), $this->getKeyWord());
		$request->consult();
		return $request->getJson();
	}
}

?>