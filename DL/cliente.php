<?php

use PSpell\Config;

require_once "conexion.php";

function IngresoCliente($pNombre, $pCorreo, $pDireccion, $pTelefono, $pContrasena) {
    $retorno = false;

    try {
        $oConexion = Conecta();

        // formato datos utf8
        if (mysqli_set_charset($oConexion, "utf8")) {
            // Hash de la contraseña utilizando Bcrypt
            $hashContrasena = password_hash($pContrasena, PASSWORD_BCRYPT);

            $stmt = $oConexion->prepare("INSERT INTO clientes (nombre, correo, direccion, telefono, password) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $iNombre, $iCorreo, $iDireccion, $iTelefono, $iContrasena);

            $iNombre = $pNombre;
            $iCorreo = $pCorreo;
            $iDireccion = $pDireccion;
            $iTelefono = $pTelefono;
            $iContrasena = $hashContrasena; // Almacenar el hash en lugar de la contraseña original

            if ($stmt->execute()) {
                $retorno = true;
            }
        }

    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($oConexion);
    }

    return $retorno;
}

function getArray($sql) {
    try {
        $oConexion = Conecta();

        if(mysqli_set_charset($oConexion, "utf8")){
            
            if(!$result = mysqli_query($oConexion, $sql)) die();

            $retorno = array();

            while ($row = mysqli_fetch_array($result)) {
                $retorno[] = $row;
            }
        }

    } catch (\Throwable $th) {
        //Bitacora
        echo $th;
    }finally{
        Desconecta($oConexion);
    }

    return $retorno;
}

function getObject($sql) {
    try {
        $oConexion = Conecta();

        //formato datos utf8
        if(mysqli_set_charset($oConexion, "utf8")){
            
            if(!$result = mysqli_query($oConexion, $sql)) die(); //cancelamos el programa

            $retorno = null;

            while ($row = mysqli_fetch_array($result)) {
                $retorno = $row;
            }
        }

    } catch (\Throwable $th) {
        //Bitacora
        echo $th;
    }finally{
        Desconecta($oConexion);
    }

    return $retorno;
}



function DefinirContrasena($pCorreo, $pContrasena) {
    $retorno = false;

    try {
        $oConexion = Conecta();

        if(mysqli_set_charset($oConexion, "utf8")){
            $stmt = $oConexion->prepare("update clientes set password = ? where correo = ?");
            $stmt->bind_param("ss", $iContrasena, $iCorreo);

            $iCorreo = $pCorreo;
            $iContrasena = $pContrasena;

            if($stmt->execute()){
                $retorno = true;
            }
        }

    } catch (\Throwable $th) {
        echo $th;
    }finally{
        Desconecta($oConexion);
    }

    return $retorno;
}