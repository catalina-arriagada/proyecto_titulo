<?php include("templates/cabecera.php");
include("DB/conexion.php");
?>

    <main class="main">
        <section class="product__title">
            <h3 class="design__title">Productos</h3>
        </section> 

        <div class="container-design"><!--separa los productos-->     
        
            <div class="design__item"> <!--apariencia de c/producto-->
            <?php 
            echo '<a href=\Tienda-Hfc/producto.php?id=1>' ?>

            <img class="design__img" src="img/productos/1o.jpg" alt="Tinturas Hair Fashion Colors">
                <div>  
                    <p class="design__title">Tinturas Originales HFC
                        <br>
                        <br>
                        $7.000
                    </p>
                </div>
                </a>
            </div><!--fin .producto-->
         
            <div class="design__item">
            <?php 
            echo '<a href=\Tienda-Hfc/producto.php?id=2>' ?>
                <img class="design__img" src="img/productos/3.jpg" alt="Tinturas Pravana">
                <div>
                    <p class="design__title">Tinturas Pravana
                    <br>
                    <br>
                        $12.000
                    </p>
                </div>
                </a>
            </div> <!--fin .producto-->   
            <div class="design__item">
            <?php 
            echo '<a href=\Tienda-Hfc/producto.php?id=3>' ?>
                <img class="design__img" src="img/productos/7.jpg" alt="Bomba Nutritiva Hair Fashion Colors">
                  <div>
                    <p class="design__title">Bomba Nutritiva
                    <br>
                    <br>
                        $10.000
                    </p>
                  </div>
                </a>
             </div> <!--fin .producto-->
                
             <div class="design__item"> 
             <?php 
            echo '<a href=\Tienda-Hfc/producto.php?id=4>' ?>
                <img class="design__img" src="img/productos/9.jpg" alt="Olaplex Profesional">
                <div>
                    <p class="design__title">Olaplex N° 3 y 7
                        <br>
                        <br>
                        $29.000
                    </p>
                </div>
                </a>
            </div> <!--fin .producto-->

            <div class="design__item"> 
            <?php 
            echo '<a href=\Tienda-Hfc/producto.php?id=5>' ?>
                <img class="design__img" src="img/productos/10.jpg" alt="Shampoo Matizador">
                <div>
                    <p class="design__title">Shampoo Matizador
                        <br>
                        <br>
                        $6.000
                    </p>
                </div>
                </a>
            </div> <!--fin .producto-->

            <div class="design__item"> 
            <?php 
            echo '<a href=\Tienda-Hfc/producto.php?id=6>' ?>
                <img class="design__img" src="img/productos/11.jpg" alt="Alisado Definitivo">
                <div>
                    <p class="design__title">Alisado Definitivo
                        <br>
                        <br>
                        $10.000
                    </p>
                </div>
                </a>
            </div> <!--fin .producto-->

            <div class="design__item">
            <?php 
            echo '<a href=\Tienda-Hfc/producto.php?id=7>' ?>
                <img class="design__img" src="img/productos/12.jpg" alt="Crema Botox Capilar">
                <div>
                    <p class="design__title">Crema Botox Capilar
                        <br>
                        <br>
                        $5.000
                    </p>
                </div>
                </a>
            </div> <!--fin .producto-->
            
            <div class="design__item">
            <?php 
            echo '<a href=\Tienda-Hfc/producto.php?id=8>' ?>
                <img class="design__img" src="img/productos/13.jpg" alt="Crema Ox/Decolorante">
                <div>
                    <p class="design__title">Crema Ox+Decolorante
                        <br>
                        <br>
                        $4.000
                    </p>
                </div>
                </a>
            </div> <!--fin .producto-->            
    </main>


<?php include("templates/pie.php"); ?>