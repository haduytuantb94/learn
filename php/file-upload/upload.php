<?php
if(isset($_FILES['file-upload']) && $_FILES['file-upload']!= "" ) {
    $fileUpload = $_FILES['file-upload'];
    $fileDes = './uploads/'.$fileUpload['name'];
    $fileName = $fileUpload['tmp_name'];
     $result = move_uploaded_file($fileName, $fileDes);
     
     if($result == true) {
         echo "Upload success";
     }else {
         echo "upload failed";
     }
}