<?php
session_start();
$time = time();
if(isset($_SESSION['timeout'])) {
    $timeout = $_SESSION['timeout'];
    if($timeout + 300 < $time) {
        session_destroy();
        header('location: login.php');
    }
}
