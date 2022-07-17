<?php 

$course_id = $_GET['key'];

$course = [];

$course[0] = array('id'=> 1 , 'name'=>'Zend FrameWork');
$course[1] = array('id'=> 2 , 'name'=>'Joomla');
$course[2] = array('id'=> 3 , 'name'=>'PHP');

if($course_id != "") {
  	    $result = $course[$course_id];
  	    echo json_encode($result);
  	    // echo implode(',', $result);
}

?>