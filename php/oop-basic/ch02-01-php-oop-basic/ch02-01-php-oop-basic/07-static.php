<?php

// Static Truy cập nhanh phương thức và biến mà không cần khởi tạo đối tượng

class Student{

	static public $code		= '123456';
	static private  $name		= 'Peter Brown';
	static protected $birthday	= '12/05/1989';

	static public function showInfo(){
		echo '<br />Public: ' . Student::$code;
 		echo '<br />Private: ' . Student::$name;
 		echo '<br />Protected: ' . Student::$birthday;
	}
}

// $student	= new Student();
// echo '<br />Code: ' . $student->code;

//echo '<br />Code: ' . Student::$code;
Student::showInfo();
