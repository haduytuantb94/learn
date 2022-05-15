<?php
// 	function showHello(){
// 		echo '<h3 style="color:red;font-weight:bold">Hello</h3>';
// 	}
	
// 	showHello();
	
	$name	= 'Peter';
	$hello	= function(){
					echo '<h3 style="color:red;font-weight:bold">Hello '.$name.'</h3>';
				};
				
	$hello();