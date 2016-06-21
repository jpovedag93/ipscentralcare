<?php
	require('conexion.php');

	$us = trim($_POST['luser']);
	$ps = trim($_POST['lpass']);

	$sqlc = "SELECT * FROM Usuarios WHERE Usuario = '$us' AND  Contrasena = '$ps'" ;
	echo "$sqlc";

?>