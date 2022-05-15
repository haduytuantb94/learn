<?php

class Student{
	
	public $code;
	public $name;
	public $birthday;
	
	public function setCode($codeValue){
		$this->code		= $codeValue;
	}
	
	public function setName($nameValue){
		$this->name		= $nameValue;
	}
	
	public function showInfo(){
		echo '<br />Code: ' . $this->code;	
		echo '<br />Name: ' . $this->name;	
		echo '<br />Birthday: ' . $this->birthday;	
	}
	
	// Case 01
// 	public function __construct(){
// 		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
// 		$this->code			= '123456';
// 		$this->name			= 'John Smith';
// 		$this->birthday		= '23/04/2989';
// 	}
	
	// Case 02
// 	public function __construct($codeValue, $nameValue, $birthdayValue){
// 		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
// 		$this->code			= $codeValue;
// 		$this->name			= $nameValue;
// 		$this->birthday		= $birthdayValue;
// 	}

	// Case 03
// 	public function __construct($arrInfo = array('name' => 'John Smith', 'code' => '12345', 'birthday' => '23/02/1989')){
// 		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
// 		$this->code			= $arrInfo['code'];
// 		$this->name			= $arrInfo['name'];
// 		$this->birthday		= $arrInfo['birthday'];
// 	}
	
	// Case 04
	public function __construct($arrInfo = array('name' => 'John Smith', 'code' => '12345', 'birthday' => '23/02/1989')){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
		$this->code			= $arrInfo['code'];
		$this->name			= $arrInfo['name'];
		$this->birthday		= $arrInfo['birthday'];
	}
	
	public function __destruct(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	}
	
	public function methodNormal(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	}
}

