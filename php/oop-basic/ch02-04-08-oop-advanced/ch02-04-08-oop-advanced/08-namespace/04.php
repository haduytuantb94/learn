<?php

require_once 'Magento/Lib/Student.php';
require_once 'Zend/Obj/Student.php';

use Zend\Obj as Zend;
use Magento\Lib as Magento;



$studentZend	= new Zend\Student;
$studentMagento	= new Magento\Student;


echo '<pre style="color:red;font-weight:bold">';
print_r($studentZend);
echo '</pre>';

echo '<pre style="color:red;font-weight:bold">';
print_r($studentMagento);
echo '</pre>';
