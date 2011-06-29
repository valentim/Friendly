<?php  
require_once('remote.php');  
require_once 'PHPUnit/Autoload.php';
class remoteTest extends PHPUnit_Framework_TestCase  
{  
  public function setUp(){ }  
  public function tearDown(){ }  
  public function testConnectionIsValid()  
  {  
    // test to ensure that the object from an fsockopen is valid  
    $connObj = new remote();  
    $serverName = 'www.google.com';  
    $this->assertTrue($connObj->connectToServer($serverName) !== false);  
  }  
}  