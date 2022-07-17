<?php 

$course_id = $_GET['id'];

$course = [];

$course[0] = array('id'=> 1 , 'name'=>'Zend FrameWork');
$course[1] = array('id'=> 2 , 'name'=>'Joomla');
$course[2] = array('id'=> 3 , 'name'=>'PHP');

if($course_id != "") {
    foreach($course as $key => $value) {
  	    if($value['id'] == $course_id) {
  	 	    echo "<pre>";
  	 	    print_r($course[$key]);
  	 	    echo "</pre>";
  	 	    break;
  	    }
    }
}
  


?>