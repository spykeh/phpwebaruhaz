<?php 
   session_start(); 
   require_once('connect.inc.php');	
   include_once('fejlec.php');
   

   
?>
<html>

<head>

<title>Játekok</title>
<meta charset=utf-8" /> 
<link rel="stylesheet" type="text/css" href="style.css">
</head>	
<body>



<?php


if(isset($_GET['t'])){
	$tipus = $_GET['t'];
}
if(isset($_GET['p'])){
	$platform = $_GET['p'];
}


if(isset($_GET['p']) && isset($_GET['t'])){
	switch ($tipus) {
		case 0:
			$tipusText = "Gépek";
			break;
		case 1:
			$tipusText = "Játékok";
			break;
		case 2:
			$tipusText = "Tartozékok";
			break;
	}
	$querytext = 'SELECT * FROM TERMEKLISTA where PLATFORM = ' . $platform . ' AND K_ID = ' . $tipus;
}else{
	echo 'hiba';
}

$query2 = 'SELECT NEV FROM PLATFORM where P_ID = ' . $platform;

$stid = oci_parse($conn, $query2);
oci_execute($stid);


while (oci_fetch($stid)) {
 $platformText = oci_result($stid, 'NEV'); 
}
?>


<br>
<center><h1><?php echo $platformText . ' ' .$tipusText;?></h1></center>
<br>

<?php
$stid = oci_parse($conn, $querytext);
oci_execute($stid);


echo '<div id="termeklista">' . "\n";	
while (oci_fetch($stid)) {
	echo '<div class="termekdata">'. "\n";
		echo '<div class="termekcol">'. "\n";
		echo '<div class="termekbox">'. "\n";
			echo '<div class="termektitle">' . oci_result($stid, 'NEV') . '</div>'. "\n";
			echo 'Ár: <div class="termekar">' . oci_result($stid, 'AR') . ' Ft<br></div>'. "\n";
			$dbdate = strtotime( oci_result($stid, 'MEGJELENES') );
			$megjelenes = date( 'Y-m-d', $dbdate );
			echo 'Megjelenés: <div class="termekmegjelenes">' . $megjelenes . '<br></div>'. "\n";
			$keszleten = oci_result($stid, 'KESZLET');
			if($keszleten > 0){
				echo 'Készleten';
				echo '</div></div>'. "\n";
				echo '<div class="termekcol">'. "\n";
				echo '<div class="termekbox">'. "\n";
				echo '<div id="kosarba"><a href="kosarba.php?id=' . oci_result($stid, 'T_ID') . '">Kosárba</a></div>';
			}else{
				echo '<i>Nincs készleten</i>';
			}
		
		echo '</div></div>'. "\n";
	
      

	echo "</div>\n";
}
echo "</div>\n";

?>
<center>




</center>
</body>
</html>