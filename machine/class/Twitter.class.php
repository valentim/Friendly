<?php

/** 
 * @author Thiago Valentim
 * 
 * 
 */
require_once 'Services/Twitter.php';
require_once 'HTTP/OAuth/Consumer.php';

class Twitter {
	private $msg;
	private $twitter;
	static public $instance = null;
	
	private function __construct() {
	 try {
		     $this->twitter = new Services_Twitter();
		     $oauth   = new HTTP_OAuth_Consumer('lhp2SeX6MaQLYm9u64paA',
		                                        'rK0wQ4wk7BDwNy5w2LJ7eryYKJGkJesByepGdaaEU',
		                                        '326864881-4dmiWzBaopLhxw925UyhnQnw9SDoDxrSCixjTkk',
		                                        'tMsnadshlKfsHqEa5aTgsGdhl0WMpscGYVAWrowqgfg');
		
		     $this->twitter->setOAuth($oauth);
		 } catch (Services_Twitter_Exception $e) {
		     echo $e->getMessage();
		 }
	}
	
	static public function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new Twitter();
		}
		return self::$instance;
	}
	
	public function makeMsg($msg) {
		$this->msg = $msg;
		$msg = $this->twitter->statuses->update($msg);
	}
	
	public function getMsg() {
		return $this->msg;
	}
}

?>