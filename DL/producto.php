<?php

use PSpell\Config;

require_once "conexion.php";

function IngresoProducto($pNombre, $pDescripcion, $pImagen, $pPrecio) {
    $retorno = false;

    try {
        $oConexion = Conecta();

        if(mysqli_set_charset($oConexion, "utf8")){
            $stmt = $oConexion->prepare("insert into productos (nombre, descripcion, imagen, precio) values (?, ?, ?, ?)");
            $stmt->bind_param("sssd", $iNombre, $iDescripcion, $iImagen, $iPrecio);

            $iNombre = $pNombre;
            $iDescripcion = $pDescripcion;
            $iImagen = $pImagen;
            $iPrecio = $pPrecio;

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
        echo $th;
    }finally{
        Desconecta($oConexion);
    }

    return $retorno;
}

function getObject($sql) {
    try {
        $oConexion = Conecta();

        if(mysqli_set_charset($oConexion, "utf8")){
            
            if(!$result = mysqli_query($oConexion, $sql)) die();

            $retorno = null;

            while ($row = mysqli_fetch_array($result)) {
                $retorno = $row;
            }
        }

    } catch (\Throwable $th) {
        echo $th;
    }finally{
        Desconecta($oConexion);
    }

    return $retorno;
}


