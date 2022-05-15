<?php
	$name		= 'John Smith';
	$birthday	= '23/02/2000';
	
	// Case 01
// 	$showHello	= function () use ($name, $birthday){
// 					echo 'My name is '.$name.', my birthday is on ' . $birthday;
// 				};

	// Case 02
	$showHello	= function () use (&$name){
						$name = strtoupper($name);
						echo 'My name is '.$name;
					};
	
	$showHello();
	echo '<br />' . $name;