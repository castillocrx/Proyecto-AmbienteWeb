<?php
include_once "include/template/header.php";
?>

<div class="bienv-pos">
    <h1 class="bienvenido">Las mejores hamburguesas.</h1>
</div>

<main class="contenedor">
    <div class="productos">
        <?php
        require_once "DL/producto.php";
        $elSql = "select id, nombre, descripcion, imagen, precio from productos";
        $myArray = getArray($elSql);
        if (!empty($myArray)) {
            foreach ($myArray as $value) {
                echo "<div class='producto'>";
                echo "<h2>{$value['nombre']}</h2>";
                echo "<p>{$value['descripcion']}</p>";
                echo "<img src='{$value['imagen']}' alt='Imagen del producto' height='100'>";
                echo "<p>Precio: {$value['precio']}</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No hay productos disponibles.</p>";
        }
        ?>
    </div>
</main>

<?php
require_once "include/template/footer.php";
?>
