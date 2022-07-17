<?php 

$string = 'a:5:{s:19:"wp_inactive_widgets";a:0:{}s:12:"main-sidebar";a:5:{i:0;s:7:"block-2";i:1;s:7:"block-3";i:2;s:7:"block-4";i:3;s:7:"block-5";i:4;s:7:"block-6";}s:15:"footer-widget-2";a:1:{i:0;s:12:"categories-1";}s:15:"footer-widget-3";a:1:{i:0;s:6:"meta-1";}s:13:"array_version";i:3;}';

$newArr = unserialize($string);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";

?>