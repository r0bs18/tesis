<?php
	session_start();
	require_once("Conexion.php");
	$_usuario = $_POST['Usuario'];
	$clave_usuario = $_POST['Contraseña'];

	$query = "SELECT * FROM `usuario` WHERE usuario.Alias_Usuario = '".$_usuario."' AND usuario.Clave_Usuario = '".$clave_usuario."'";

	$resultado = mysqli_query($conexion, $query);
	$contador = mysqli_num_rows ($resultado);
	if ($contador == 0) {
		echo "ERROR, USUARIO NO REGISTRADO"; 
	} else {
		$_SESSION ['login_status'] = true;
		header('Location: ../index.php');
/*		while ($fila = mysqli_fetch_array($resultado)) {
			$_SESSION ["usuario"] = $fila["Alias_Usuario"];
			$_SESSION ["permiso"] = $fila["Permisologia_IdPermisologia"];
		}
		header('Location: ../index.php');*/
		mysqli_close($conexion);
	}
?>