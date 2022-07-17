<?php
  $x = 'y';
  $$x = 'z';
  echo $x. "</br>";
  echo $y. "</br>";
  echo $$x;
  
  
  function showHello() {
     echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
  }
  
 $function = 'showHello';
 //goi function :
 
 $function();
 
 class Student {
     public function showInfo() {
         echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
     }
 }
 
 $class = 'Student';
 
//  $student = new Student();
 
 $student = new $class();
 
 echo "<pre>";
 print_r($student->showInfo());
 echo "</pre>";
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 