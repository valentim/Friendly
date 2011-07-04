<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
class Banco {
	private $dsn = 'mysql:dbname=linguagem;host=localhost';
	private $user = 'root';
	private $password = '123456';
	private $con;
	private static $instance = null;
	
	private function __construct() {
		try {
			$this->con = new PDO($this->dsn, $this->user, $this->password);
		} catch (PDOException $e) {
			error_log($e->getMessage());
		}
	}
	
	public static function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new Banco();
		}
		return self::$instance;
	}
	public function connect() {
		return $this->con;
	}
}
