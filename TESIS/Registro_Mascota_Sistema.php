<?php
session_start();
if (is_null($_SESSION ["usuario"]))

    {
    header('Location: http://localhost/TESIS');
    }
    else
    {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>S.A.V</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<?php 
require_Once("Pages/Menu.html")
?>
    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Perfil de la Mascota</a>
                </div>
<?php 
require_Once("Pages/Botonera_Superior_Derecha.html")
?>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Perfil de la Mascota</h4>
                            </div>
                            <div class="content">
                                <form action="funciones/Ingresar_Mascota_Sistema.php" method="POST">
                                    <div class="row">
                                       <div class="col-md-4">
                                             <div class="form-group">
                                                <label>Número de RFID </label>
                                                <input type="text" class="form-control border-input" placeholder="Número de RFID" name="" maxlength="12" required >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group">
                                                <label>Cédula del Propietario</label>
                                                <input type="text" class="form-control border-input" placeholder="Cedula" name="Cedula" minlength="7" maxlength="8" required >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control border-input" placeholder="Nombre de la Mascota" name="Nombre" minlength="2" maxlength="20" required >
                                            </div>
                                        </div>
                                    </div>


                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sexo</label>
                                                    <SELECT class="form-control border-input" name="Nivel" >
                                                        <OPTION value="1">Macho</OPTION>
                                                        <OPTION value="2">Hembra</OPTION>
                                                    </SELECT>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Color</label>
                                                <input type="text" class="form-control border-input" placeholder="Color de la Mascota" name="Color" minlength="4" maxlength="45" required >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Fecha de Nacimiento</label>
                                                <input  type="date" class="form-control border-input">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Direccion</label>
                                                <input type="text" class="form-control border-input" placeholder="Direccion del Propietario" name="Direccion" required>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        
                                        <div class="col-md-4" >
                                                <div class="form-group">
                                                 <label>Especie</label>
                                                <SELECT class="form-control border-input" name="Especie">
                                                <?php
                                                    $query =" SELECT * FROM 'especies'";
                                                    $resultado = mysqli_query($conexion,$query);
                                                    while ($fila=mysqli_fetch_array($resultado))
                                                    {
                                                     echo "<OPTION value=".fila["idEspecie"].">".fila["Nombre_Especie"]."</OPTION>";
                                                    }
                                                ?>
                                                </SELECT>
                                                </div>
                                        </div>


                                        <div class="col-md-4" >
                                                <div class="form-group">
                                                  <label>Razas</label>
                                                <SELECT class="form-control border-input" name="Razas">
                                                <?php
                                                    $query =" SELECT `idRazas`, `Nombre_Raza`, `Descripcion` FROM `razas` WHERE `Especies_idEspecies`='1'";
                                                    $resultado = mysqli_query($conexion,$query);
                                                    while ($fila=mysqli_fetch_array($resultado))
                                                    {
                                                      echo "<OPTION value=".fila["idEspecie"].">".fila["Nombre_Especie"]."</OPTION>";
                                                    }
                                                ?>
                                                </SELECT>
                                                </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>MicroChip</label>
                                                <input type="text" class="form-control border-input" placeholder="Número de MicroChip" name="MicroChip" maxlength="50">
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div class="row">
                                    </div>   
                                             
                                               
                                    <div class="row">
                                        
                                            <div class="form-group">
                                            </div>
                                        
                                    </div>
                                   
                                    <div>
                                    <div class="text-center">
                                           <button type="submit" class="btn btn-info btn-fill btn-wd">Registrar</button>

                                    </div>
                                    </div>

                                    <div class="clearfix">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>



    </div>
     <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                          
                             <a>Sistema Administrativo Veterinario</a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by  <a>COLOCAR ALGO ACA</a>
                </div>
            </div>
        </footer>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
<?php   
    }
?>