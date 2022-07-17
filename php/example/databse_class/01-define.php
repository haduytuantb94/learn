<?php
//  if(!defined('USE_THEM_NOW')) {
//   echo "Sorry,You can not access this file";
//   exit();
// }
  define('DB_NAME','localhost');
  define('DB_USER','root');
  define('DB_PASS','');
  define('DB_HOST','learn');
  
  $data_array = array(
    'localhost' => DB_NAME,
    'username' => DB_USER,
    'pass' => DB_PASS,
    'databse' => DB_HOST
  );
include_once('database.class.php');
/***Global connection variable : @$conn***/
$conn = new Database($data_array);

?>
