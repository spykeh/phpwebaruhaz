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
?>
<div id="regform">
<?php

require 'regform.php';


if(isset($_POST['teljesnev'])&&isset($_POST['jelszo'])){
	$name = $_POST['teljesnev'];
	$username = $_POST['felhnev'];
	$password = $_POST['jelszo'];
	$email = $_POST['email'];
	$phonenumber = $_POST['telsz'];
	$tipus = 'user';
	$cim = $_POST['irsz'] . ', ' . $_POST['telepules'] . ', ' . $_POST['cim']; 

	if(!empty($name) && !empty($username)&& !empty ($password) && !empty ($email) && !empty ($phonenumber) && !empty ($cim)){
		$sql = 'INSERT INTO FELHASZNALO (NEV, FELHASZNALONEV, JELSZO, SZALLITASI_CIM, SZAMLAZASI_CIM, TELEFONSZAM, EMAIL, TIPUS) '.
		   'VALUES( :name, :username, :pwd, :szallcim, :szamcim, :phonenumber, :email, :tipus)';

		$compiled = oci_parse($conn, $sql);

		oci_bind_by_name($compiled, ':name', $name);
		oci_bind_by_name($compiled, ':username', $username);
		oci_bind_by_name($compiled, ':pwd', $password);
		oci_bind_by_name($compiled, ':szallcim', $cim);
		oci_bind_by_name($compiled, ':szamcim', $cim);
		oci_bind_by_name($compiled, ':phonenumber', $phonenumber);
		oci_bind_by_name($compiled, ':email', $email);
		oci_bind_by_name($compiled, ':tipus', $tipus);
		
		oci_execute($compiled);
		echo 'Sikeres regisztráció';
	}else{
		echo 'Kérjük töltse ki a mezőket!';
	}
	


	
}

?>
</div>

</body>
</html>