<?php

	function loadFolderClass($className){
		$fileName	= "class/$className.class.php";
		if(file_exists($fileName) == true) require_once $fileName;
	}
	
	function loadFolderMyClass($className){
		$fileName	= "myclass/$className.class.php";
		if(file_exists($fileName) == true) require_once $fileName;
	}
	
	spl_autoload_register(loadFolderClass);
	spl_autoload_register(loadFolderMyClass);
	
	$student	= new Student();
	$animal		= new Animal();
	
	
