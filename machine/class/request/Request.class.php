<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
require_once '../pdo/Banco.class.php';

class Request {
	private $db;
	private $who;
	private $word;
	private $genero;
	private $numero;
	private $param;
	private $escape;
	private $json;
	
	public function __construct($who, $w) {
		$this->db = Banco::getInstance()->connect();
		$this->who = $who;
		$this->word = $w;
	}
	
	public function consult() {
		$this->getGenero();
		$this->getNumero();
		$this->factorySql();
		$sql = $this->db->prepare('SELECT '.$this->who.'.name FROM '.$this->who.' INNER JOIN PalavraChave on '.$this->who.'.idPalavraChave = PalavraChave.id WHERE '.$this->param.'', 
											array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
											
		$sql->execute($this->escape);
		$this->json = $sql->fetchAll();
	}
	
	public function getJson() {
		return $this->json[0]['name'];
	}
	
	private function factorySql() {
		switch($this->who) {
			case 'Verbo':
				$this->param = 'PalavraChave.name = :word';
				$this->escape = array(':word' => $this->word);
				break;
			case 'Adjetivo':
			case 'Conectivos':
			case 'Expressao':
				$this->param = 'PalavraChave.name = :word and PalavraChave.genero = :genero and PalavraChave.numero = :numero';
				$this->escape = array(':word' => $this->word, ':genero' => 1, ':numero' => 0);
				break;
		}
	}	
	
	private function getGenero() {
		$this->genero = $this->verify($this->word, 'o', true);
	}
	
	private function getNumero() {
		$this->numero = $this->verify($this->word, 's');
	}
	
	private function verify($w, $l, $g = null) {
		if(isset($g)) {
			$lenght = strlen($w);
			for($i = 1; $i <= $lenght; $i++) {
				$last = substr($w, ($lenght - $i), 1);
				if(preg_match('/[aeiou]$/', $last)) {
					if($last != $l) {
						return 0;
					}
					return 1;
					break;
				}
			}
		} else {
			$last = substr($w, -1);
			if($last != $l) {
				return 0;
			}
			return 1;
		}
	}
}
