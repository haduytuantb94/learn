<?php
if(!defined('USE_THEM_NOW')) {
    echo "Sorry,You can not access this file";
    exit();
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Thuc hanh Class Database</title>
</head>
<body>
   <?php
   $query = "SELECT * FROM `mssv` WHERE `age`= '23'";
  // $conn->db_query($query);
   $conn->result_query($query);
     while($rows = mysqli_fetch_assoc($conn->result)) {?>
         <h3><?php echo $rows['name']; ?></h3>
     <?php  }  ?>
</body>
</html>