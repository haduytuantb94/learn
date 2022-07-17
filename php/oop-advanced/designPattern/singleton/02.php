<?php
class Database {
    private static $instance;
    
    private function __construct() {
        //block
    }
    private function __clone() {
        //block 
    }
    public static function getInstance() {
        if(!isset(self::$instance)){
            self::$instance = new Database();
            return Database::$instance;
        }
    }
    
}
$db1 = Database::getInstance();
$db2 = clone $db1;

echo "<pre>";
var_dump($db2);
echo "</pre>";
