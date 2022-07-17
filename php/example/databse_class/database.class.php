<?php
// if(!defined('USE_THEM_NOW')) {
//   echo "Sorry,You can not access this file";
//   exit();
// }
class Database {
   public $conn;
   //public $query;
   public $result;
   public $error;
   public $charset = 'utf-8';

   public function __construct($data_array) {
     $this->conn = mysqli_connect($data_array['localhost'], $data_array['username'], $data_array['pass'], $data_array['databse']);
     if(!$this->conn) {
        $this->error = "Failed to connect to database". mysqli_connect_error();
        echo $this->error;
        exit();
     }     
   }
  // public function db_query($query) {
  //     $this->query = $query;
  // }
  public function result_query($query) {
      //mysqli_set_charset($this->conn, $this->charset);
      mysqli_query($this->conn,"set names 'utf8'");
      $this->result = mysqli_query($this->conn, $query);
      if(!$this->result) {
        $this->error = "Failed to query to database";
        echo $this->error;
        exit();
      }
  }
  public function __destruct()
  {
    mysqli_close($this->conn);  
  }
  
}
















?>
