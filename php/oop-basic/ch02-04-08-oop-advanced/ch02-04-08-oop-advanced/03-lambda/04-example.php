<?php
	$input	= array(1,2,3,4,5,6,7);
	
	/* Case 01
	$output = array();
	foreach($input as $value){
		if($value > 5) {
			$output[]	= $value;
		}
	}
	*/
	
	/* Case 02
	function compare($value){
		return ($value > 5);
	}
	$output	= array_filter($input, compare );
	*/
	
	/* Case 03
	
	$compare	= function($value) {
					return ($value > 5);
				};
	
	*/
	
	/* Case 04
	$output	= array_filter($input, function($value) {return ($value > 5);} );
	*/
	
	$compare	= function($max) {
						return function ($value) use ($max) {
							return $value > $max;
						};
					};
	$output	= array_filter($input, $compare(5) );
	
	echo '<pre style="color:red;font-weight:bold">';
	print_r($output);
	echo '</pre>';
	
	
	
	
	
	
	
	
	
	
	
	