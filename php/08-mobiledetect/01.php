<?php
require_once('Mobile_Detect.php');
require_once('class-check.php');


$detect = new Mobile_Detect();

$device = ($detect->isMobile())? (($detect->isTablet())? 'tablet' :'phone') : 'Computer';

if($device == 'tablet') {
    //load giao diện cho Tablet
}elseif ($device == 'phone') {
    //Load giao diện cho Mobile
    //Load templage for Mobile
}else {
    //Load giao diện cho Computer
}
if($detect->isiOS()){
    echo "iOS";
}

$humanArray = [
    'eyes' => 'blue',
    'voice' => 'strong',
    'head' => 'circle'
];

$human = new human($humanArray);
$people = new people($humanArray);
// $convert->convert;

// echo $human->run()."<br>";
// $eat = $human->eat();
// echo $human->cry();

echo '<pre>';
var_dump($human);
echo '</pre>';

// echo '<pre>';
// print_r($human->n_array);
// echo '</pre>';

echo '<pre>';
print_r($human->convert());
echo '</pre>';


echo '<pre>';
print_r($people->convert_array());
echo '</pre>';

// echo '<pre>';
// print_r($detect);
// echo '</pre>';
