<?php

$file = "/files/abc.txt";
echo "PATHINFO_BASENAME: ".pathinfo($file,PATHINFO_BASENAME)."<br />";
echo "PATHINFO_DIRNAME: ".pathinfo($file,PATHINFO_DIRNAME)."<br />";
echo "PATHINFO_EXTENSION: ".pathinfo($file,PATHINFO_EXTENSION)."<br />";
echo "PATHINFO_FILENAME: ".pathinfo($file,PATHINFO_FILENAME)."<br />";
/*
 *  PATHINFO_BASENAME: abc.txt
    PATHINFO_DIRNAME: /files
    PATHINFO_EXTENSION: txt
    PATHINFO_FILENAME: abc
 */

?>

