<?php
$subject = "PHP is easy PHP";
$pattern = '/PHP/';

if(preg_match($pattern,$subject,$match)) {
    echo "Tim thay";
}else {
    echo "Khong tim thay";
}
?>