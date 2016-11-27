<?php
require_once('arviointi.php');
?>
<html>
<head>
	<script src="js/lunch_menu.js"></script>
	
</head>
<body onload="start()">
<?php include('navbar.php');?>
	<section>
	<ul class="col-md-12 lista nav nav-tabs">
		<li role="presentation" class="vkp" id="1">
			<a onclick="navigate(1)" href="#/">Maanantai<br><span id="maanantai"></span></a>
		</li>
		<li role="presentation" class="vkp" id="2">
			<a onclick="navigate(2)" href="#/">Tiistai<br><span id="tiistai"></span></a>
		</li>
		<li role="presentation" class="vkp" id="3">
			<a onclick="navigate(3)" href="#/">Keskiviikko<br><span id="keskiviikko"></span></a>
		</li>
		<li role="presentation" class="vkp" id="4">
			<a onclick="navigate(4)" href="#/">Torstai<br><span id="torstai"></span></a>
		</li>
		<li role="presentation" class="vkp" id="5">
			<a onclick="navigate(5)" href="#/">Perjantai<br><span id="perjantai"></span></a>
		</li>
	</ul>
		<div class="col-md-4 col-xs-6 col-sm-4">
			<h1>Aimo</h1>
            <img src="img/aimo.jpg" height="150" width="300" alt="" /><br>			
			<a class="" data-toggle="collapse" data-parent="#accordion" href="#a-rate">Arvostele!</a> <br>
			<span id="arvostelut">rating</span> <br>
			<div class="panel-collapse collapse" id="a-rate">
				<?php AsetaRavintola("aimo");?>
			</div>
			<table align="center" id="aimo">
			</table>
		</div>
		<div class="col-md-4 col-xs-6 col-sm-4">
			<h1>Bittipannu</h1>
            <img src="img/bitti.jpg" height="150" width="300" alt="" />  <br>
			<a class="" data-toggle="collapse" data-parent="#accordion" href="#b-rate">Arvostele!</a> <br>
			<span id="arvostelut">rating</span>  <br>
			<div class="collapse" id="b-rate">
				<?php AsetaRavintola("bitti");?>
			</div>	
			<table align="center" id="bitti">
			</table>
		</div>
		<div class="col-md-4 col-xs-6 col-sm-4">
			<h1>Poliisilaitos</h1>
            <img src="img/poliisi.jpg" height="150" width="300" alt="" />  <br>
			<a class="" data-toggle="collapse" data-parent="#accordion" href="#p-rate">Arvostele!</a> <br>
			<span id="arvostelut">rating</span>  <br>
			<div class="collapse" id="p-rate">
				<?php AsetaRavintola("poliisi");?>
			</div>	
			<table align="center" id="poliisi">
			</table>
		</div>
		
	</section>
	<footer class="col-md-12">
		<p><i class="fa fa-copyright fa-1x"></i>2016 Veeti Karttunen, Niki Liuhanen, Aaro Lyytinen</p>
	</footer>
</body>
<script src="js/jquery-3.1.1.js"></script>
<script src="js/bootstrap.js"> </script>
</html>