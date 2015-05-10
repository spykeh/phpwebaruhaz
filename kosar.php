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

<center><h1>Kosár áttekintése</h1></center>

<?php
if(isset($_SESSION['kosar'])){
	$osszesen = 0;
	echo '<div id="termeklista">' . "\n";
	foreach($_SESSION['kosar'] as $value){
		$query = 'SELECT * FROM TERMEKLISTA where T_ID = ' . $value;

		$stid = oci_parse($conn, $query);
		oci_execute($stid);
		

		if (oci_fetch($stid)) 
			$osszesen = $osszesen + oci_result($stid, 'AR');{
			echo '<div class="termekdata">'. "\n";
				echo '<div class="termekcol">'. "\n";
				echo '<div class="termekbox">'. "\n";
					echo '<div class="termektitle">' . oci_result($stid, 'NEV') . '</div>'. "\n";
						
				
			echo '</div></div>'. "\n";
			echo '<div class="termekcol">'. "\n";
					echo '<div class="termekbox">'. "\n";
					echo 'Ár: <div class="termekar">' . oci_result($stid, 'AR') . ' Ft<br></div>'. "\n";
			  

			echo '</div></div>'. "\n";
			echo "</div>\n";
		}
	}
	echo '<p style="text-align:right;">Összesen: ' . $osszesen . ' Ft</p>';

	echo "</div>\n";
}else{
	echo '<center>Üres kosár!</center>';
}

?>

<div id=kosargombok>
<p style="text-align:left;">
<div class="torles">
<a href="kosartorles.php">
Kosár törlése</a></div>
<span style="float:right;"><div class="tovabb"><a href="vasarlas.php">Rendelés</div></a></span>
</p>
</div>