<?php
require_once 'header.php';
if(!isset($_SESSION['token'])) {
    header('location: header.php');
    exit();
}
?>
<p>Hello EveryOne</p>
<a href="logout.php">Logout</a>