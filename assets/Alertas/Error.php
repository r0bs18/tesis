<?php

	session_start();

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta http-equiv="refresh" content="3;URL=http://localhost/TESIS/dashboard.php"/>

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

										<h4 class="modal-tittle">Usted No ha Ingresado</h4>

									</div>



									<!-- Cabezera de La Ventan-->

									<div class="modal-body">

										<form class="form-horizontal" action="../../PaginaPrincipal.php" method="post" target="">

											<div class="container-fluid">

											<div class="form-group">

												<span class="label label-danger">ERROR, No ha podido acceder al sistema</span>

											</div>

											</div>



											<div class="form-group text-center">

												<!--<div class="col-md-2 col-md-offset-2">

													<button target="outblank" class="btn btn-success" name="Registrarse">ACEPTAR</button>

												</div>-->

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