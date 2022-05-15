<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Show Data</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>		
<body>
<?php
	session_start();
	if(!empty($_FILES)){
		
		if($_SESSION['token'] == $_POST['token']){	// Refresh page
			unset($_SESSION['token']);
			header('Location: index.php');
			exit();
		}else{
			$_SESSION['token'] = $_POST['token'];
		}
		
		require_once 'class/Upload.class.php';
		$upload	= new Upload('file-upload');
	
		$upload->setFileSize(0, 5000000);
		$upload->setFileExtension(array('jpge', 'jpg', 'png'));
		$upload->setUploadDir('data/');
		
		$message	= '';
		if($upload->isVail()==true){
			$upload->upload();
			$message	= '<p class="alert alert-info">Success<p>';
		}else{
			$message	= $upload->showError();
		}
	}
?>

	<div class="container my-content">
		<h1 class="page-header">PHP OOP - Upload File</h1>
		
		<div class="row">
			<!-- FORM UPLOAD -->
			<form action="#" method="post" id="main-form" name="main-form" class="form-inline" enctype="multipart/form-data">
				<input type="file" id="file-upload" name="file-upload" style="display: none;">
				<a class="btn btn-info" id="select-file" href="#" onclick="javascript:openFile();">Select File</a>
				<input type="hidden" id="token" name="token" value="<?php echo time();?>">
				<button type="submit" class="btn btn-primary" disabled="disabled">Upload</button>
			</form>
		</div>
		<!-- ERROR -->
		<?php echo $message;?>
			
		<div class="row content-course">
					
		</div>
		
		<!-- POPUP -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-body">

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function openFile(){
			$('#file-upload').click(); 
			return false;
		}

		function loadImages(){
			$('div.content-course').load('list.php');
		}

		function showImage(imageSrc){
			var image	= imageSrc.replace('125-','450-');
			$('#myModal .modal-body').html('<img src="'+image+'"/>');
		}

		function deleteImage(imageSrc){
			$.ajax({
				url		: 'delete.php',
				type	: 'POST',
				data	: {imageSrc: imageSrc},
				success : function(data){
					//loadImages();
					$('div.col-md-2 .thumbnail img[src="'+imageSrc+'"]').parent().parent().remove();
				}
			});
		}
		
		$(document).ready(function(){
			loadImages();
			$('#file-upload').on('change',function(){
				var filename = this.value.split('\\').pop();
				$('a#select-file').text(filename);
				$('button[type="submit"]').removeAttr('disabled');
			}) 
		});
	</script>
</body>
</html>