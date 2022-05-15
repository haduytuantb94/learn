<?php
namespace Test;

use Zend\Obj\Student;

require_once 'Zend/Obj/Student.php';


class Teacher {
	
	public $student;
	
	public function __construct(){
		$this->student	= new Student();
	}
}

$teacher = new Teacher();

echo '<pre style="color:red;font-weight:bold">';
print_r($teacher);
echo '</pre>';
