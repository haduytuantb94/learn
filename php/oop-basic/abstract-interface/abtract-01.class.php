<?php

abstract class Person {
    private $name;
    private $birthday;
    
   abstract protected function showInfo(array $params);
   public function eat() {
       echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
   }
}

class Student extends Person {
    public function  showInfo(array $params) {
        echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
    }
}

$student = new Student();
$params = array(1,2,3,4,5,6);
// $params = '12345';
$student->showInfo($params);
















