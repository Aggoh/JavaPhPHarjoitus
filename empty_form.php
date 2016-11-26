<!DOCTYPE html>
<html>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/png" href="img/icon.png">

<?php include('navbar.php'); ?>

<div class="login">
  <div class="heading">
	<h2>Register</h2>
	<form method="post" action="add_user.php">
		<div class="input-group input-group-lg">
			<span class="input-group-addon"><i class="fa fa-user"></i></span>
			<input type="text" name="tunnus" class="form-control" placeholder="Choose Your Username">			
        </div>
		
        <div class="input-group input-group-lg">
			<span class="input-group-addon"><i class="fa fa-lock"></i></span>
			<input type="password" name="salasana" class="form-control" placeholder="Make up Password">	
        </div>
			<input type ="submit" name="action" value="send" class="float">
		</form>
 </div>
</html>	