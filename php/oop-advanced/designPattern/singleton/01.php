<?php
class Database {
    public function __construct() {
        echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
    }
}
$db1 = new Database();
$db2 = new Database();
$db3 = new Database();

echo "<pre>";
var_dump($db3);
echo "</pre>";
