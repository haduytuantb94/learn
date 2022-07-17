<?php

$file = "files/abc.txt";
$filename = "files/ZendStudio.exe";
$filename2 = "files/PhpStorm.rar";
$filename3 = "files/PhpStorm-2022.1.1.exe";
$enter = "<br />";
$file_size_new = filesize($filename3);
    
          // 1kB = 1024 B
          // 1MB = 1024 KB
          // 1GB = 1024 MB
          // 1T  = 1024 GB
          
  $arr = ['B','KB','MB','GB','T'];
  for($x = 0;$x < count($arr);$x++){
      if($file_size_new > 1024) {
          $file_size_new = $file_size_new/1024;
      }else {
          $result = round($file_size_new,2).".".$arr[$x];
          echo $result;
          break;
      }  }

?>

