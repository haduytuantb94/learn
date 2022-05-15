<?php 

// Parent Đại điện của lớp cha, thường được sử dụng để gọi đến biến số có khoá static hay hàm nào đó trong lớp cha

class Person{

	public $code;
	public $name;
	public $birthday;
	static public $salary	= 1000;

	public function __construct($codeValue = '123456', $nameValue = 'Peter Brown', $birthdayValue = '12/05/1989'){
		$this->code		= $codeValue;
		$this->name		= $nameValue;
		$this->birthday	= $birthdayValue;
	}
		
	public function showInfo(){
		echo '<br />- Code: ' . $this->code;
		echo '<br />- Name: ' . $this->name;
		echo '<br />- Birthday: ' . $this->birthday;
	}
}

// CLASS STUDENT
class Student extends Person{
	public $year	= 3;
	
	public function showInfo(){
		parent::showInfo();
		echo '<br />- Year: ' . $this->year;
		echo '<br />- Salary: ' . parent::$salary;

	}
}

$student = new Student();
$student->showInfo();

?>