<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
require_once '../pdo/Banco.class.php';

class Rest {
	private $db;
	private $who;
	private $json;
	
	public function __construct($who) {
		$this->db = Banco::getInstance();
		$this->who = $who;
	}
	
	private function consult() {
		$sql = $this->db->prepare('SELECT * FROM' .$this->who. 'WHERE calories < :calories AND colour = :colour', 
											array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
											
		$sql->execute(array(':calories' => 150, ':colour' => 'red'));
		$this->json = $sql->fetchAll();
	}
	
	public function getJson() {
		return $this->json;
	}
}
