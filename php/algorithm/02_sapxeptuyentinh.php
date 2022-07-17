<?php 
//thuật toán tìm kiếm tuyến tính

$array = [1,2,3,13,12,45,43,65,12,34,35,36];
$so_can_tim = 13;

for ($i=0; $i < count($array) ; $i++) { 
  if($array[$i] == $so_can_tim){
     echo "true";  
  }
}

?>