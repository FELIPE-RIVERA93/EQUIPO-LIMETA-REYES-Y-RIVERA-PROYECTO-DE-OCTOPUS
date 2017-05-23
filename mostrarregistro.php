<?php

//conexion a la base de datos
$servidor="localhost";
$basededatos="octopus";
$usuario="root";
$contrasenia="root";

$conexion = new mysqli($servidor,$usuario, $contrasenia , $basededatos);
if($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_erno().")".$conexion -> mysqli_connect_error());
}


//consulta a la base de datos
$cliente = "SELECT * FROM cliente";
$rescliente = $conexion ->query($cliente);


?>



<!DOCTYPE html>
<html>
<head>
	<title>Registro de la tabla cliente</title>
	<meta http-equiv="Content-Type" content = "text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<header>
	<center><h2>Consulta Datos de Tabla Clientes</h2></center>
		
	</header>
	<section>
		<table class = "table">
			<tr>
				<th>ID Cliente</th>
				<th>Nombre Cliente</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Direcci&oacute;n</th>
				<th>Telefono</th>
				<th>Correo</th>
			</tr>

			<?php
			while($registrocliente = $rescliente->fetch_array(MYSQLI_BOTH))
			{
				echo'<tr>
						<td>'.$registrocliente['ID_Clientes'].'</td>
						<td>'.$registrocliente['Nombre_Cliente'].'</td>
						<td>'.$registrocliente['Apellido_Paterno'].'</td>
						<td>'.$registrocliente['Apellido_Materno'].'</td>
						<td>'.$registrocliente['Direccion'].'</td>
						<td>'.$registrocliente['Telefono'].'</td>
						<td>'.$registrocliente['Correo'].'</td>
					</tr>';


			}

			?>
			
		</table>






	</section>






</body>
</html>