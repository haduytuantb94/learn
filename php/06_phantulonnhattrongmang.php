<?php 
// Tìm phần tử lớn nhất trong mảng :

$newArray = [1,2,9,6,3,8,0,11,15,67,27,1,4,56,76,43,76,3,18];
//chọn giá trị đầu tiên trong mảng là MAX.Sau đó so sánh các phần tử tiếp theo trong mảng.
$max = $newArray['0'];
for ($i=1; $i < count($newArray); $i++) { 
   if($newArray[$i] > $max) {
    $max =  $newArray[$i];
   }
}
echo $max." ";

//Sắp xếp mảng sau theo thứ tự giảm dần thì làm ngược lại:



?>