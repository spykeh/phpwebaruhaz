<?php session_start(); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="Content-Type"content="text/html; charset=utf-8" /> 
</head>
<body>
<div id="content">
<?php
require 'connect.inc.php';
require 'core.inc.php';

include 'fejlec.php';
require 'loginform.php';

?>

<?php
if(isset($_POST['nev'])&&isset($_POST['jelszo'])){
	$username = $_POST['felhnev'];
	$password = $_POST['jelszo'];

	if(!empty($username)&& !empty ($password) ){
		echo 'Belépés még nincs implementálva';
	}else{
		echo 'Kérjük töltse ki a mezőket!';
	}
}
?>
</div>
</body>
</html>