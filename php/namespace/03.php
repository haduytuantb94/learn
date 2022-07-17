<?php
require_once 'Magento/lib/student.php';
require_once 'Zend/Obj/student.php';

use Magento\lib as MA;
use Zend\Obj as ZA;

$student = new MA\Student();
$student_2 = new ZA\Student();

echo "<pre>";
print_r($student);
echo "</pre>";

echo "<pre>";
print_r($student_2);
echo "</pre>";