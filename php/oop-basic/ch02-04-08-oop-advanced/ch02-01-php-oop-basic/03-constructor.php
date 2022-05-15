<?php
	// __contruct() phương thức được gọi tự động và được gọi đầu tiên khi một object được khởi tạo -> dùng khởi tạo các giá trị ban đầu
	// __destruct() phương thức được gọi tự động và được thực thi ở cuối trang
	
	require_once 'class/Student.class.php';
	
	$arrInfo 	= array('name' => 'Peter Brown', 'code' => '54321', 'birthday' => '23/02/2000');
	$studentA	= new Student($arrInfo);
	
	
	echo '<pre style="color:red;font-weight:bold">';
	print_r($studentA);
	echo '</pre>';
	
	$studentA->methodNormal();
?>
<h3>Hello</h3>