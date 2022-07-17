<?php
function getContentVN1() {
    $content = file_get_contents('https://vnexpress.net/the-thao');
    return $content;
}
    
function getContentVN2() {
    $content = file_get_contents('https://vnexpress.net/the-thao');
}