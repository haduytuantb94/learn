<?php
class Student {
    private $name;
    protected $country;
    
    public function __construct($countryValue = 'American', $nameValue = 'Peter Brown') {
        $this->country = $countryValue;
        $this->name    = $nameValue;
    }
    
    public function __get($property) {
        return $this->$property;
    }
    public function __set($propertyName,$propertyValue) {
        $this->$propertyName = $propertyValue;
    }
}

$student= new Student();


$student->name = "Smith";
echo "<pre>";
print_r($student);
echo "</pre>";

/* echo "<pre>";
print_r($student->country);
echo "</pre>"; */