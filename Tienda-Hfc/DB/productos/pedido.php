<?php 
    session_start();
    include('../conexion.php');

    function comprar(){ //mandar a la bd el carrito completo:
        if(isset($_SESSION["carrito"])){ //si aprieto en el btn carrito:
            //Nombres de las columnas
            $ncColorId = 'colorId';
            $ncTamanoId = 'tamanoId';
            $ncCantidad = 'cantidad';
            $ncUsuarioId = 'usuarioId';
            $ncProductoId = 'productoId';
            //carrito
            $carrito = $_SESSION["carrito"];
            //el id del usuario
            $usuarioId = (int) $_SESSION["id"];
            //conecta el PDO de fuera de la función que está en conexion.php
            //para traerla a la funcion comprar necesito escribir 'global'
            global $pdo;
            //creo objeto que Prepara el sql en el PDO ($query)// constructor de sql
            //pdo es el manejador de la bd- conector
            $query = $pdo->prepare("INSERT INTO pedidos($ncColorId, $ncTamanoId, $ncCantidad, $ncUsuarioId, $ncProductoId) VALUES (:$ncColorId, :$ncTamanoId, :$ncCantidad, :$ncUsuarioId, :$ncProductoId)");
            //es la base de la sentencia sql
            
            // Recorre el carrito
            for($i = 0; $i<count($carrito); $i++){
                //Carga los valores del item de index $i desde el carrito
                $colorId = (int) $carrito[$i]['colorId'];
                $tamanoId = (int) $carrito[$i]['tamanoId'];
                $cantidad = (int) $carrito[$i]['cantidad'];
                $productoId = (int) $carrito[$i]['productoId'];
                //Sustituye en el SQL del PDO los valores :variable por los de arriba
                $query->bindParam(":$ncColorId", $colorId, PDO::PARAM_INT); //
                $query->bindParam(":$ncTamanoId", $tamanoId, PDO::PARAM_INT);
                $query->bindParam(":$ncCantidad", $cantidad, PDO::PARAM_INT);
                $query->bindParam(":$ncUsuarioId", $usuarioId, PDO::PARAM_INT);
                $query->bindParam(":$ncProductoId", $productoId, PDO::PARAM_INT);
                //Ejecuta el SQL ya modificado con los valores correctos puestos en el bindParam
                $result = $query->execute();
                if($result){
                    $_SESSION["carrito"] = array();//resetear carrito con nueva array, solo si se guardo en bd el pedido
                    echo "<script>console.log('pedido exitoso!');</script>";
                    echo "<script>alert('pedido exitoso!');</script>
                    <script>";
                   // $_SESSION["mensaje"] = "Tu pedido ha sido registrado con éxito.";
                    header("Location: ../../pago.php");
                }else{
                    echo "hubo un error en tu compra";
                }
            }
        }
    }
    comprar();
?>