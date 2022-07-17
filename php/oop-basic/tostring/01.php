<?php
class Student {
    public $code;
    public $name;
    public $birthday;
    
    public function __construct($codeValue = '123456', $nameValue = 'Peter Brown', $birthdayValue = '20/01/1994') {
        $this->code = $codeValue;
        $this->name = $nameValue;
        $this->birthday = $birthdayValue;
    }
    public function  __toString() {
        $xhtml = '<p>Name: '.$this->name.'</p>';
        $xhtml.= '<p>Code: '.$this->code.'</p>';
        $xhtml.= '<p>birthday: '.$this->birthday.'</p>';
        return $xhtml;
    }
}

$student = new Student();
echo $student;