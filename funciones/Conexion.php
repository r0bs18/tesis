<?php
	$host_db = "localhost";
	$usuario_db = "root";
	$clave_db = "";
	$nombre_db = "pruebasav";
	$conexion = mysqli_connect($host_db, $usuario_db, $clave_db);
	$database = mysqli_select_db($conexion,$nombre_db);
	mysqli_query($conexion, "SET NAMES 'uft8'");	

?>