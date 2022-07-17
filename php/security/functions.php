<?php
require_once 'header.php';

function isLogged() {
    if(isset($_SESSION['token'])) {
        header('location: dashboard.php');
        exit();
    }
}