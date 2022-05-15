<?php 

// 	Self Đại điện lớp hiện tại, thường được dùng gọi đến biến số có khoá static hay hàm nào đó trong lớp hiện tại
//	Chỉ được dùng để truy cập các thuộc tính có khoá static

class Student{
	static public $code		= '123456';
	public $name			= 'John Smith';
	
	public function showInfo(){
		echo '<br />Code: ' . self::$code;
		echo '<br />Code: ' . Student::$code;
		//echo '<br />Name: ' . self::$name;
		//echo '<br />Name: ' . Student::$name;
		echo '<br />Name: ' . $this->name;
	}
	
}

$student = new Student();
$student->showInfo();

?>