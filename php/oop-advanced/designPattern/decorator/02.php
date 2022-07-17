<?php
  //Developer   Web,Email,File
  //publish    file
  
interface Logger {
    public function log($msg);
}

abstract class loggerDecorator implements Logger {
    private $logger;
    
    public function __construct(Logger $logger) {
        $this->logger = $logger;
        
    }
    abstract public function log($msg);
}

//file Logger
class fileLogger implements Logger {
    public function log($msg) {
        echo "<h3>Error on File: </h3> {$msg}";
    }
}

//Email Logger
class emailLogger extends loggerDecorator {
    public function log($msg) {
        echo "<h3>Error on Email: </h3> {$msg}";
    }
}

$log = new fileLogger();
$log = new emailLogger($log);
$log->log("saving");
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  