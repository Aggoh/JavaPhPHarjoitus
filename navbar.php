<html>
<?php
session_start();
if(isset($_SESSION['CurrentUser'])){
	$output = <<<OUTPUTEND
		<header>  
			<nav class="navbar navbar-custom col-md-6" role="navigation">
				<ul class="lista nav nav-pills"> 
					<li class="navbar-text pull-left welcome">
					Welcome  {$_SESSION['CurrentUser']}	</li>	
					<li><a href="./indeex.php"> <i class="fa fa-home fa-1x" > </i> Home </a></li>
					<li><a href="./profile.php"> <i class="fa fa-user fa-1x"> </i> Profile</a></li>
					<li><a href="./php/logout.php"> <i class="fa fa-sign-out fa-1x"> </i> </i> Log Out</a></li> 
				</ul>  
            </nav>
		</header>
		<section>
			<img class="col md-12 header-image" src="./img/banneri.jpg" alt=""/>
		</section>
OUTPUTEND;
	echo $output;
}
else{
	$output = <<<OUTPUTEND
		<header>  
			<nav class="navbar navbar-custom col-md-6" role="navigation">
				<ul class="lista nav nav-pills">  
					<li class="navbar-text pull-left welcome"></li>
					<li><a href="./indeex.php"> <i class="fa fa-home fa-1x" > </i> Home </a></li>
					<li><a href="./login.php"> <i class="fa fa-sign-in fa-1x"> </i> Log in</a></li>
					<li><a href="#"> <i class="fa fa-gift fa-1x"> </i> </i> Donate</a></li> 
				</ul>  
            </nav>
		</header>
		<section>
			<img class="col md-12 header-image" src="./img/banneri.jpg" alt=""/>
		</section>
OUTPUTEND;
	echo $output;
}	
?>
</html>


