
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Producto</title>
    <link rel="stylesheet" type="text/css" href="/css/estilosF.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Formulario de Producto</h2>
        <form action="procesar_formulario.php" method="post" enctype="multipart/form-data">
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" required>
            <p>Ingresa el nombre del producto.</p>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>
            <p>Proporciona una descripción detallada del producto.</p>

            <label for="imagen">Imagen del Producto:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*" required>
            <p>Selecciona una imagen para el producto.</p>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required>
            <p>Indica el precio del producto en USD.</p>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
<footer class="footer">
    <p class="footer-texto">Proyecto Ambiente Web</p>
</footer>
</html>
