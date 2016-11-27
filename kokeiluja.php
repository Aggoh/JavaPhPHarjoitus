<html>
<head>
	<title>LounasMenu</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="img/icon.png">
	<script src="js/lunch_menu.js"></script>
	
</head>
<body onload="start()">
<?php include('navbar.php'); ?>
	<header>  
        <nav class="navbar navbar-custom col-md-6" role="navigation">
           <ul class="lista nav nav-pills">  
			<li class="navbar-text pull-left welcome">
			<?php if(isset($_SESSION['CurrentUser'])){
			echo "Welcome  " . $_SESSION['CurrentUser'] . "";	
			}?>
			</li>		
                <li><a href="indeex.php"> <i class="fa fa-home fa-1x" > </i> Home </a></li>
                <li><a href="login.php"> <i class="fa fa-sign-in fa-1x"> </i> Log in</a></li>
                <li><a href="#"> <i class="fa fa-gift fa-1x"> </i> </i> Donate</a></li> 
            </ul>  
            </nav>
	</header>
<section>
 <img class="col md-12 header-image" src="img/banneri.jpg" alt=""/>
</section>
    
	<section>
	<ul class="col-md-12 lista nav nav-tabs">
		<li role="presentation" class="vkp" id="1">
			<a onclick="navigate(1)" href="#">Maanantai<br><span id="maanantai"></span></a>
		</li>
		<li role="presentation" class="vkp" id="2">
			<a onclick="navigate(2)" href="#">Tiistai<br><span id="tiistai"></span></a>
		</li>
		<li role="presentation" class="vkp" id="3">
			<a onclick="navigate(3)" href="#">Keskiviikko<br><span id="keskiviikko"></span></a>
		</li>
		<li role="presentation" class="vkp" id="4">
			<a onclick="navigate(4)" href="#">Torstai<br><span id="torstai"></span></a>
		</li>
		<li role="presentation" class="vkp" id="5">
			<a onclick="navigate(5)" href="#">Perjantai<br><span id="perjantai"></span></a>
		</li>
	</ul>
		<div class="col-md-4">
			<h1>Aimo</h1>
            <img src="img/aimo.jpg" height="150" width="300" alt="" />			
			<table align="center" id="aimo">
			</table>
		</div>
		<div class="col-md-4">
			<h1>Bittipannu</h1>
            <img src="img/bitti.jpg" height="150" width="300" alt="" />
			<table align="center" id="bitti">
			</table>
		</div>
		<div class="col-md-4">
			<h1>Poliisilaitos</h1>
            <img src="img/poliisi.jpg" height="150" width="300" alt="" />
			<table align="center" id="poliisi">
			</table>
		</div>
	</section>
	<footer class="col-md-12">
		<p><i class="fa fa-copyright fa-1x"></i>Veeti Karttunen, Niki Liuhanen, Aaro Lyytinen</p>
	</footer>
</body>
<script src="js/jquery-3.1.1.js"></script>
<script src="js/bootstrap.js"> </script>
</html>