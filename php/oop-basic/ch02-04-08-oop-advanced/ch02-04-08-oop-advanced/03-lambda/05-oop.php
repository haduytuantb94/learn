<?php
	
class Student {
	
	private $name;
	private $birthday;
	
	public function __construct(){
		$this->name		= 'John Smith';
		$this->birthday	= '23/03/1989';
	}
	
	public function showInfo($greeting){
		$result	= function () use ($greeting) {
			echo "{$greeting}, My name is {$this->name}, my birthday is on {$this->birthday}";
		};
		return $result();
	}
	
	public function showHello($greeting){
		$result	= static function () use ($greeting) {
			echo "{$greeting}";
		};
		return $result();
	}
	
	public function __invoke(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	}
}	

$student = new Student();
$student->showInfo('hello');
$student->showHello('hello');

$student();
	
	
	
	
	
	