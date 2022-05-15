<?php

// FINAL
//		+ Method Lớp con không thể override các phương thức ở lớp cha nếu các phương thức ở lớp cha có từ khoá FINAL
//		+ Class khi chúng ta dùng từ khoá FINAL thì chúng ta không thể extends class đó

// CLASS PERSON
class Person{

	public $code;
	public $name;
	public $birthday;

	public function __construct($codeValue = '123456', $nameValue = 'Peter Brown', $birthdayValue = '12/05/1989'){
		$this->code		= $codeValue;
		$this->name		= $nameValue;
		$this->birthday	= $birthdayValue;
	}
		
	final public function showInfo(){
		echo '<br />- Code: ' . $this->code;
		echo '<br />- Name: ' . $this->name;
		echo '<br />- Birthday: ' . $this->birthday;
	}
}

// CLASS STUDENT
class Student extends Person{
	public $year	= 3;
	
	public function showInfo(){
		echo '<br />- Code: ' . $this->code;
		echo '<br />- Name: ' . $this->name;
		echo '<br />- Birthday: ' . $this->birthday;
		echo '<br />- Year: ' . $this->year;
	}
}

$student = new Student();
$student->showInfo();




