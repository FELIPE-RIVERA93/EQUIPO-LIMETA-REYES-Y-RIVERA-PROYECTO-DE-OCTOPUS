<!DOCTYPE html>
<html>
<head>
	<title>Recuperacion de datos</title>
</head>
<body>
	<div>
		<legend>
			<div>
				<?php
					include("conexion.php");
					$Con = new conexion();
					$Con -> RecuperarDatos();
				?>
			</div>
		</legend>
	</div>
</body>
</html>