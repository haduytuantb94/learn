<?php
$subject = "haduytuan1994@z-com.com";
$pattern = '/^[a-z][a-z0-9_]{2,32}@[a-z_\-]{3,32}\.[a-z]{2,4}$/';


//tim tiem "/PHP/" trong chuoi $subject
if(preg_match($pattern,$subject,$match)) {
    echo "Tim thay";
}else {
    echo "Khong tim thay";
}


?>