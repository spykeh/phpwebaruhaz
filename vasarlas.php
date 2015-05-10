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
<?php
$sikeres = false;
if(isset($_SESSION['user'])){
	$query = "SELECT F_ID FROM FELHASZNALO where FELHASZNALONEV = '" . $_SESSION['user']. "'";
	
	$stid = oci_parse($conn, $query);
	oci_execute($stid);
	if (oci_fetch($stid)){
		$userid = oci_result($stid, 'F_ID');
	}else{
		echo 'hiba';
	}
	foreach($_SESSION['kosar'] as $value){
		
		$termekid = $value;
		$mennyiseg = 1;
		$allapot = 'megrendelve';
		
		//setlocale(LC_ALL, 'hun_hun');
		//$datum = strftime('%d-%b-%Y');
		
		$datum = date('d-m-Y G:i:s');
		$sql = "INSERT INTO VASARLAS (F_ID, T_ID, DATUM, MENNYISEG, ALLAPOT)
		VALUES( :userid, :productid, to_date(:datum, 'DD-MM-YYYY HH24:MI:SS'), :mennyiseg, :allapot)";

		$compiled = oci_parse($conn, $sql);

		oci_bind_by_name($compiled, ':userid', $userid);
		oci_bind_by_name($compiled, ':productid', $value);
		oci_bind_by_name($compiled, ':datum', $datum);
		oci_bind_by_name($compiled, ':mennyiseg', $mennyiseg);
		oci_bind_by_name($compiled, ':allapot', $allapot);
		
		oci_execute($compiled);
		$sikeres = true;
	}
}else{
	echo '<h1 style="color:red;"></center>A rendeléshez be kell jelentkeznie!</center></h1>';
}

if($sikeres){
	echo '<h1 style="color:green;"><center>Sikeres rendelés!</center></h1>';
}
?>

</body>
</html>