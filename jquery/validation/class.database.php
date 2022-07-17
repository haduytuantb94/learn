<?php
class Database {
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = '';
    private $db_name = 'security';
    public $link;
    public $result; 
    public $error;
    public function __construct() {
        $connect = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if(!$connect) {
            die("connection failed" . mysqli_connect_errno());
        } else {
            $this->link = $connect;
        }
    }
//     $params['username']
//     $params['password'] 
    public function setLoggin($userName, $passWord) {
        $query = "SELECT `username`,`password`
        FROM `manager_user` 
        WHERE `username` = '$userName' AND `password` = '$passWord'";
        $query = mysqli_real_escape_string($this->link, $query);
        echo $query;
        $this->db_query($query);
        if($this->result == true) {
            if(mysqli_num_rows($this->result) > 0) {
               Session::init();
               $_SESSION['token'] = true;
               $_SESSION['timeout'] = time();
               header('location: dashboard.php');
               return true;
           }else {
               $this->error = "Your username or password not exists";
               return false;
           }
        } else {
            $this->error = "Query Failed";
        }
    }
    public function db_query($query) {
        $this->result = mysqli_query($this->link, $query);
    }
    public function __destruct() {
        mysqli_close($this->link);
    }
}

class Session {
    public static function init() {
        session_start();
    }
    public static function delete() {
        session_destroy();
    }
}
