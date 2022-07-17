<?php
namespace ABC;
$enter = "</br>";
function Hello($msg){
    global $enter;
    echo "hello".$msg.$enter;
}

Hello("Peter");

echo __NAMESPACE__;