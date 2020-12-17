
<div class="row">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login" >
            <img src="img/empra.png" alt="empra">
            <div class="card-header card-header-primary text-center">
                <h4 class="card-title pt-3" >Recuperar datos de acceso</h4>
                </div>
              <form action="validar1.php" class="form" method="post" >
                <div class="card-body">
                  <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" class="form-control" placeholder=" Nueva contraseña..." name="clave">
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" class="form-control" placeholder="Repita la contraseña..." name="clave">
                  </div>
                  <br>
                  <!--div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">mail</i>
                      </span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email..." name="email">
                  </div>-->
                  <div class="footer text-center">
                  <input type="submit" value="Modificar" name="accion" class="btn btn-primary btn-wd btn-lg btn-mb" style="margin-bottom:10px;" > 
                  </div>                
                </div>
              </form>
              <?php
              ?>
            </div>
          </div>
        </div>
        <br><br>