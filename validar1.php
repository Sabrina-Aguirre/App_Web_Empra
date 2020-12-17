<?php
include "function.php";



if (isset($_POST['accion']) && $_POST['accion'] == 'Ingresar') {
    $email = $_POST['email'];
    $clave = $_POST['clave'];
    if(empty($email)){
        header("location:./?page=ingreso&rta=0x003");
    }elseif(filter_var($email,FILTER_VALIDATE_EMAIL) === false) {
        header("location:./?page=ingreso&rta=0x003");
    }elseif(empty($clave)){
        header("location:./?page=ingreso&rta=0x003");
    }elseif(strlen($clave) < 8) {
        header("location:./?page=ingreso&rta=0x004");
    }else{
        ingresar($email, $clave);
    }
} else if(isset($_POST['accion']) && $_POST['accion'] == 'Registrarme') {
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $clave=$_POST['clave'];
    if(empty($nombre)){
        header("location:./?page=registro&rta=0x003");
    }elseif(empty($apellido)){
        header("location:./?page=registro&rta=0x003");
    }elseif(empty($email)){
        header("location:./?page=registro&rta=0x003");
    }elseif(empty($clave)){
        header("location:./?page=registro&rta=0x003");
    }elseif(is_numeric($nombre)){
        header("location:./?page=registro&rta=0x004");
    }elseif(is_numeric($apellido)){
        header("location:./?page=registro&rta=0x004");
    }elseif(filter_var($email,FILTER_VALIDATE_EMAIL) === false) {
        header("location:./?page=registro&rta=0x004");
    }elseif(strlen($clave) < 8) {
        header("location:./?page=registro&rta=0x004");
    }elseif(strlen($nombre) < 3) {
        header("location:./?page=registro&rta=0x004");
    }elseif(strlen($apellido) < 3) {
        header("location:./?page=registro&rta=0x004");
    }else{
        crearUsuario($nombre,$apellido,$email,$clave);
    }
    
}

else if(isset($_POST['accion']) && $_POST['accion'] == 'Reservar') {
    $masaje=$_POST['masaje'];
    $fecha=$_POST['fecha'];
    $horario=$_POST['horario'];
    if(empty($masaje)){
        header("location:./?page=turno&rta=0x003");
    }elseif(empty($fecha)){
        header("location:./?page=turno&rta=0x003");
    }elseif(empty($horario)){
        header("location:./?page=turno&rta=0x003");
    }elseif(is_numeric($masaje)){
        header("location:./?page=turno&rta=0x004");
    }else{
        $rta=crearTurno($masaje,$fecha,$horario);
        header("location:./?page=turno&rta=" . $rta);
    }
}
    

?>

