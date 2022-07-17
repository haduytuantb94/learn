<?php

class Cat {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo "<p>". __CLASS__."</p>" ;
    }
    public function getInfo() {
        echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
    }
    public function getCat_Info() {
        require_once 'includes/header.php';
        echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
        require_once 'includes/footer.php';
    }
}

class Person {
    private $name;
    private $age;
    private $assets = [];
    public  $girlFriend = "Phuong Le";
    
    public function __construct($name = "Tuan Ha", $age = '28') {
        $this->name = $name;
        $this->age = $age;
    }
    public function showInfo() {
        return  $this->name. ' - his age is : '. $this->age;
    }
    protected function showAsset() {
        require_once 'includes/header.php';
        echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
        require_once 'includes/footer.php';
    }
    public function getCatInfo() {
        $this->catName = new Cat('Doremon', 2);
        echo $this->catName->age;
        $this->catName->getCat_Info();
    }
}

class student extends Person {
    public function showAge() {
     // return $this->name;
    }
    public function getAsset() {
        return $this->showAsset();
    }
}

$person = new Person();
// echo $person->showInfo();
$person->getCatInfo();

$student = new Student();
echo $student->showAge();
$student->getAsset();