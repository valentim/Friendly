<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
abstract class Componente {
	protected $name;
	protected $word;
	public function getName() {
		$this->name = __CLASS__;
	}
	abstract function getWord();
}

?>