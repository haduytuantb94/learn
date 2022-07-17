<?php
$array_n = $_POST['newArray'];

$array_str = implode(' love ',$array_n);
echo '<pre>';
print_r($array_str );
echo '</pre>';
?>