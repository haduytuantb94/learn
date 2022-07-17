<?php
//Hien thi ten tap tin (bao gom ca extension)
$file = "/files/abc.txt";
echo basename($file)."<br />";
// Hien thi ten tap tin khong co extension
echo basename($file, '.txt');
?>

