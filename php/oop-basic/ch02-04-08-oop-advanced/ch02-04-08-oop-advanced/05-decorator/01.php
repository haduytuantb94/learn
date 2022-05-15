<?php
	// Developer	Web, Email, File
	// Publish		File
	
	class Developer {
		
		public function logFile($msg){
			echo "<h3>Error on FILE: {$msg}</h3>";
		}
		
		public function logEmail($msg){
			echo "<h3>Error on EMAIL: {$msg}</h3>";
		}
		
		public function logWeb($msg){
			echo "<h3>Error on WEB: {$msg}</h3>";
		}
	}
	
	class Publish {
	
		public function logFile($msg){
			echo "<h3>Error on FILE: {$msg}</h3>";
		}

	}
	
	$developer = new Developer();
	$developer->logFile("saving");
	$developer->logEmail("saving");
	$developer->logWeb("saving");
	
	// Publish		: File + Email
	// Developer	: File + Email + Web + Database
	
	
	
	
	
	
	
	
	
	
	
	