<?php
include_once "include/template/header.php";

?>

<main class="contenedor">
    <h1 class="pos-h1">Lista de clientes</h1>

    <div class="productos">
        <?php
        require_once "DL/cliente.php";
        $elSql = "select idCliente, nombre, correo, direccion, telefono from clientes";
        $myArray = getArray2($elSql);
        if (!empty($myArray)) {
            foreach ($myArray as $value) {
                echo "<div class='producto'>";
                echo "<h2>Datos del cliente</h2>";
                echo "<table>";
                echo "<tr><th>Nombre</th><td>{$value['nombre']}</td></tr>";
                echo "<tr><th>Correo</th><td>{$value['correo']}</td></tr>";
                echo "<tr><th>Direccion</th><td>{$value['direccion']}</td></tr>";
                echo "<tr><th>Telefono</th><td>{$value['telefono']}</td></tr>";
                echo "</table>";
                echo "<br>"; echo "<br>";
                echo "</div";
                
            }
        } else {
            echo "<tr>No hay registros de clientes</tr>";
        }

        ?>

    </div>

</main>

<?php
include "include/template/footer.php";
?>