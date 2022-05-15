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

	class BookContronller {
		public function createBook($infoBook){
			switch ($infoBook['type']){
				case 'programming':
					$book = new BookProgramming($infoBook['id'], $infoBook['name']);
					break;
				case 'design':
					$book = new BookDesign($infoBook['id'], $infoBook['name']);
					break;
				case 'english':
					$book = new BookEnglish($infoBook['id'], $infoBook['name']);
					break;
				default:
					$book = new BookProgramming($infoBook['id'], $infoBook['name']);
					break;
			}
			return $book;
		}
	}
	
	$bookController = new BookContronller();
	
	$book		= $bookController->createBook($_GET);
	
	echo '<pre style="color:red;font-weight:bold">';
	print_r($book);
	echo '</pre>';
	
	
	
	
	