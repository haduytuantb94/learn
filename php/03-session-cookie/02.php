<?
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($_COOKIE['haduytuan'])) {
    echo "Hi.Cookie";
    echo '<br /> LastLogin: '. date('d/m/Y H:i:s',time());
    setcookie('haduytuan','This is my cookie',time()+30);
}else {
    echo "Please set Cookie again.";
}
