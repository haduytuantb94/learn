<?php 

    function removeXss($string) {
		$string = preg_replace('#&(?!\#[0-9]+;)#si', '&amp;', $string);
		$string = str_replace("<", "&lt;", $string);
		$string = str_replace(">", "&gt;", $string);
		$string = str_replace("\"", "&quot;", $string);
		$string = str_replace("\'", "&quot;", $string);

		static $preg_find = array(
			'#javascript#i',
			'#vbscript#i'
		);

		static $preg_replace = array(
			'java script',
			'vb script'
		);

		return preg_replace($preg_find, $preg_replace, $string);
	}
// echo $variable = removeXss($_GET['test']).'<br />';
// echo $_GET['test'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Load More</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="node_modules/jquery-easy-loading/src/loading.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1 class="page-header text-center">List Movie</h1>
		<div id="show-films">
			<!-- showFilm -->
		</div>
		<div class="row">
			<p class="col-md-2 col-md-offset-5">
				<button type="button" class="btn btn-primary btn-block" id="btn-show" onclick="javascript:loadData()">Load More</button>
			</p>
		</div>
	</div>	
	<script id="templateHtml" type="text/x-handlebars-template">
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="assets/images/{image}" alt="{title}">
				<div class="caption">
					<h4 class="text-center">{title}</h4>
					<p class="text-center"> Release date: <strong>{description}</strong></p>
				</div>
			</div>
		</div>
	</script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="node_modules/jquery-easy-loading/dist/jquery.loading.js"></script>
	<script src="assets/js/my-js.js"></script>
	<script type="text/javascript">
		var str = "Hello I am Tuan";
        var new_Str = str.replace('Hello','Xin chào');
            console.log(new_Str);
	</script>
</body>
</html>


