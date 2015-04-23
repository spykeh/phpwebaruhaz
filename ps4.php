<?php 
   session_start(); 
   require_once('connect.inc.php');	
   include_once('fejlec.php');
   

   
?>
<html>

<head>

<title>PS4</title>
<meta charset=utf-8" /> 
<link rel="stylesheet" type="text/css" href="style.css">
</head>	
<body>


<br>
<center><h1>PS4</h1></center>
<br>
<center>
<div class="row">
    <div class ="col">
        <div class="box"><a href="termekek.php?p=3&t=0">Gépek</a></div>
    </div>
    <div class ="col">
        <div class="box"><a href="termekek.php?p=3&t=1">Játékok</a></div>
    </div>
    <div class ="col">
        <div class="box"><a href="termekek.php?p=3&t=2">Tartozékok</a>	</div>
    </div>
</div>



</center>
</body>
</html>