<?php
$subject = "PHP is easy /PHP/";
$pattern = '/\/PHP\//';

//tim tiem "/PHP/" trong chuoi $subject
if(preg_match($pattern,$subject,$match)) {
    echo "Tim thay";
}else {
    echo "Khong tim thay";
}

echo "<pre>";
print_r($match);
echo "</pre>";

?>