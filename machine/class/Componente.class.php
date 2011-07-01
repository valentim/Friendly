<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
abstract class Componente {
	protected $name;
	public function getName() {
		return $this->name = get_class($this);
	}
	abstract function make();
}

?>