<?php
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!--<meta http-equiv="refresh" content="3;URL=http://localhost/DMI/PaginaPrincipal.php"/>-->
<title>Alerta</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
			<body style="background-color: #09192A">
				<div class="modal fade" id="Alerta" data-backdrop="static" data-keyboard="false">
							<div class="modal-dialog">
								<div class="modal-content">
									<!-- Cabezera de La Ventan-->
									<div class="modal-header">
										<!--<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
										<h4 class="modal-tittle">DIAGNOSTICO POSIBLE</h4>
									</div>

									<!-- Cabezera de La Ventan-->
									<div class="modal-body">
										<form class="form-horizontal" action="../../PaginaPrincipal.php" method="post" target="">
											<div class="container-fluid">
											<div class="form-group">
											<label for="Usuario" class="col-md-12 control-label">
											<?php
												$diagnosticosposibles = $_SESSION["diagnosticosposibles"];
												for ($y=0; $y <=count($diagnosticosposibles) ; $y++) 
												{ 
												echo $diagnosticosposibles[$y]."|";	
												}
											?>
											</label>
											<span class="label label-success">PORFAVOR HAGA EXAMEN DE CITOLOGIA/BIOPSIA E INGRESE SU RESULTADO...</span>
											</div>
											</div>

											<div class="form-group text-center">
												<div class="col-md-2 col-md-offset-2">
													<button target="outblank" class="btn btn-success" name="Registrarse">ACEPTAR</button>
												</div>
											</div>
										</form>
									</div>
								</div>	
							</div>
					</div>
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function()
		{
		$("#Alerta").modal("show");
		});
	</script>
</body>
</html>