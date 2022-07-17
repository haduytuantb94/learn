<?php

class User
{

    private $name;
    private $pass;
    private $fullname;

    public function __construct()
    {
        $this->name = 'John';
        $this->pass = '123';
        $this->fullname = 'John Smith';
    }

    public function getName()
    {
        return "Hello I am " . $this->name . "and I have pass is " . $this->pass . "and I have fullname is " . $this->fullname;
    }

    public function __destruct()
    {
        $_SESSION['userA'] = serialize($this);
        $_SESSION['time'] = time();
    }

}
