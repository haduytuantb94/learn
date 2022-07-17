<?php

echo "<pre>";
print_r($this);
echo "</pre>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=${encoding}">
<title>Insert title here</title>
</head>
<frameset>
    <frame>
    <frame>
    <noframes>
    <body>
    <p>This page uses frames. The current browser you are using does not support frames.</p>
    </body>
    </noframes>
    <?php if(isset($this->girlFriend)) { ?>
    <h5>Header</h5>
        <p>Name : Can not access </p>
        <p>age : Can not access </p>
        <p>assets : Can not access </p>
        <p>girlFriend : <?php echo $this->girlFriend ?> </p>
     <?php } if(isset($this->name)) { ?>
     
    <h5>Cat Info</h5>
    <p style="font-weight: bold; "><?php echo $this->name; ?></p>
    
    <?php } ?>
   

