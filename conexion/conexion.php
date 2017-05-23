<?php
	Class conexion{
		function RecuperarDatos(){
			$host="localhost";
			$user="root";
			$pw="";
			$db="octopus";

			$con = mysql_connect($host,$user,$pw) or die ("No se pudo conectar a la base de datos");
			mysql_select_db($db,$con) or die("no se encontro la base de datos");
			$query="SELECT * FROM cliente";
			$resultado =mysql_query($query);

			while ($fila = mysql_fetch_array($resultado)) {
				echo "$fila[Apellido_Materno]<br>";
				echo "$fila[Apellido_Paterno]<br>";
				echo "$fila[Correo]<br>";
				echo "$fila[Direccion]<br>";
				echo "$fila[ID_Clientes]<br>";
				echo "$fila[Nombre_Cliente]<br>";
				echo "$fila[Telefono]<br>";	
			}
		}
	}
?>