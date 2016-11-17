<html>
<?php
if(isset($_SESSION['CurrentUser'])){
	include 'index_secure.php';
	}
	else{
	header('Location: kokeiluja.php');
		}	
?>
</html>


