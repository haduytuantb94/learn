<?php

// Property	(đặc điểm, đặc tính)		miêu tả thuộc tính, đặc điểm của một Class
// Method 	(phương thức, hành động)	miêu tả các hành động của một Class

require_once 'class/Student.class.php';

$studentA	= new Student();

echo '<pre style="color:red;font-weight:bold">';
print_r($studentA);
echo '</pre>';

$studentB	= new Student();
$studentB->setCode('654321');
$studentB->setName('Peter Brown');

echo '<pre style="color:red;font-weight:bold">';
print_r($studentB);
echo '</pre>';