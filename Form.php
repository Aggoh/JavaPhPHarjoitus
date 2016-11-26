<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">	
	<script src="js/lunch_menu.js"></script>	
</head>
<body>
	<div class="login">
		<div class="heading">
			<h2>Sign in</h2>
			<form method="post" id="login" action="login.php">
				<div class="input-group input-group-lg">
					<span class="input-group-addon"><i class="fa fa-user"></i></span>
					<input type="text" name="username" class="form-control" placeholder="Username">
				</div>
				<div class="input-group input-group-lg">
					<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					<input type="password" name="password" class="form-control" placeholder="Password">	
				</div>
				<input type ="submit" name="Login" value="Login" class="float">
			</form>	
		</div>
		<div class="input-group input-group-lg">
			<a href='empty_form.php' class="span" >Register now!</a>
		</div>
	</div>
 </body>
</html>	

