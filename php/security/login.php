<?php 
require_once 'header.php';
require_once 'database.class.php';
require_once 'functions.php';
isLogged();

// $params['username']
// $params['password']

if(isset($_GET['username']) && isset($_GET['password']) ) {
    $db = new Database();
    $params = [];
    $userName = trim($_GET['username']);
    $passWord = trim($_GET['password']);
    
    if(!empty($userName) && !empty($passWord) ) {
        $result = $db->setLoggin($userName, $passWord);
        if(!$result) {
            $error = $db->error;
        } else {
            header('location: dashboard.php');
        }
       
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=${encoding}">
<title>Insert title here</title>
</head>
<body>
  <h3>Login Form</h3>
  <form method="get">
     <table>
        <tr> 
           <td>Username</td>
           <td>
           <input type="text" name="username" id="username" value="<?php echo isset($userName) ? $userName : ""; ?>">
           </td>
        </tr>
        <tr> 
           <td>Password</td>
           <td>
           <input type="password" name="password" id="password" value="<?php echo isset($passWord) ? $passWord : ""; ?>">
           </td>
        </tr>
        <tr> 
           <td></td>
           <td><input type="submit" id="password" value="Submit"></td>
        </tr>
        <div><?php echo isset($error) ? $error : "";?></div>
     </table>
  </form>
</body>
</html>