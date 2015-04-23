<?php 
   session_start(); 
   require_once('connect.inc.php');	
   include_once('fejlec.php');
   

   
?>
<html>

<head>

<title>PC</title>
<meta charset=utf-8" /> 
<link rel="stylesheet" type="text/css" href="style.css">
</head>	
<body>


<br>
<center><h1>PC</h1></center>
<br>
<center>
<div class="row">
    <div class ="col">
        <div class="box"><a href="termekek.php?p=9&t=0">Gépek</a></div>
    </div>
    <div class ="col">
        <div class="box"><a href="termekek.php?p=9&t=1">Játékok</a></div>
    </div>
    <div class ="col">
        <div class="box"><a href="termekek.php?p=9&t=2">Tartozékok</a>	</div>
    </div>
</div>



</center>
</body>
</html>