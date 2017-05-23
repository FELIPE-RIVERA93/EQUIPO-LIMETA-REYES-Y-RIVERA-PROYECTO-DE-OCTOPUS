<div id = "borderojo" class = "modal-header" class = "responsi">
    <h4 id = "titulo"><b></b></h4>
    <div class = "modal-body">
    <!--Aqui va el formilario de clientes-->
        
        <center><label>Usuario</label></center>
        <center><input  id="txtusuario" type="text" maxlength="11"></center>



        <center><label>Contrasena</label></center>
        <center> <input  id="txtcontrasena" type="text" maxlength="100"></center>
    

         
        

                
                <div class="row">
                    <button id="btnregistro" class="btn btn-success" onclick="capturaDatosLogin()">
                        <span class="glyphicon glyphicon-save"></span>
                        Registrar Información
                    </button>
                </div>
                <div id="respuesta" class="row"></div>
            </div>






    <div class = "modal-footer; text-center">
        <button type = "btn btn-primary"
                class="btn btn-primary"
                onclick = "cerrarsesion()" style="background:blue;">
                <span class = "glyphycon glyphycon-remove"></span>
                &nbsp;&nbsp;Cerrar
        </button>

    </div>
</div>




























 