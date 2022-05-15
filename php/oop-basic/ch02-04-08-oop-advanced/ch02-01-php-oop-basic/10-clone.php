<?php 

// clone	Gán một đối tượng bởi một đối tượng đã có sẵn và không muốn thay đổi hoặc ảnh hưởng đến đối tượng có sẵn đó

class Student{

	public $code;
	public $name;

	public function __construct($code = '123456', $name = 'Peter Brown'){
		$this->code		= $code;
		$this->name		= $name;
	}

	public function setName($nameValue){
		$this->name	= $nameValue;
	}

	public function showInfo(){
		echo '<br />- Code: ' . $this->code;
		echo '<br />- Name: ' . $this->name;
	}
}

$studentA	= new Student();
echo '<pre style="color:red;font-weight:bold">';
print_r($studentA);
echo '</pre>';

$studentB	= clone $studentA;
$studentB->setName('John Smith');
echo '<pre style="color:red;font-weight:bold">';
print_r($studentB);
echo '</pre>';

echo '<pre style="color:red;font-weight:bold">';
print_r($studentA);
echo '</pre>';











