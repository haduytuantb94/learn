<?php
$subject = "PHP is easy PHP";
$subject.= "PHP is easy PHP";
$subject_2= "PHP is easy PHP";
$pattern = '/PHP/';

if(preg_match_all($pattern,$subject,$match)) {
    echo "Tim thay";
}else {
    echo "Khong tim thay";
}

echo "<pre>";
print_r($match[0]);
echo "</pre>";

?>