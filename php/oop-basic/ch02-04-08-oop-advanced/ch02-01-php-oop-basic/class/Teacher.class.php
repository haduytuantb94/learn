<?php

require_once 'Student.class.php';

class Teacher extends Student{
	
	public $salary	= 1000;
	
	public function showInfo(){
		$this->code	= 'ABCDEF';
		echo '<br />Code: ' . $this->code;
		echo '<br />Name: ' . $this->name;
		echo '<br />Birthday: ' . $this->birthday;
		echo '<br />Salary: ' . $this->salary;
	}
}