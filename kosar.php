<?php
   session_start(); 
   require_once('connect.inc.php');	
   include_once('fejlec.php');
   
?>
<html>

<head>

<title>Kosár tartalma</title>
<meta charset=utf-8" /> 
<link rel="stylesheet" type="text/css" href="style.css">
</head>	
<body>



<?php
foreach($_SESSION['kosar'] as $value)
	$query = 'SELECT * FROM TERMEKLISTA where T_ID = ' . $value;



$stid = oci_parse($conn, $query);
oci_execute($stid);


while (oci_fetch($stid)) {
 echo oci_result($stid, 'NEV'); 
}
?>