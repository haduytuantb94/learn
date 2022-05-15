<?php

class Playtation {
	
	private $game; 
	
	public function __construct(){
	}
	
	public function setGame($objGame){
		$this->game		= $objGame;
	}
	
	public function play(){
		echo 'playing';
	}
}

$fifa		 = new Fifa();
$mario		 = new Mario();
$playstation = new Playtation();
$playstation->setGame($fifa);


$playstation->play();