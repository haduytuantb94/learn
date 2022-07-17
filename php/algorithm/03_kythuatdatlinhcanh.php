<?php 
//thuật toán kỹ thuật đặt lính canh :
function max3so($a, $b, $c){
   $num_max = $a;

   if($num_max < $b) {
     $num_max = $b;  
   }
   if($num_max < $c) {
       $num_max = $c;
   }
   return $num_max;
}

echo max3so(1,12,5);

?>