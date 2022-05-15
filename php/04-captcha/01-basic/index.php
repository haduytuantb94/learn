<?php  
session_start();

$result = "";
if(isset($_POST['input-captcha'])) {
    if($_POST['input-captcha'] == $_SESSION['code']){
        header('location: process.php');
    }else{
        $result = "Captcha ban nhap sai roi.Vui long thuc hien lai";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="captcha">
       
       <form action="#" method="POST" role="form">
       <label for="input-captcha">Vui long nhap Captcha</label>
           <div class="dis-flex">
                <div style="margin:10px 0;">
                <img src="captcha.php" alt="captcha" />
                </div>
                <div>
                    <p class="btn-refresh-captcha" style="cursor:pointer;">RELOAD</p>
                </div>
            </div>
           <div class="form-group">
               <input type="text" class="form-control" id="input-captcha" name="input-captcha" placeholder="Input field">
           </div>   
           <button type="submit" class="btn btn-primary">Submit</button>
       </form>
       <div class="error">
             <?php echo $result; ?>
       </div>
    </div>
</body>
</html>
