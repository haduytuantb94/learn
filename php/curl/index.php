<?php
// Tạo mới một CURL
$ch = curl_init();

// Cấu hình cho CURL
curl_setopt($ch, CURLOPT_URL, "https://freetuts.net/");

// Thực thi CURL
curl_exec($ch);

// Ngắt CURL, giải phóng
curl_close($ch);