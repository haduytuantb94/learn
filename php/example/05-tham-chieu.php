<?php

$b = 115;
function getNumber(&$b)
{
    $b = $b + 2;
    return $b;
}
getNumber($b);
//echo $b;

$num_Array = [1, 4, 6, 3, 5, 2];

function getnum(&$num_Array)
{
    $newArray = [];
    foreach ($num_Array as $key => $value) {
        if ($value < 3) {
            $newArray[] = $value;
            unset($num_Array[$key]);
        }
    }
    return $num_Array;
}
/*****___Tham chieu(Reference)___****/
getnum($num_Array);           
echo '<pre>';
print_r($num_Array);
echo '</pre>';
/***********************************/

$newArray = getnum($num_Array);
   foreach ($newArray as $key => $value) {
      echo $value."<br>";
   }

?>

