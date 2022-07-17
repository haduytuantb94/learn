<?php

interface People {
    protected function eat();
    public function sleep();
}

interface Bird {
    public function fly();
}
class Lion {
    public function run() {
        echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
    }
}
class Superman extends Lion implements People, Bird {
    public function eat() {
        echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
    }
    
    public function sleep() {
        echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
    }
    public function fly() {
        echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
    }
    
}

$superMan = new Superman();
$superMan->eat();
$superMan->sleep();
$superMan->run();