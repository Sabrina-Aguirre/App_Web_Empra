<?php

session_start();
if(!isset($_SESSION['email'])) {header("location: ./?page=ingreso&rta=0x008");}
   
    ?>
    <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card">
            <?php
            if(isset($_GET['rta'])){
              $rta=$_GET['rta'];
              echo mostrarMensaje($rta);
            }
            ?>
              <form class="form" action="validar1.php" method="POST" >
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">SOLICITAR TURNO NUEVO</h4>
                </div>
                <span class="input-group-text">
                    <p class="description text-center ">¿Qué masaje?</p>
                    <br>
                  </span>
                  <select class="select-group-prepend" name="masaje" style="width: 100%;">
                    <option value="0">Tipo de masaje</option>
                    <option value="relajante">Relajante</option>
                    <option value="lumbar">Lumbar</option>
                    <option value="reflex">Reflexología Podal</option>
                  </select>
                  <span class="input-group-text text-center">
                    <p class="description text-center">¿Qué día y horario tenes disponible?</p>
                    <br>
                  </span>
                  <input type="datetime-local" class="form-control"  name="fechaHora">
                <div class="card-body">
                  <div class="select-group">
                    <div class="select-group-prepend">
                    </div>
                  </div>
                <div class="footer text-center">
                  <input type="submit" class="btn btn-primary btn-wd btn-lg btn-mb10" name="accion" value="Reservar">
                  <a href="./?page=ingreso&salir=true" class="btn btn-primary btn-wd btn-lg btn-mb10">Cerrar sesión</a>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
   
    
       
