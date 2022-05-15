<?php
class Database {
	
	private static $instance;
	
	public static function getInstance(){
		if(!isset(self::$instance)) self::$instance	= new Database();
		return self::$instance;
	}
	
	private function __construct(){
		// Block
	}
	
	private function __clone(){
		// Block
	}
	
}

$db1	= Database::getInstance();

echo '<pre style="color:red;font-weight:bold">';
var_dump($db2);
echo '</pre>';
