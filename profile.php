<?php
session_start();

?>
<!DOCTYPE html>
<html>
	<title>Profile</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="img/icon.png">

<body>
	<header>  
        <nav class="navbar navbar-custom col-md-6" role="navigation">
           <ul class="lista nav nav-pills"> 
				<li class="navbar-text pull-left welcome"><?php echo "Welcome  " . $_SESSION['CurrentUser'] . ""; ?></li>
                <li><a href="indeex.php"> <i class="fa fa-home fa-1x" > </i> Home </a></li>
                <li><a href="profile.php"> <i class="fa fa-user fa-1x"> </i> Profile</a></li>
                <li><a href="logout.php"> <i class="fa fa-sign-out fa-1x"> </i> </i> Log Out</a></li> 
            </ul>  
            </nav>
	</header>
<section>
 <img class="col md-12 header-image" src="img/banneri.jpg" alt=""/>
</section>

<?php

    require_once("/home/K7182/dbconfig/db-init.php");
    echo "<pre>tunnus: {$_SESSION['CurrentUser']}</pre>";
    $sql = "SELECT * FROM kayttajat WHERE tunnus='{$_SESSION['CurrentUser']}'";
    $stmt = $db->query("$sql");         
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "{$row['tunnus']}: {$row['password']}<br>\n";
}


?>
<div class="dropdown">
  <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown trigger
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dLabel">
    ...
  </ul>
</div>

</body>
<script src="js/jquery-3.1.1.js"></script>
<script src="js/bootstrap.js"> </script>
</html>
