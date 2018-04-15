<?php 
require 'sys/config.php';
require 'sys/connect.php';
$sql = "SELECT * FROM code";
$query = mysqli_query($conn,$sql);
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Facebook Live Stream Chat</title>
<link rel="stylesheet" type="text/css" href="font/fonts.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="dist/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="dist/js/jquery.min.js"></script>

<!-- JQuery -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Style Me -->
<link rel="stylesheet" href="dist/css/style.css"></script>

</head>
<body style="background-image: url(dist/images/bg_home.jpg) ;">
<header>
<center>
</center>
<br><br><br>
<div class="container"> 
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<center>
						<h2>Facebook Chat Live Streaming</h3>
					</center>
						<?php
							while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
						{
						?>
						<form action="action.php" method="post">
							<input type="hidden" name="action" value="fb">
						<div class="form-group">
							<label for="username">Token Code</label>
							<input type="password" id="username" class="form-control" name="token" placeholder="Token..." value="<?php echo $result["token"];?>">
						</div>
						<div class="form-group">
							<label for="username">Post ID</label>
							<input type="text" id="username" class="form-control" name="post" placeholder="PostID..." value="<?php echo $result["post"];?>"> 
						</div>
						<?php } ?>
								<button type="submit " class="btn btn-success btn-block">Save</button>
						</form>
								<a href="preview.php"><button type="submit " class="btn btn-primary btn-block">Preview</button></a><br>
								<a href="https://developers.facebook.com/tools/explorer" target="_blank"><button type="submit " class="btn btn-warning btn-block">Get Token</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
