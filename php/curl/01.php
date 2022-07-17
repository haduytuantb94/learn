<?php
// Các tham số
$param = array(
    'vb_login_username' => 'tendangnhap',
    'vb_login_password' => 'matkhau',
    'securitytoken' => 'guest',
    'do' => 'login'
);

// URL
$url = 'http://www.vn-zoom.com/login.php?do=login';

// Khởi tạo CURL
$ch = curl_init($url);

// Thiết lập có return
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, count($param));
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);

// Thiết lập sử dụng trình duyệt hiện tại
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

$result = curl_exec($ch);

curl_close($ch);

echo $result;