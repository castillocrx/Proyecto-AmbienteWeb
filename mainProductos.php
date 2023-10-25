<?php
include_once "include/template/header.php";
?>
<div class="bienv-pos">
    <h1 class="bienvenido">Las mejores hamburguesas.</h1>
</div>
<main class="contenedor">
            <?php
            require_once "DL/producto.php";
            $elSql = "select id, nombre, descripcion, imagen, precio from productos";
            $myArray = getArray($elSql);
            if (!empty($myArray)) {
                foreach ($myArray as $value) {
                    echo "<tr>";
                    echo "<td>" . $value['nombre'] . "</td>";
                    echo "<td>{$value['descripcion']}</td>";
                    echo "<td><img src='{$value['imagen']}' alt='Imagen del producto' height='100'></td>";
                    echo "<td>{$value['precio']}</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr>No hay registros de alumnos</tr>";
            }
            ?>

</main>
<?php
require_once "include/template/footer.php";
?>