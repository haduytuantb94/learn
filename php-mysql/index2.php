<?php include 'includes/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SQL Index</title>
</head>
<body>
<?php 
       $connection = mysqli_connect('localhost','root','','learn_sql');
       $query_2 = "SET NAMES utf8";
       mysqli_query($connection,$query_2);
       $query = "SELECT * FROM employee";
       $result = mysqli_query($connection,$query);
       ?>
       <!-- <select> -->
       <!-- <option value="">Chọn tên bạn thích</option> -->
       <?php
       while ($row = mysqli_fetch_array($result)) {

              // echo $row[1]."<br>"; 

              echo "<pre>";
              print_r($row);
              echo "</pre>";
       ?>  
		   	   <!-- <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option> -->
        <?php  } ?>
 		<!-- </select> -->
  

</body>
</html>