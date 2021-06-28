<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com"> Welcome to this Page ! </a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Save Data </h3>
		<hr style="border-top:3px solid;border-color:blueviolet; #ccc;"/>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form method="POST">
				<div class="form-group">
					<label>Title</label>
					<input name="updatetitle" type="text" class="form-control" id="title" style="resize:none; width:350px; border-color:blueviolet;" />
					<input type="hidden" id="blog_id"/>
				</div>
				<div class="form-group">
					<label>Content</label>
					<textarea name="updatecontent" id="content" class="form-control" style="resize:none; width:350px; height: 500px; border-color:blueviolet;"></textarea>
				</div>
				<div id="result"></div>
				<br />
				<center><button name="updatepost" type="button" id="save" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Save Post</button></center>
			</form>
		</div>
	</div>
</body>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/script.js"></script>
</html>