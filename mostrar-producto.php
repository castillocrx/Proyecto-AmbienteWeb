<?php
include_once "include/template/header.php";
?>

<main class="contenedor">
    <h1 class="pos-h1">Producto seleccionado</h1>

    <div class="productos">
            <?php
            require_once "DL/producto.php";
            require_once "include/functions/recoge.php";
            $elSql = "select id, nombre, descripcion, imagen, precio from productos where id = " . recogeGet('id');
            $idProducto = filter_var(recogeGet('id'), FILTER_VALIDATE_INT);

            if ($idProducto !== false) {
                $producto = getObject($elSql, "i", $idProducto);

                if ($producto) {
                    echo "<div class='producto'>";
                    echo "<h2>Información del Producto</h2>";
                    echo "<table>";
                    echo "<tr><th>ID</th><td>{$producto['id']}</td></tr>";
                    echo "<tr><th>Nombre</th><td>{$producto['nombre']}</td></tr>";
                    echo "<tr><th>Descripcion</th><td>{$producto['descripcion']}</td></tr>";
                    echo "<img src='{$producto['imagen']}' alt='Imagen del producto' height='100'>";
                    echo "<tr><th>Precio</th><td>{$producto['precio']}</td></tr>";
                    echo "</table>";
                    echo "<th><a href='producto-eliminado.php?id={$producto['id']}' class='boton-admin'>Eliminar Producto</a></th>";
                    echo "</div>";

                } else {
                    echo "<p>No se encontró ningún producto con ese ID.</p>";
                }
            } else {
                echo "<p>ID de producto no válido.</p>";
            }
            ?>

    </div>

</main>

<?php
include "include/template/footer.php";
?>