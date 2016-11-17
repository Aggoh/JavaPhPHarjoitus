<?php
session_start();  
require_once("/home/K7182/dbconfig/db-init.php");
require_once("/home/K7182/pwconfig/PasswordLib.phar");
$lib = new PasswordLib\PasswordLib();
include 'Form.php';
// username ja password muuttujat
$tunnus   = isset($_REQUEST['username']) ? $_REQUEST['username']:'';
$salasana = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';

$sql = "select salasana from kayttajat where tunnus = :f1";

$stmt = $db->prepare("$sql");
$stmt->execute(array(':f1' => $tunnus));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

// sisään kirjautuminen
if(isset($_POST['Login']))
{	
	if ($stmt->rowCount() == 1 AND $lib->verifyPasswordHash($salasana, $row['salasana'])){	
		$_SESSION['CurrentUser'] = $tunnus;  // luo sessio		
		header('Location: indeex.php');
        exit;			
		}
		else{
		ShowForm("Username/password not found!");	// Väärä käyttäjätunnus
		}	
}	
function ShowForm($message) // Funktio, joka näyttää kirjautumispohjan ja tarvittaessa viestin $message
{
	echo $message;
}		
?>