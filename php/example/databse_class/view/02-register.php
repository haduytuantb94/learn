<?php
include_once('C:\laragon\www\learn\php\example\databse_class\01-define.php');

if(isset($_POST['btn-submit'])) {
   $username = trim($_POST['username']);   
   $password = md5(trim($_POST['password']));   
   $email = trim($_POST['email']);   
   $firstName = $_POST['firstname'];   
   $lastName = $_POST['lastname'];   
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Thuc hanh Class Database</title>
  <style>
      .main-form {
          width: 450px;
          height: auto;
          margin:10px auto;
          padding: 10px;
          border:1px solid #ddd;
      }
      input {
          height: 20px;
          padding: 5px;
          border-radius:5px;

      }
      tr td {
          padding:10px 0;
      }
      tr td:first-child {
          padding-right: 5px;
      }
  </style>
</head>
<body>
    <div class="main-form">
        <form id="register-form" method="POST">
            <h2>Register Form</h2>
            <table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" class="username-form"  value="<?php echo isset($username) ? $username :' ' ?>" required/>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" class="password-form"  value="<?php echo isset($password) ? $password :' ' ?>" required/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" class="email-form"  value="<?php echo isset($email) ? $email :' ' ?>" required/></td>
                </tr>
                <tr>
                    <td>FirstName</td> 
                    <td><input type="text" name="firstname" class="firstname-form"  value="<?php echo isset($firstName) ? $firstName :' ' ?>" required/></td> 
                </tr>
                <tr>
                    <td>LastName</td>
                    <td><input type="text" name="lastname" class="lastname-form"  value="<?php echo isset($lastName) ? $lastName :' ' ?>" required/></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <select>
                             <option value="0">Male</option>
                             <option value="1">Fmale</option>
                         </select>
                    </td>
                </tr>
                 <tr>
                     <td>Đồng ý điều khoản</td>
                     <td>
                         <input type="checkbox" name="lastName" class="lastName-form"  value="" required/>
                         <a href="#">Xem chi tiết</a>
                    </td>                   
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn-submit" name="btn-submit" />
                    </td>
                </tr>
            </table>
        </form>
    </div>

   <?php
   $query = "SELECT * FROM `mssv` WHERE `age`= '23'";
  // $conn->db_query($query);
   $conn->result_query($query);
     while($rows = mysqli_fetch_assoc($conn->result)) {?>
         <h3><?php echo $rows['name']; ?></h3>
     <?php  }  ?>
</body>
</html>