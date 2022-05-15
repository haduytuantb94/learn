<?php 
//Sử dụng hàm compact() để tạo mảng :

$php = "php";
$css = "css";
$js = "js";
 
$result = compact(
    "php",
    "css",
    "js"
);
echo "<pre>";
print_r($result);
echo "</pre>";

/*
 *
 * hàm array_pop : Xoá phần tử cuối trong mảng
 * hàm array_unshift : thêm phần tử vào đầu mảng
 * hàm array_shift : xoá phần tử đầu mảng
 * hàm array_push : thêm phần tử vào cuối mảng
 * 
 */

// hàm array_slice : Cắt bỏ phần tử của mảng,giữ lại những phần tử được chọn :

$array = range(
    "a",
    "f"
);
 
$output = array_slice($array, 2);      // returns "c", "d","e","f"
echo "<pre>";
print_r($output);
echo "</pre>";       
$output = array_slice($array, -2, 1);  // returns "e"
echo "<pre>";
print_r($output);
echo "</pre>";        
$output = array_slice($array, 0, 3);   // returns "a", "b", and "c"
echo "<pre>";
print_r($output);
echo "</pre>"; 
?>