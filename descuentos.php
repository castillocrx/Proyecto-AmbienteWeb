<?php
include_once "include/template/header.php";
?>



<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/descuentos.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<body>
    <section class="carousel">
        <ol class="carousel__viewport">
            <li class="carousel__slide">
                <div class="carousel__snapper" style="background-image: url('img/bbq.jpg')"></div>
            </li>
            <li class="carousel__slide">
                <div class="carousel__snapper" style="background-image: url('img/clasica.avif')"></div>
            </li>
            <li class="carousel__slide">
                <div class="carousel__snapper" style="background-image: url('img/pollo.avif')"></div>
            </li>
        </ol>
    </section>
</body>

</html>



<?php
require_once "include/template/footer.php";
?>