<?php 

class Student{
		
	private $country;
	protected $name;
	
	public function __construct($countryValue = 'American', $nameValue = 'Peter Brown'){
		$this->country		= $countryValue;
		$this->name			= $nameValue;
	}
	
	public function  __get($property){
		$result = strtoupper($this->$property);
		return $result;
	}
	
	public function  __set($propertyName, $propertyValue){
		$this->$propertyName	= $propertyValue;
	}
}

$student = new Student();

$student->name = 'john smith';
echo '<pre class="print_r">';
print_r($student);
echo '</pre>';



