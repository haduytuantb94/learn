<?php
class human
{
    public $voice;
    public $eyes;
    public $head;
    public $n_array = [];

    public $n_str = "";

    public function __construct($arrayhuman)
    {
        $this->eyes = $arrayhuman['eyes'];
        $this->voice = $arrayhuman['voice'];
        $this->head = $arrayhuman['head'];
        $this->n_array[] = $arrayhuman['eyes'];
        $this->n_array[] = $arrayhuman['voice'];
        $this->n_array[] = $arrayhuman['head'];
    }
    public function run()
    {
        return "I have " . $this->eyes . " eyes";
    }
    public function eat()
    {
        return "I have a " . $this->voice . " voice <b>" . __METHOD__ . "</b>";
    }
    public function cry()
    {
        return "I love this " . $this->head . " head and " . $this->run();
    }
    public function convert()
    {
        $this->n_str =  implode(',', $this->n_array);
    }
    public static function explode_Array()
    {
        return  explode(',', human::$n_str);
    }
}

class people extends human
{
    public function convert_array()
    {
        return $this->n_array;
    }
}
