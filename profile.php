<?php
require_once("/home/K7182/dbconfig/db-init.php");
//if (isset)

?>
<!DOCTYPE html>
<html>
	<title>Profile</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/png" href="img/icon.png">

<body>
<?php include('navbar.php'); ?>
	

<?php
    echo "<pre>tunnus: {$_SESSION['CurrentUser']}</pre>";
    $sql = "SELECT * FROM kayttajat WHERE tunnus='{$_SESSION['CurrentUser']}'";
    $stmt = $db->query("$sql");         
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "{$row['tunnus']}<br>\n";
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
