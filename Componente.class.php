<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
abstract class Componente {
	protected $name;
	public function __construct() {
		$this->name = __CLASS__;
	}
}

?>