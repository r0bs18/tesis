<!DOCTYPE html>
<html lang="es">
	<?php include("includes/head.php") ?>
	<body>
		<div class="flex_dashboard">
			<?php
				session_start();
			  if(!(isset($_SESSION["login_status"]) == true)) {
					include("login.php");
			  } else {
			  	include("dashboard.php");
			  }
			?> 
		</div>
		<?php include("includes/footer_script.php") ?>
	</body>
	
</html>
