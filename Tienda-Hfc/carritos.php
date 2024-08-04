<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    } 
    //borrar carrito $_SESSION['carrito'] = array();
        include("templates/cabecera.php"); 
        include('carrito.php');
        include('DB/conexion.php'); 
        ?>

<main class="main">

<?php

    if(!isset($_SESSION['id'])){
        header('Location: login.php');
        exit;
    } else {
        $usuarioId = $_SESSION['id']; //el usuario es el mismo de la sesión, no lo tiene que ingresar
        // Estos issets comprueban que el $_POST tenga esos valores. Los tiene automáticamente cuando le señalo el name al input.
        if(isset($_POST["productoId"]) && isset($_POST["tamanoId"]) && isset($_POST["colorId"]) && isset($_POST["cantidad"])){ //si existen (sino están vacíos) los campos que envía el usuario, entonces:
            anadirProductoAcarrito();
        } 
    }
?>
    <div class="container-testimonials">
            <h2 class="section__title">Mi carrito de compras</h2>
            <?php construirCarritoDeCompra(); ?>
            <a href="productos.php" class="welcome__btn" style="text-align: center;" id="agregarProducto">Agregar más productos</a>
            <br>
            <hr>
           <!-- <a href="DB/productos/pedido.php" style="padding-left:34%;">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="TUNX8BRWUZWLW">
                <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1"> 
            </a> -->
            <a href="DB/productos/pedido.php" class="welcome__btn" style="text-align: center;">Terminar Compra</a>
    </div>

</main>
<?php include("templates/pie.php"); ?>