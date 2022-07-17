<?php
class Lion {
	const foot = 4;
	public $color = "blue";

	public function getInfo() {
       echo Lion::foot;  
	} 
	public static function getColor($color) {
       echo $this->$color = $color;
	}
}

$lion = new Lion();

$lion->getInfo();

Lion::getColor('red');

// echo $lion->color;
?>