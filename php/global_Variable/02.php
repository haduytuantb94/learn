<?php 
$enter = "<br />";

require_once '01.php';
echo "FUNCTION1 : ";
getInstance().$enter;
echo $myName.$enter;
echo "FUNCTION2 : ";
getNewName().$enter;
echo $myName.$enter;


$var = 'a:23:{i:0;s:49:"ajax-thumbnail-rebuild/ajax-thumbnail-rebuild.php";i:1;s:24:"buddypress/bp-loader.php";i:2;s:33:"classic-editor/classic-editor.php";i:3;s:35:"classic-widgets/classic-widgets.php";i:4;s:23:"debug-bar/debug-bar.php";i:5;s:29:"haduy_plugin/haduy_plugin.php";i:6;s:37:"jnews-breadcrumb/jnews-breadcrumb.php";i:7;s:35:"jnews-essential/jnews-essential.php";i:8;s:31:"jnews-gallery/jnews-gallery.php";i:9;s:29:"jnews-jsonld/jnews-jsonld.php";i:10;s:39:"jnews-meta-header/jnews-meta-header.php";i:11;s:41:"jnews-social-login/jnews-social-login.php";i:12;s:41:"jnews-social-share/jnews-social-share.php";i:13;s:27:"jnews-split/jnews-split.php";i:14;s:41:"jnews-view-counter/jnews-view-counter.php";i:15;s:31:"jnews-weather/jnews-weather.php";i:16;s:27:"js_composer/js_composer.php";i:17;s:29:"learn_plugin/learn_plugin.php";i:18;s:53:"post-slider-and-carousel/post-slider-and-carousel.php";i:19;s:27:"theme-check/theme-check.php";i:20;s:69:"vafpress-post-formats-ui-develop/vafpress-post-formats-ui-develop.php";i:21;s:27:"woocommerce/woocommerce.php";i:22;s:41:"wordpress-importer/wordpress-importer.php";}';

$myArray = unserialize($var);
    echo "<pre>";
    print_r($myArray);
    echo "</pre>";

    // foreach($myArray as $key => $val) {
    // 	echo  $flag."<br />";
    // 	if($val == $plugin_path) {
    // 		echo "plugin active";
    // 		return;
    // 	}else {
    // 		echo $flage = 'true'."<br />";
    // 	}
    // }

    // if($flage == 'true') {
    // 	echo "Plugin not active";
    // }

function hd_is_active_plugin($path) {
    global $myArray;

    foreach($myArray as $key => $value) {
        if($value == $path){
        	return true;
        } 
    }
    return false;
}
$plugin_path = 'classic-widgets/classic-widgets.php';

if(hd_is_active_plugin($plugin_path) == true) {
	echo "Plugin actived";
}else {
	echo "plugin not actived";
}

?>