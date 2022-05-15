<?php

// Student Teacher Worker => Person

abstract class Person {
	
	private $name;
	private $birthday;
	
	abstract public function showInfo(array $param);
	
	public function showName(){
		
	}
}

class Student extends Person {
	
	public function showInfo(array $param){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	}
}


$student = new Student();


$student->showInfo(array('abc'));

echo '<pre style="color:red;font-weight:bold">';
print_r($student);
echo '</pre>';