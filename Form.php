<html>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">	
	<script src="js/lunch_menu.js"></script>	
	
<header>  
        <nav class="navbar navbar-custom col-md-6" role="navigation">
			<ul class="lista nav nav-pills">  
				<li class="navbar-text pull-left welcome">
					<?php if(isset($_SESSION['CurrentUser'])){
					echo "Welcome  " . $_SESSION['CurrentUser'] . "";}?>
				</li>
				<li><a href="kokeiluja.php"> <i class="fa fa-home fa-1x" > </i> Home </a></li>
				<li><a href="login.php"> <i class="fa fa-sign-in fa-1x"> </i> Log in</a></li>
				<li><a href="#"> <i class="fa fa-gift fa-1x"> </i> </i> Donate</a></li> 
            </ul>  
            </nav>
	</header>
<section>
 <img class="col md-12 header-image" src="img/banneri.jpg" alt=""/>
</section>
	

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
			<a href='php/empty_form.php' class="span" >Register now!</a>
		</div>

 </div>
</html>	

