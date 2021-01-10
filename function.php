<?php
include "admin/conexion.php";

function cargarPagina($page){
    
    if(file_exists($page)){
        $page=$page;
    }else{
        $page="404.php";
    }
    return $page;

}

function mostrarMensaje($rta) {
    switch ($rta) {
        case "0x001":
            $mensaje = "<b style='color: green; text-align:center'>¡Turno creado con exito!</b>";
        break;
        case "0x002":
            $mensaje = "<b style='color: red; text-align:center'>No se pudo crear el turno.</b>";
        break;
        case "0x003":
            $mensaje = "<b style='color: red; text-align:center'>El email no puede estar vacio.</b>";
        break;
        case "0x004":
            $mensaje = "<b style='color: red; text-align:center'>Complete el  campo email de forma correcta.</b>";
        break;
        case "0x005":
            $mensaje = "<b style='color: green; text-align:center'>Se enviaron correcatmente los datos del formulario.</b>";
        break;
        case "0x006":
            $mensaje = "<b style='color: green; text-align:center'>Usuario registrado.</b>";
        break;
        case "0x007":
            $mensaje = "<b style='color: red; text-align:center;'>email o contraseña incorrecta</b>";
        break;
        case "0x008":
            $mensaje = "<b style='color: red; text-align:center'>Debe iniciar sesión para ingresar.</b>";
        break;
        case "0x009":
            $mensaje = "<b style='color: red; text-align:center'>La contraseña no puede estar vacia.</b>";
        break;
        case "0x010":
            $mensaje = "<b style='color: red; text-align:center'>La contraseña no puede contener menos de 8 caracteres.</b>";
        break;
        case "0x011":
            $mensaje = "<b style='color: red; text-align:center'>El nombre no puede estar vacio.</b>";
        break;
        case "0x012":
            $mensaje = "<b style='color: red; text-align:center'>El apellido no puede estar vacio.</b>";
        break;
        case "0x013":
            $mensaje = "<b style='color: red; text-align:center'>El nombre no puede contener numeros.</b>";
        break;
        case "0x014":
            $mensaje = "<b style='color: red; text-align:center'>El apellido no puede contener numeros.</b>";
        break;
        case "0x015":
            $mensaje = "<b style='color: red; text-align:center'>El nombre no puede contener menos de 3 caracteres.</b>";
        break;
        case "0x016":
            $mensaje = "<b style='color: red; text-align:center'>El apellido no puede contener menos de 3 caracteres.</b>";
        break;
        case "0x017":
            $mensaje="<b style='color: red; text-aling: center'>La fecha y horario no pueden estar vacios.</b>";
        case "0x018":
            $mensaje = "<b style='color: red; text-align:center'>El masaje no puede estar vacio.</b>";
        break;
    }

    return $mensaje;
}

function crearTurno($masaje, $fechaHora) {
    
    global $conexion;

    try {
        $sql = "INSERT INTO agendados (masaje,fechaHora) VALUES (?,?)";
        $stmt = $conexion-> prepare($sql);
        $stmt-> bindParam(1,$masaje,PDO::PARAM_STR);
        $stmt-> bindParam(2,$fechaHora,PDO::PARAM_STR);

        if ($stmt -> execute()) {
            return $rta = "0x001";
        }
        else {
            return $rta = "0x002";
        }
    }
    catch (PDOException $e) {
        echo "Error: " . $e -> getMessage();
    }
}

function crearUsuario($nombre,$apellido,$email,$clave){
    global $conexion;
   
    $clave = password_hash($clave, PASSWORD_DEFAULT);
    $codigo = 'abcdefghi%jklmnopqrstuvwxyzA%BCDEFGHIJKLMN/OPQRSTUVW.XYZ012345%6789*';
    $codigo = md5(str_shuffle($codigo));
    $sql = "INSERT INTO usuarios (nombre,apellido,email,clave,codigo,estado) VALUES (?,?,?,?,?,1)";
    $usuarioRegistro = $conexion->prepare($sql);
    $usuarioRegistro->bindParam(1, $nombre, PDO::PARAM_STR);
    $usuarioRegistro->bindParam(2, $apellido, PDO::PARAM_STR);
    $usuarioRegistro->bindParam(3, $email, PDO::PARAM_STR);
    $usuarioRegistro->bindParam(4, $clave, PDO::PARAM_STR);
    $usuarioRegistro->bindParam(5, $codigo, PDO::PARAM_STR);
    if ($usuarioRegistro->execute()) {
        header("location:./?page=ingreso");
    } else {
        header("location:./?page=registro&rta=0x004");
    }
}




function ingresar($email, $clave) {
    global $conexion; 
    
    try 
    {
        $sql= "SELECT *FROM usuarios WHERE email = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(1,$email, PDO::PARAM_STR);
        if ($stmt ->execute()) {
            $row = $stmt -> fetch();
            if ($row) {
                if ($row['estado'] == 1) {
                    $claveC = $row['clave'];

                    if (password_verify($clave, $claveC)) {
                        session_start();
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['clave'] = $row['clave'];
                        header("location: ./?page=turno");
                    }
                    else{
                        header("location:./?page=ingreso&rta=0x007");
                    }
                }
                else {
                    header("location:./?page=ingreso&rta=0x007");
                }
            }
            else{
                header("location:./?page=ingreso&rta=0x007");
            }
        }
        else{
            header("location:./?page=ingreso&rta=0x007");
        }
    }
    catch (PDOException $e) {
        echo "Error: " . $e -> getMessage();
    }
    
}