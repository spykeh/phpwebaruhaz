<?php
	session_start();
	if(empty($_SESSION['kosar'])){
		$_SESSION['kosar'] = array();
	}
	
	array_push($_SESSION['kosar'], $_GET['id']);
	header('Location: index.php'); 
	
	
?>