<?php 
if (session_status() == PHP_SESSION_NONE) { 
    session_start();
}
include("templates/cabecera.php");
include('DB/conexion.php');
include("DB/productos/get.php");
?>
    <main class="main">
        <?php echo
        '<h3 class="producto_titulo">'. $result -> nombre. '</h3>';
        ?>
        <div class="producto">
            <?php echo
            '<img class="producto_imagen" src="'. $result -> imagen. '" alt="Imagen del Producto">'; ?>
            <div class="producto_contenido">
              <?php echo
                '<p>'. $result -> descripcion. '</p>'; ?>   
                
                 <form method="POST" class="formulario" action="carritos.php"> 
                    <div class="form-c">
                        <select class="formulario__campo" name="colorId" >
                        <?php
                            $query = $pdo->prepare("SELECT * FROM colores");
                            $query->execute();
                            $resultados = $query ->fetchAll(PDO::FETCH_OBJ); 
                            //fetchAll devuelve un array que contiene todas las filas restantes del conjunto de resultados.
                            ?>   
                                               
                        
                        <option disabled selected>-- Selecciona Color --</option>

                        <?php
                            if ($query-> rowCount() > 0) {
                                foreach ($resultados as $resultado) {
                                    echo
                            '<option value="'.$resultado -> id.'">'.$resultado -> nombre.'</option>';
                                } //id de color (colorId)
                            } ?>  
                        </select>
                    </div>
                    <div class="form-c">
                        <select class="formulario__campo" name= "tamanoId">
                        <?php
                            $query = $pdo->prepare("SELECT * FROM tamanos");
                            $query->execute();
                            $resultados2 = $query ->fetchAll(PDO::FETCH_OBJ); ?> 
                            <option disabled selected>-- Selecciona Tamano --</option>
                        <?php
                            if ($query-> rowCount() > 0) {
                                foreach ($resultados2 as $resultado2) {
                                    echo
                            '<option value="'.$resultado2 -> id.'">'.$resultado2 -> tamano.'</option>';
                                }   //id de tamano (tamanoId)
                            } ?>
                        </select>
                    </div>

                    <div class="form-c">        
                        <input class="formulario__campo" value="Cantidad:" readonly onmousedown="return false;"></input>
                    </div>

                    <div class="form-c">
                        
                        <input class="formulario__campo" type="number" placeholder="Cantidad" min="1" max="99" value="<?php echo 1; ?>" name="cantidad">

                        <?php
                            echo "<input type=\"hidden\" value=\"$result->id\" name=\"productoId\" readonly onmousedown=\"return false;\"></input>";
                            echo "<input type=\"hidden\" value=\"$result->precio\" name=\"precio\"></input>";
                            echo "<input type=\"hidden\" value=\"$result->nombre\" name=\"nombre\"></input>";
                            echo "<input type=\"hidden\" value=\"$result->descripcion\" name=\"descripcion\"></input>";
                        ?>
                    </div>
                        <input class="formulario__submit" type="submit" value="agregar"> <!--envia los datos a un servidor-->
                        
                        <br>
                        <a class="formulario__submit" href="carritos.php" style="background-color:silver;">Mi carrito</a>
                        <br>
                    </div>  
                </form>
            </div>
        </div>
    </main>
<?php
include("templates/pie.php");
?>


