<?
date_default_timezone_set('Asia/Ho_Chi_Minh');

if(isset($_GET['token'])) {
    setcookie('haduytuan','This is my cookie',time()+30);
    echo 'LastLogin: '. date('d/m/Y H:i:s',time());
}

if(isset($_COOKIE['haduytuan'])) {
    echo "<br /> Hi.Cookie !!!!";
}else {
    echo "Your cookie is not exists";
}

if(isset($_GET['destroyCookie'])) {
    setcookie('haduytuan','This is my cookie',time()-3600);
}

?>
<form method="get">
    <input type="submit" name="token" value="token"/>
    <input type="submit" name="destroyCookie" value="destroyCookie"/>
</form>
