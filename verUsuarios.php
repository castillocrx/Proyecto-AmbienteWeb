<?php
include_once "include/template/header.php";

?>

<main class="contenedor">
    <h1 class="pos-h1">Lista de clientes</h1>

    <div class="productos">
            <?php
                require_once "DL/cliente.php";
                $elSql = "select idCliente, nombre, correo, direccion, telefono from clientes";
                $myArray = getArray($elSql);
                echo "<div class='producto'>";
                echo "<h2>Datos de los clientes</h2>";
                echo "<table>";
                echo "<th>Nombre</th>";
                echo "<th>Correo</th>";
                echo "<th>Direccion</th>";
                echo "<th>Teléfono</th>";
                
                if(!empty($myArray)){
                    foreach ($myArray as $value) {            
                        echo "<tr>";
                        echo "<td>". $value['nombre'] ."</td>";
                        echo "<td>{$value['correo']}</td>";
                        echo "<td>{$value['direccion']}</td>";
                        echo "<td>{$value['telefono']}</td>";
                    }
                }else{
                    echo "<tr>No hay registros de clientes</tr>";
                }
                   
                echo "</table>";
                echo "</tr>";
                echo "</div>";
            ?>

        </div>

</main>

<?php
include "include/template/footer.php";
?>