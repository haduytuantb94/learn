<?php
include_once 'functions.php';

if (isset($_FILES['file-upload']) && $_FILES['file-upload'] != "") {
    $fileUpload = $_FILES['file-upload'];
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
    $flag = false;
    foreach ($fileUpload['name'] as $key => $value) {
        if ($value != NULL) {
            $destination = './uploads/' . $value;
            $result = move_uploaded_file($fileUpload['tmp_name'][$key], $destination);
            $flag = ($result == true) ? true : false;
            $flag == false;
        }else {
            echo "Vui lòng chọn ảnh để upload";
        }
    }
    if ($flag == true) {
        $listFiles = implode(',', $fileUpload['name']);
        $readfileArr = explode(',', $listFiles);
        for ($x = 0; $x < count($readfileArr); $x ++) {
            ?>
<div>
	<a href="uploads/<?php echo $readfileArr[$x]; ?>">xem anh <?php echo $x; ?></a>
</div>
<?php
        }
    } else {
        echo "Đã có lỗi khi Upload ảnh của bạn";
    }
}

?>


