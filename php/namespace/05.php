<?php
require_once 'Magento/lib/student.php';
use Magento\lib\Student;

$student = new Student();
echo "<pre>";
print_r($student);
echo "</pre>";

Magento\lib\sayHello('Tuan');