<?php 

$setdate = date_default_timezone_set('Asia/Ho_Chi_Minh');

$timestamp = time();
echo $timestamp. "<br>";

echo date('d/m/Y - H:i', $timestamp)."<br>";
/*
 * d: trả về ngày tháng (số)
 * D: trả về ngày của tháng (tiếng Anh)
 * m: trả về tháng của năm (số)
 M: Trả về tháng của năm (tiếng Anh)
 y: trả trả về năm (2 số cuối của năm)
 Y: trả về năm đầy đủ 4 số
 H: trả về số giờ (kiểu 24h)
 h: trả về số giờ (kiểu 6h)
 i: trả về số phút
 s: trả về số giây
 c: trả về thời gian kiểu ISO 8601, thường dùng tạo cho thẻ meta publish time trong SEO
*/

echo strtotime(date('Y-m-d H:i:s'))."<br>";

 //lấy danh sách timezone :

$timezone = DateTimeZone::listIdentifiers() ;
foreach ($timezone as $item){
    echo $item . '<br/>';
}




?>