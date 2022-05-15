<?php
	// Developer	Web, Email, File
	// Publish		File
	
	interface Logger {
		public function log($msg);
	}
	
	abstract class LoggerDecorator implements Logger{
		protected $logger;
		
		public function __construct(Logger $logger){
			$this->logger	= $logger;
		}
		
		abstract public function log($msg);
	}
	
	// FileLogger
	class FileLogger implements Logger{
		public function log($msg){
			echo "<h3>Error on FILE: {$msg}</h3>";
		}
	}
	
	class EmailLogger extends LoggerDecorator{
		public function log($msg){
			echo "<h3>Error on EMAIL: {$msg}</h3>";
			$this->logger->log($msg);
			
		}
	}
	
	class DatabaseLogger extends LoggerDecorator{
		public function log($msg){
			$this->logger->log($msg);
			echo "<h3>Error on DATABASE: {$msg}</h3>";
		}
	}
	
	
	$log	= new FileLogger();				// $log	= FileLogger
	$log	= new EmailLogger($log);		// $log = EmailLogger		$this->logger = FileLogger
	//$log	= new DatabaseLogger($log);
	$log->log('saving');
	
	
	
	
	
	
	
	