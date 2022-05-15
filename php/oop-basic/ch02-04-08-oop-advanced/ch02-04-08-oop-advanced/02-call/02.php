<?php
class Student {
	
	private $name;
	
	public function __construct(){
		$this->name	= 'John Smith';
	}
	
	public function __call($name, $params){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
		echo '<pre style="color:red;font-weight:bold">';
		print_r($name);
		echo '</pre>';

		echo '<pre style="color:red;font-weight:bold">';
		print_r($params);
		echo '</pre>';
	}
	
	public  static function __callstatic($name, $params){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
		echo '<pre style="color:red;font-weight:bold">';
		print_r($name);
		echo '</pre>';
		echo '<pre style="color:red;font-weight:bold">';
		print_r($params);
		echo '</pre>';
	}
	
	
}


Student::showInfo('Peter', '23/02/1989', array(2,3,4));