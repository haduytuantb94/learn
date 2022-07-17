<?php
class Cat
{

    public $color;

    public $name;

    public function __construct($color, $name)
    {
        $this->color = $color;
        $this->name = $name;
    }

    public function getInfo()
    {
        return "Hello I am ".$this->name."My color is ".$this->color;
    }
}
class myTiger {
    public function getMTiger(){
        return "it is myTiger Class";
    }
}
class Tiger extends Cat {
//     public function __construct() 
//     {
//         parent::__construct();
//     }
    public function getParent()
    {
        $this->cTiger = new myTiger();
        echo $this->cTiger->getMTiger();
    }
}

// $tiger = new Tiger("red","Mimi");
// $tiger->getParent();









