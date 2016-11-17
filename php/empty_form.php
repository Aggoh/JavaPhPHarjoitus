<!DOCTYPE html>
<html>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="icon" type="image/png" href="../img/icon.png">
<header>  
        <nav class="navbar navbar-custom col-md-6" role="navigation">
           <ul class="lista nav nav-pills">  
                <li><a href="../indeex.php"> <i class="fa fa-home fa-1x" > </i> Home </a></li>
                <li><a href="../login.php"> <i class="fa fa-sign-in fa-1x"> </i> Log in</a></li>
                <li><a href="#"> <i class="fa fa-gift fa-1x"> </i> </i> Donate</a></li> 
            </ul>  
            </nav>
	</header>
<section>
 <img class="col md-12 header-image" src="../img/banneri.jpg" alt=""/>
</section>	

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