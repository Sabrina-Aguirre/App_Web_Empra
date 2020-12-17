

<div class="row">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login" >
            <img src="img/empra.png" alt="empra">
            <div class="card-header card-header-primary text-center">
                <h4 class="card-title pt-3" >Iniciar sesión</h4>
                </div>
              <?php
              if (isset($_GET['salir']) && $_GET['salir'] == true) {
                session_start();
                unset($_SESSION);
                session_destroy();
              }
              
              if (isset($_GET['rta'])) {
                $rta = $_GET['rta'];
                echo mostrarMensaje($rta);
              }

              ?>
              <form  action="validar1.php" class="form" method="post" >
                <div class="card-body">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">mail</i>
                      </span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email..." name="email">
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" class="form-control" placeholder="Password..." name="clave">
                  </div>
                  <a href="./?page=olvido" class="olvido" style="margin-top: 15%; margin-bottom:15px;">Olvidé mi contraseña</a><br>
                  <a href="./?page=registro" class="registrarse" style="padding-top: 5px;">Registrarse</a>
                </div>
                <div class="footer text-center">
                  <input type="submit" value="Ingresar" name="accion" class="btn btn-primary btn-wd btn-lg btn-mb" style="margin-bottom:10px;" > 
                </div>
              </form>
            </div>
          </div>
        </div>
        <br><br>
        