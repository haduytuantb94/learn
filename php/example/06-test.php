<?php
session_start();

// require_once ('06-destruct.php');
// $userA = new User();

$un_userA = $_SESSION['userA'];
$newtime = time();

if(($newtime-$_SESSION['time']) > 40) {
    echo "SESSION da het han";
    header('location: https://vnexpress.net/');
}

// echo '<pre>';
// print_r($un_userA);
// echo '</pre>';
?>