<?php
//   function showHello() {
//       echo '<h3 style="color:red;font-weight:bold;">Hello</h3>';
//   }
//   showHello();

//   $name = 'Peter Cround';
//   $hello = function() {
//       echo '<h3 style="color:red;font-weight:bold;">Hello '.$name .' </h3>';
//   };
  
//   $hello();

// Case 1 :
/*   $name = 'John Smith';
  $birthday = '20/01/1994';
  
  $showHello = function() use($name, $birthday) {
      echo 'My Name is '.$name.', My Birthday is on '.$birthday.'';
  }; */
  //case 2 : 
  $name = 'John Smith';
  $birthday = '20/01/1994';
  
  $showHello = function() use($name, $birthday) {
      $name = strtoupper($name);
      echo 'My Name is '.$name.', My Birthday is on '.$birthday.'';
  };
  
  $showHello();
  