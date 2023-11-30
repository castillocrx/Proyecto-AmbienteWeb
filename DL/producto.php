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
        error_log("Error inesperado: " . $th->getMessage(), 0);

        echo "Ocurrió un error";
    }finally{
        Desconecta($oConexion);
    }

    return $retorno;
}

function getArray($sql) {
    $retorno = array();
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
        error_log("Error inesperado: " . $th->getMessage(), 0);

        echo "Ocurrió un error";
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
        error_log("Error inesperado: " . $th->getMessage(), 0);

        echo "Ocurrió un error";
    }finally{
        Desconecta($oConexion);
    }

    return $retorno;
}

function eliminarProducto($idProducto) {
    try {
        $oConexion = Conecta();

        $stmt = $oConexion->prepare("DELETE FROM productos WHERE id = ?");
        $stmt->bind_param("i", $idProducto);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    } catch (\Throwable $th) {
        echo $th; 
        error_log("Error inesperado: " . $th->getMessage(), 0);

        echo "Ocurrió un error";
        return false;
    } finally {
        Desconecta($oConexion);
    }
}

function getProductoById($id) {
    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = mysqli_prepare($oConexion, "SELECT id, nombre, descripcion, imagen, precio FROM productos WHERE id = ?");
            mysqli_stmt_bind_param($stmt, "i", $id);

            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                $producto = null;

                if ($row = mysqli_fetch_assoc($result)) {
                    $producto = $row;
                }
            } else {
                echo "Error en la ejecución de la consulta";
            }

            mysqli_stmt_close($stmt);
        }
    } catch (\Throwable $th) {
        echo $th;
        error_log("Error inesperado: " . $th->getMessage(), 0);

        echo "Ocurrió un error";
    } finally {
        Desconecta($oConexion);
    }

    return $producto;
}



