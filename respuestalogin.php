<?php
error_reporting(E_ALL);

$usuario1 = utf8_decode($_POST["usuario"]);
$contrasena1 = utf8_decode($_POST["contrasena"]);

//VARIABLES PARA CONEXION CON BASE DE DATOS
$servidor = "localhost";
$basedatos = "prueba";
$usuario = "root";
$contraseña = "root";

try{
	$conexionMysqli = new mysqli($servidor,
		$usuario,$contraseña,$basedatos);
	if ($conexionMysqli-> connect_errno){
		echo "Fallo la conexion con MySQL:
		(" . $conexionMysqli-> connect_errno .")
		" . $conexionMysqli-> connect_error;
	} else{
		//echo utf8_decode("Conexion Habilitada");
		//usuario es tabla
		//el error esta en la sintaxis
		$query = "Insert into usuario(usuario, contrasena)values
		('".$usuario1."', '".$contrasena1."')";

		//echo $query;
		$resultadoOperacion = $conexionMysqli->query($query);
		if($resultadoOperacion){
			//echo "Operacion realizada con exito";
			?>
			   <div class="text-sucess text-center">
			      <p>Ok</p>
			   </div>
			<?php
		}else{
			//echo "Fallo en la operacion ejecutada";
			?>
			   <div class="text-danger text-center">
			      <p>Operaci&oacute;n <b>NO</b> Realizada</p>
			   </div>
			<?php
		}
	}}
	catch (Exeption $e){
		echo $e;	
	
}