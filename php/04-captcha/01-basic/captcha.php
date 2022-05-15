<?php 

session_start();

header('Content-type: image/jpeg');

$captcha = imagecreate(100,50);

imagecolorallocate($captcha,42,194,42,);

$font = 'C:\laragon\www\learn\php\04-captcha\ch0604captcha_Ryexp\ch06-04-captcha\01-basic\vnavan.ttf';

$content = substr(md5(time()*20 -1234),0,5);

$_SESSION['code'] = $content;

$text = imagettftext($captcha,18,5,10,30,imagecolorallocate($captcha,15,20,15),$font,$content);

imagejpeg($captcha);

imagedestroy($captcha);


?>