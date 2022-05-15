<?php

class Student{
	
	private  $code		= '123456';
	public $name		= 'John SMith';
	protected  $birthday	= '23/02/1989';
	
	public function showInfo(){
		echo '<br />Code: ' . $this->code;	
		echo '<br />Name: ' . $this->name;	
		echo '<br />Birthday: ' . $this->birthday;	
	}
}

class Teacher extends Student{
	public function showInfo(){
		echo '<br />Birthday: ' . $this->birthday;
	}
}

/*				In Class	Out Class	In Children Class
* Public		+			+			+
* Private		+			-			-
* Protected		+			-			+
*/

$student = new Student();
$teacher = new Teacher();
//echo '<br />Code: ' . $student->code;
echo $teacher->showInfo();	
