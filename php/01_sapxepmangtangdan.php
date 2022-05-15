<?php 
// Sắp xếp mảng sau theo thứ tự tăng dần :
$newArray = [1,2,9,6,3,8,0];

for($i = 0; $i < count($newArray)-1; $i++) {
    for ($j= $i+1; $j < count($newArray) ; $j++) { 
      if($newArray[$i] > $newArray[$j]){
        //hoán vị :
         $temp =  $newArray[$j];
         $newArray[$j] = $newArray[$i];
         $newArray[$i] = $temp;   
      }  
    }
}

for ($i=0; $i < count($newArray); $i++) { 
    echo $newArray[$i]. " ";
}

//Sắp xếp mảng sau theo thứ tự giảm dần thì làm ngược lại:



?>