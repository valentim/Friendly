<?php
require_once ('Componente.class.php');
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
	
	public function getWord() {
		return $this->word;
	}	
}

?>