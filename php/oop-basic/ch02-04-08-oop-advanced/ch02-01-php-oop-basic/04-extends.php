<?php
	
	require_once 'class/Teacher.class.php';
	
	$teacher	= new Teacher();
	$teacher->setName('Bill Gate');
	
	$teacher->showInfo();
?>
