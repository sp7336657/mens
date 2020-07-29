<?php 
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: index.php");
	exit;
}

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>mensajeria</title>
	<link rel="stylesheet" href="css/registro.css">
</head>
<body>
	<div class="ctn-welcome">
		<img src="img/slider13.jpg" alt="" class="logo-welcome">
		<h1 class="title-welcome">bienvenido<b>logrado</b></h1>
		<a href="cerrar-sesion.php" class="close-sesion">cerrar sesion</a>
	</div>
</body>
</html>