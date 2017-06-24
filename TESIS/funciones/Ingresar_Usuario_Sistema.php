<?php 
require_Once("Conexion.php");

$_Cedula=$_POST["Cedula"];
$_Nombre=$_POST["Nombre"];
$_Apellido=$_POST["Apellido"];
$_Telefono=$_POST["Telefono"];
$_Correo=$_POST["Correo"];
$_Direccion=$_POST["Direccion"];
$_MSDS=$_POST["MSDS"];
$_CMVL=$_POST["CMVL"];
$_INSAI=$_POST["INSAI"];
$_Nivel=$_POST["Nivel"];
$_Alias=$_POST["Alias"];
$_Clave=$_POST["Clave"];

if ($_Nivel=='1') // MASTER
{
	if ($_Cedula == NULL||$_Nombre==NULL||$_Apellido==NULL||$_Telefono==NULL||$_Correo==NULL||$_Direccion==NULL||$_Alias==NULL||$_Clave==NULL) 
		{
			echo "Error, llene todos los campos";
			header('Location: ../assets/Alertas/Error.php');
		}
		else
		{
			$query = "INSERT INTO `usuario`(`idUsuario`, `CI_Usuario`, `Nombre_Usu`, `Apellido_Usu`, `Telef_Usu`, `Email`, `Localidad`, `MSDS`, `CMVL`, `INSAI`, `Nivel_Permisologia`, `Alias_Usuario`, `Clave_Usuario`) VALUES ('NULL', '".$_Cedula."', '".$_Nombre."', '".$_Apellido."', '".$_Telefono."', '".$_Correo."', '".$_Direccion."',NULL,NULL,NULL,'".$_Nivel."','".$_Alias."', '".$_Clave."')";
			$resultado = mysqli_query($conexion,$query);
			
			if ($resultado) 
			{
				mysqli_close($conexion);
				header('Location: ../assets/Alertas/AlertaIngresoPaciente.php');
			}		
		}	
		
}
elseif ($_Nivel=='2') // DOCTOR
{
	if ($_Cedula==NULL||$_Nombre==NULL||$_Apellido==NULL||$_Telefono==NULL||$_Correo==NULL||$_Direccion==NULL||$_Alias==NULL||$_Clave==NULL) 
		{
			echo "Error, llene todos los campos";
			header('Location: ../assets/Alertas/Error.php');
		}
		else
		{
			if ($_MSDS == NULL || $_CMVL == NULL)
			{
				header('Location: ../assets/Alertas/Error_MSDS_CMVL.php');
			}
			if (is_null($_INSAI)) 
			{
				$_INSAI="NULL";
			}

			$query = "INSERT INTO `usuario`(`idUsuario`, `CI_Usuario`, `Nombre_Usu`, `Apellido_Usu`, `Telef_Usu`, `Email`, `Localidad`, `MSDS`, `CMVL`, `INSAI`, `Nivel_Permisologia`, `Alias_Usuario`, `Clave_Usuario`) VALUES ('NULL', '".$_Cedula."', '".$_Nombre."', '".$_Apellido."', '".$_Telefono."', '".$_Correo."', '".$_Direccion."','".$_MSDS."','".$_CMVL."','".$_INSAI."','".$_Nivel."','".$_Alias."', '".$_Clave."')";
			$resultado = mysqli_query($conexion,$query);
			if ($resultado) 
			{
				mysqli_close($conexion);
				header('Location: ../assets/Alertas/AlertaIngresoPaciente.php');
			}
		}
		
}
elseif ($_Nivel=='3') // ADMINISTRATIVO
{
	if ($_Cedula == NULL||$_Nombre==NULL||$_Apellido==NULL||$_Telefono==NULL||$_Correo==NULL||$_Direccion==NULL||$_Alias==NULL||$_Clave==NULL) 
		{
			echo "Error, llene todos los campos";
			header('Location: ../assets/Alertas/Error.php');
		}
		else
		{
			$query = "INSERT INTO `usuario`(`idUsuario`, `CI_Usuario`, `Nombre_Usu`, `Apellido_Usu`, `Telef_Usu`, `Email`, `Localidad`, `MSDS`, `CMVL`, `INSAI`, `Nivel_Permisologia`, `Alias_Usuario`, `Clave_Usuario`) VALUES ('NULL', '".$_Cedula."', '".$_Nombre."', '".$_Apellido."', '".$_Telefono."', '".$_Correo."', '".$_Direccion."',NULL,NULL,NULL,'".$_Nivel."','".$_Alias."', '".$_Clave."')";
			$resultado = mysqli_query($conexion,$query);
			
			if ($resultado) 
			{
				mysqli_close($conexion);
				header('Location: ../assets/Alertas/AlertaIngresoPaciente.php');
			}		
		}	
		
}
elseif ($_Nivel=='4') // USUARIO VISITANTE
{
	if ($_Cedula == NULL||$_Nombre==NULL||$_Apellido==NULL||$_Telefono==NULL||$_Correo==NULL||$_Direccion==NULL||$_Alias==NULL||$_Clave==NULL) 
		{
			echo "Error, llene todos los campos";
			header('Location: ../assets/Alertas/Error.php');
		}
		else
		{
			$query = "INSERT INTO `usuario`(`idUsuario`, `CI_Usuario`, `Nombre_Usu`, `Apellido_Usu`, `Telef_Usu`, `Email`, `Localidad`, `MSDS`, `CMVL`, `INSAI`, `Nivel_Permisologia`, `Alias_Usuario`, `Clave_Usuario`) VALUES ('NULL', '".$_Cedula."', '".$_Nombre."', '".$_Apellido."', '".$_Telefono."', '".$_Correo."','".$_Direccion."',NULL,NULL,NULL,'".$_Nivel."','". $_Alias."', '".$_Clave."')";
			$resultado = mysqli_query($conexion,$query);
			
			
			if ($resultado) 
			{
				mysqli_close($conexion);
				header('Location: ../assets/Alertas/AlertaIngresoPaciente.php');
			}		
		}	
		
}
else
{
	echo "Error, llene todos los campos";
	header('Location: ../assets/Alertas/Error.php');
}
?>


