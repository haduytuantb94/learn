<?php 
if(!isset($_POST['securi'])) {
	exit();
}

require_once 'config.php';
$error = array();
$userName = $_POST['username'];
$passWord = md5(trim($_POST['password']));
$email    = $_POST['email'];

// $userName = 'hathuman12345';
// $passWord = md5(trim(123456));
// $email    = 'hathuman@gmail.com';

if(!empty($userName) && !empty($passWord) && !empty($email)) {

	$validate_qr_username = "SELECT `username` FROM `manager_user` WHERE `username` = '$userName'";

	$validate_qr_email    = "SELECT `email` FROM `manager_user` WHERE `email` = '$email'";

    $db->db_query($validate_qr_username);

    if(mysqli_num_rows($db->result) > 0) {
    	$error['username'] = "Username existed";
    }  

    $db->db_query($validate_qr_email);

    if(mysqli_num_rows($db->result) > 0) {
    	$error['email']   = "Email existed";
    }

    if(count($error) <= 0) {
	    $query = "INSERT INTO `manager_user` (`username`,`password`,`email`) VALUES ('$userName', '$passWord', '$email')";
	    $db->db_query($query);
	    if(!$db->result) {
	       echo "Da co loi xay ra";
	    }
    } else {
    	echo json_encode($error);
    	// echo implode(',' , $error);
    }
    
} else {
	$error['empty'] = "Da co loi xay ra.Vui long bao cao lai voi ban quan tri Website.Xin cam on";
	echo json_encode($error['empty']);
}

?>      