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

<div id = "imagenfondo" class = "modal-header">
	<h4 id = "titulo"><b>Consulta</b></h4>
	<div class = "modal-body">


	<div class = "container">
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
		




	</div>

	
		
	</div>
	<div class = "modal-footer; text-center">
		<button type = "btn btn-primary"
				class="btn btn-primary"
				onclick = "cerrarconsulta()" style="background:blue;">
				<span class = "glyphycon glyphycon-remove"></span>
				&nbsp;&nbsp;Cerrar
		</button>

	</div>
</div>
		







