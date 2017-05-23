function capturaDatosCliente(){
	var url ="respuestacliente.php";
	$.post(url,{matricula:$("#txtmatricula").val(),
				nombre:$("#txtnombre").val(),
				apellido1:$("#txtpaterno").val(),
				apellido2:$("#txtmaterno").val(),
				direccion:$("#txtdireccion").val(),
				telefono:$("#txttelefono").val(),
				correo:$("#txtcorreo").val()},


			function(data){
				$("#respuesta").html(data);
			
			});
}