<?php
$myName = "Tuan";
$yourName = "Thuy";

$myName = &$yourName;

?>

<?php
  $conn = mysqli_connect('localhost','root','','learn');
  if(!$conn){
      die("connection Failed");
  }else {
      $query = "SELECT * FROM `mssv` WHERE `age`= '23'";
      $result = mysqli_query($conn,$query);
       if(!$result) {
           die("Query to database failed");
       }else {
            $enter = "<br>";
           while($rows = mysqli_fetch_assoc($result)){
               $yourName =  $rows['name'];
               echo $yourName.$enter;
           }
           ?>
<?php
           mysqli_data_seek($result, 0);
           while($rows = mysqli_fetch_assoc($result)){
               $yourAge =  $rows['age'];
               echo $yourAge.$enter;
           }
       }
  }
?>
<?php

  $query_2 = "SELECT `name`, `address` FROM `mssv` WHERE `age`= '23'";
  $result_2= mysqli_query($conn,$query_2);
  $items = mysqli_fetch_assoc($result_2);
//  while ($items = mysqli_fetch_assoc($result_2)){
      echo "<pre>";
      print_r($items);
      echo "</pre>";
  //}
   $rows = mysqli_num_rows($result_2);
echo "<pre>";
print_r($rows);
echo "</pre>";
?>
