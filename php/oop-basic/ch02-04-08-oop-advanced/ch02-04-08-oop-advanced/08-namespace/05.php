<?php

namespace ABC\DEF {
	function show($name){
		echo "<h3>Hello {$name}!</h3>";
	}
	
	echo __NAMESPACE__;
	
	show('Peter');
}

namespace Zend\Lib {
	function show($name){
		echo "<h3>Hello {$name}!</h3>";
	}
	
	echo __NAMESPACE__;
	
	show('Peter');
}

