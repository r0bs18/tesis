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
                    <a class="navbar-brand" href="#">Perfil del Usuario</a>
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
                                <h4 class="title">Perfil del Usuario</h4>
                            </div>
                            <div class="content">
                                <form action="funciones/Ingresar_Usuario_Sistema.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cedula</label>
                                                <input type="text" class="form-control border-input" placeholder="Cedula" name="Cedula" minlength="7" maxlength="8" required >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control border-input" placeholder="Nombre" name="Nombre" minlength="3" maxlength="40" required >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Apellido</label>
                                                <input type="text" class="form-control border-input" placeholder="Apellido" name="Apellido" minlength="5" maxlength="50" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telefono</label>
                                                <input type="text" class="form-control border-input" placeholder="Telefono" name="Telefono" minlength="10" maxlength="12" required >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Correo</label>
                                                <input type="Email" class="form-control border-input" placeholder="Correo" name="Correo" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Direccion</label>
                                                <input type="text" class="form-control border-input" placeholder="Direccion" name="Direccion" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>MSDS</label>
                                                <input type="text" class="form-control border-input" placeholder="MSDS" name="MSDS" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>CMVL</label>
                                                <input type="text" class="form-control border-input" placeholder="CMVL" name="CMVL">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>INSAI</label>
                                                <input type="text" class="form-control border-input" placeholder="INSAI" name="INSAI" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        
                                            <div class="col-md-4" >
                                                <div class="form-group">
                                                    <Label>Nivel de Usuario</Label>
                                                    <SELECT class="form-control border-input" name="Nivel" >
                                                        <OPTION value="1">Master</OPTION>
                                                        <OPTION value="2">Doctor</OPTION>
                                                        <OPTION value="3">Administrativo</OPTION>
                                                        <OPTION value="4">Usuario Visitante</OPTION>
                                                    </SELECT>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4" >
                                                    <div class="form-group">
                                                        <Label>Alias del Usuario</Label>
                                                        <input type="text" class="form-control border-input" placeholder="Alias Usuario" name="Alias" required >
                                                    </div>
                                                </div>
                                                <div class="col-md-4" >
                                                    <div class="form-group">
                                                        <Label>Clave</Label>
                                                        <input type="password" class="form-control border-input" placeholder="Contraseña" name="Clave" required>
                                                    </div>
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