<style>
	#cabeza{
		
	}


</style>


<div id = "cabeza" class = "modal-header" class = "responsi">
<center><h4 id = "titulo"><b>Registro de Clientes</b></h4></center>
	
	<div class = "modal-body">
	<!--Aqui va el formilario de clientes-->
		


						<center><label>Matricula</label></center>
						<center><input id="txtmatricula" type="text" maxlength="11"></center>
							
						
						<center><label>Nombre</label></center>
						<center><input id="txtnombre" type="text" maxlength="100"></center>
						
							
						<center><label>Apellido Paterno</label></center>	
						<center><input id="txtpaterno" type="text" maxlength="50"></center>
						
				
						<center><label>Apellido Materno</label></center>
						<center><input id="txtmaterno" type="text" maxlength="40"></center>
				
						<center><label>Direccion</label></center>
						<center><input id="txtdireccion" type="text" maxlength="40"></center>
					
						<center><label>Telefono</label></center>
						<center><input id="txttelefono" type="text" maxlength="10"></center>
						

						<center><label>Correo</label></center>
						<center><input id="txtcorreo" type="text" maxlength="30"></center>			
				


				
				<div class="row"><br>
				<center>
					<button id="btnregistro" class="btn btn-success" onclick="capturaDatosCliente()">
						<span class="glyphicon glyphicon-save"></span>Registrar</button>
				</center>
				
				</div>
				<div id="respuesta" class="row"></div>
			</div>


	<div class = "modal-footer; text-center">
		<button type = "btn btn-primary"
				class="btn btn-primary"
				onclick = "cerrarclientes()" style="background:blue;">
				<span class = "glyphycon glyphycon-remove"></span>
				&nbsp;&nbsp;Cerrar
		</button>

	</div>
</div>