<?php 

// const	Định nghĩa các biến có giá trị không thay đổi bằng từ khoá const
// 			Truy cập vào lấy giá trị chúng ta sử dụng toán tử ::  

class Person{
	
	public $sex = 'Male';
	const sex	= 'Male';
	
	public function  showInfo(){
		echo '<br />' . $this::sex;
		echo '<br />' . Person::sex;
		echo '<br />' . self::sex;
	}
}

$person = new Person();
$person->showInfo();
