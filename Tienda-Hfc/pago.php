<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        unset($_SESSION['carrito']);
    } 
    //borrar carrito $_SESSION['carrito'] = array();
        include("templates/cabecera.php"); 
        ?>

<main class="main"> 
    <h3 class="section__title">¡Gracias por preferirnos!</h3>
    <img src="img/10.jpg" alt="imagen de agradecimiento" title="Gracias" class="testimonials__img">
    <br>
    <p class="testimonials__txt">Su compra se ha procesado correctamente en nuestros registros.</p>

    <a class="welcome__btn" href="index.php" style="text-align:center;">Siga Navegando</a>
    </br>
    </br>
</main>
<?php include("templates/pie.php"); ?>



