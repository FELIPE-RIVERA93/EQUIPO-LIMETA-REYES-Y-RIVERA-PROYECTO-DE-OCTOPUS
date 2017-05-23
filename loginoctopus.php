 <style >
      .modal-header{

         background:black;
      }   
      #logincolor{
        color:white;
      }     


      </style>

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 id = "logincolor"><span class="glyphicon glyphicon-lock"></span>Sesión</h4></center>
          
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span>Usuario</label>
              <input type="text" class="form-control" id="txtusuario" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Contraseña</label>
              <input type="text" class="form-control" id="txtcontrasena" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Recordar</label>
            </div>
              <button type="submit" class="btn btn-success btn-block" onclick="capturaDatosLogin()"><span class="glyphicon glyphicon-off"></span>Entrar</button>
          </form>
        </div>



        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Salir</button>
          <p>¿A un no es miembro? <a href="#">Iniciar Sesión</a></p>
          <p>Olvidaste tú<a href="#">Contraseña?</a></p>
        </div>
      </div>