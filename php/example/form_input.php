<?php 
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post">
		<input type="text" name="haduy[]">
		<input type="text" name="haduy[]">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>