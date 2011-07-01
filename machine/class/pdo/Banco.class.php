<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Banco {
	private $dsn;
	private $user;
	private $password;
	static private $instance = null;
	
	private function __construct() {
		try {
			new PDO($this->dsn, $this->user, $this->password);
		} catch (PDOException $e) {
			error_log($e->getMessage());
		}
	}
	
	static public function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new Banco();
		}
		return self::$instance;
	}
}
