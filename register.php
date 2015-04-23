<?php session_start(); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="Content-Type"content="text/html; charset=utf-8" /> 
</head>
<body>

<?php
require 'connect.inc.php';
require 'core.inc.php';

include 'fejlec.php';
require 'regform.php';

?>

<?php
if(isset($_POST['nev'])&&isset($_POST['jelszo'])){
	$name = $_POST['teljesnev'];
	$username = $_POST['felhnev'];
	$password = $_POST['jelszo'];
	$email = $_POST['email'];
	$phonenumber = $_POST['telsz'];
	$tipus = 'user';
	$cim = $_POST['irsz'] . ' ' . $_POST['telepules'] . ', ' . $_POST['cim']; 

	if(!empty($name) && !empty($username)&& !empty ($password) && !empty ($email) && !empty ($phonenumber) && !empty ($cim)){
		$query = "INSERT INTO `felhasznalo` VALUES ('$username', '$fullName', '$password', 'normal', '$irsz', '$cim')";
		echo 'Regisztráció még nincs implementálva';
	}else{
		echo 'Kérjük töltse ki a mezőket!';
	}
}
?>

</body>
</html>