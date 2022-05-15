<?php 
//thuật toán kỹ thuật đặt cờ hiệu :

//Khai báo cờ ban đầu có giá trị bằng false;

$flag = false;

for ($i=0; $i < 100 ; $i++) { 
    if($i % 40 == 0) {
        $flag = true;
    }
}

if($flag == true) {
    echo "có";
}else {
    echo "Không";
}

?>