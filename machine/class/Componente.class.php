<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
abstract class Componente {
	protected $name;
	public function getName() {
		$this->name = __CLASS__;
	}
	abstract function make();
}

?>