<?php
  //Developer   Web,Email,File
  //publish    file
  class Developer {
      public function logFile($msg) {
         echo "<h3>Error on File : {$msg} </h3>"; 
      }
      public function logEmail($msg) {
         echo "<h3>Error on Email : {$msg} </h3>";
      }
      public function logWeb($msg) {
          echo "<h3>Error on Web : {$msg} </h3>";
      }
  }
  
  class Publish {
      public function logFile($msg) {
          echo "<h3>Error on File : {$msg} </h3>";
      }
  }
  
  
  $developer = new Developer();
  $developer->logFile("saving");
  $developer->logEmail("saving");
  $developer->logWeb("saving");