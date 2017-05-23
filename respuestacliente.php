<?php

error_reporting(E_ALL);
$matricula = $_POST["matricula"];
$nombre=utf8_decode($_POST["nombre"]);
$apellido1=utf8_decode($_POST["apellido1"]);
$apellido2=utf8_decode($_POST["apellido2"]);
$direccion=utf8_decode($_POST["direccion"]);
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];


$servidor="localhost";
$basededatos="octopus";
$usuario="root";
$contrasenia="root";
	try {
			$conexionMysqli = new mysqli($servidor,$usuario, $contrasenia , $basededatos);
			if ($conexionMysqli-> connect_errno) {
				echo "Fallo la conexión con MYSQL:
				(" . $conexionMysqli -> connect_errno . ")
				" . $conexionMysqli -> connect_error;
			}
			else{

				$query = "Insert into cliente (Apellido_Paterno,Apellido_Materno, Correo, Direccion,ID_Clientes, Nombre_Cliente, Telefono) 
					values ('".$apellido1."','".$apellido2."','".$correo."','".$direccion."',".$matricula.",'".$nombre."','".$telefono."')";

				//echo $query;
				$resultadooperacion = $conexionMysqli -> query($query);
				if ($resultadooperacion) {
					?>
						<div class="text-success text-center">
							<p>Datos enviados Correctamente</p>
						</div>
					<?php
				} else{
					?>
						<div class="text-danger text-center">
							<p>Los Datos <b>NO</b>fueron enviados</p>
						</div>
					<?php
				}
			}
		}	 
		catch (Exception $e) 
		{
			echo $e;
		}