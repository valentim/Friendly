<?php
require_once ('Mensagem.class.php');
require_once ('Sintaxe.class.php');
require_once ('Verbo.class.php');
require_once ('Conectivos.class.php');
require_once ('Expressao.class.php');
/** 
 * @author Thiago Valentim
 * 
 * 
 */
class PalavraChave {
	private $keyWord = null;
	public $request = false;
	
	public function __construct($keyWord) {
		$this->keyWord = $keyWord;
	}
	
	private function verifyContext() {
		$this->request = $this->open($this->keyWord);
		
		if($this->request) {
			$addComp = new Sintaxe(new Conectivos());
			$addComp = new Sintaxe(new Verbo());
			$addComp = new Sintaxe(new Expressao());
			$sentence = new Mensagem($addComp);
			$sentence->create();
		}
		
	}
}

?>