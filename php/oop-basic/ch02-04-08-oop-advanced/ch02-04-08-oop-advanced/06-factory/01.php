<?php
	// Website bookstore	=> Programming, Design Web, English
	// 01.php?type=programming&id=2&name=abc
	

	abstract class Book {
		private $id;
		private $name;
		protected  $type = null;
		
		public function __construct($id, $name) {
			$this->id	= $id;
			$this->name	= $name;
		}
		
		public function getId(){
			return $this->id;
		}
		
		public function getName(){
			return $this->name;
		}
		
		public function getType(){
			return $this->type;
		}
	}


	class BookProgramming extends Book{
		protected  $type = 'programming';
	}
	
	class BookDesign extends Book{
		protected $type = 'design';
	}
	
	class BookEnglish extends Book{
		protected $type = 'english';
	}
	
	$book	= new BookProgramming('P01', 'PHP Programming');
	$book	= new BookDesign('D03', 'jQuery');
	
	
	