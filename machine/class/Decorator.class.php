<?php
require_once ('Componente.class.php');
/** 
 * @author Thiago Valentim
 * 
 * 
 */
abstract class Decorator extends Componente {
	protected $cmp;

	public function __construct($w, Componente $cmp = null) {
		$this->cmp = $cmp;
		$this->word = $w;
	}
}

?>