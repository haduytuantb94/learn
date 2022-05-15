<?php

	// Class (Lớp) miêu tả cái gì đó chung chung, Object (đối tượng) miêu tả cái gì đó cụ thể

	require_once 'class/Student.class.php';
	
	$student	= new Student();
	
	echo '<pre style="color:red;font-weight:bold">';
	print_r($student);
	echo '</pre>';