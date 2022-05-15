<?php
	require_once 'Zend/Obj/Student.php';
	require_once 'Magento/Lib/Student.php';
	
	$student	= new Magento_Lib_Student();
	echo '<pre style="color:red;font-weight:bold">';
	print_r($student);
	echo '</pre>';