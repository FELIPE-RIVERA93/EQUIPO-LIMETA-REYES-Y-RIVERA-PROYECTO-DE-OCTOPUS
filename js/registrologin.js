function capturaDatosLogin(){
	var url = "respuestalogin.php";
	$.post(url,{usuario:$("#txtusuario").val(),
                contrasena:$("#txtcontrasena").val()},
	function (data) {
		$("#respuesta").html(data);
	});

}