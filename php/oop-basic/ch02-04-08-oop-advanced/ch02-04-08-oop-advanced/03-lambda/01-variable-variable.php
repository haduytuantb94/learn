<?php
	$x	= 'abc';
	$$x	= 'z';		// $abc	 = 'z'
	
	echo $x . '<br />';
	echo $$x . '<br />';
	echo $abc . '<br />';
	
	function showHello(){
		echo '<h3 style="color:red;font-weight:bold">hello!</h3>';
	}
	
	$function	= 'showHello';
	$function();
	
	class Student {
		
		public function showInfo(){
			echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
		}
	}
	
	$class	= 'Student';
	$method	= 'showInfo';
	
	$student	= new $class();
	$student->$method();
	
	
	echo '<pre style="color:red;font-weight:bold">';
	print_r($student);
	echo '</pre>';