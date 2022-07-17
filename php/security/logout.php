<?php
require_once 'header.php';
if(isset($_SESSION['token'])) {
    session_destroy();
    header('location: login.php');
}