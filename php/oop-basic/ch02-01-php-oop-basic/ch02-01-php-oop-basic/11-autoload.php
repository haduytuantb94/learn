<?php

	function __autoload($className){
		
		$fileName	= "class/$className.class.php";
		if(file_exists($fileName) == true) require_once $fileName;
	}
	
	$student	= new Student();
	
	echo '<pre style="color:red;font-weight:bold">';
	print_r($student);
	echo '</pre>';
