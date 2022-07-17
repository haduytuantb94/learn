<?php
$file = "files/abc1.txt";
$data="ha duy tuan";
//ghi de len noi dung cua file:
file_put_contents($file, $data);
//ghi them vao file :
file_put_contents($file, $data,FILE_APPEND);

?>

