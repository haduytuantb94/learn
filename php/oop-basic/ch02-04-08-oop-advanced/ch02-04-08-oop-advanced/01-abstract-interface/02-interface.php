<?php

interface People {
	public  function eat();
	public function sleep();
}

interface Bird{
	public function fly();	
}

class Lion{
	public function run(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	}
}

class Superman extends Lion implements People, Bird{
	public function eat(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	}
	
	public function sleep(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	}
	public function fly() {
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	}
}

$superman	= new Superman();
$superman->run();