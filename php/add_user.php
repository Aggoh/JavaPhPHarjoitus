<?php
require_once('/home/K7182/dbconfig/db-init.php');
require_once("/home/K7182/pwconfig/PasswordLib.phar");
$lib = new PasswordLib\PasswordLib();

$tunnus   = isset($_REQUEST['tunnus'])   ? $_REQUEST['tunnus']   : '';
$salasana = isset($_REQUEST['salasana']) ? $_REQUEST['salasana'] : '';
$sql = "SELECT tunnus FROM kayttajat WHERE tunnus =?";
$stmt = $db->prepare("$sql");
$stmt->execute(array($tunnus));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$hash = $lib->createPasswordHash($salasana,  '$2a$', array('cost' => 12));
 
$sql = <<<SQLEND
INSERT INTO kayttajat(tunnus, salasana)
VALUES (:f1, :f2)
SQLEND;


if ($row != 0 ){
    echo '<script language="javascript">';
	echo 'alert("Username taken, choose another one.")';
	echo '</script>';
	include 'empty_form.php';
}
else{ 
$stmt = $db->prepare($sql);
$stmt->execute(array(
':f1' => $tunnus, 
':f2' => $hash));
echo $stmt->rowCount() . "Succesfully created!";	

header('Location: ../indeex.php');
}
?>