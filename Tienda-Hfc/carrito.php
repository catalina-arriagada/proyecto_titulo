<?php
if (session_status() == PHP_SESSION_NONE) { //mejor rendimiento, se ahorra cargar la sesion denuevo
    session_start();
  }
function construirCarritoDeCompra() //aqui comienza el carrito: carrito visual
{
    if(isset($_SESSION['carrito']) && count($_SESSION['carrito'])>0) //si existe la sesión con el btn carrito, y si es mayor a 0, que construya un carrito:
    {
        echo "<table class=\"container-testimonials\">
        <thead>
            <tr>
                <th class='testimonials__txt' style='border: white 5px outset;'>Nombre</th>
                <th class='testimonials__txt' style='border: white 5px outset;'>Precio</th>
                <th class='testimonials__txt' style='border: white 5px outset;'>Cantidad</th>
                <th class='testimonials__txt' style='border: white 5px outset;'>Total</th>
                <!--th class='testimonials__txt'>Quitar</th-->
            </tr>
        </thead>
        <tbody>";

        for($i = 0; $i<count($_SESSION['carrito']); $i++)//cuenta desde lo que hay en el carrito: //cuento cuandtos elementos hay en el array carrito
        { //c/iteracion es un producto
            $producto = $_SESSION['carrito'][$i]; //los productos que cuente los guardo en esta variable
            $nombre = $producto["nombre"]; //nombre de cada producto
            $precio = (int) $producto["precio"]; //precio de cada producto
            $descripcion = $producto["descripcion"]; //descripcion de cada producto
            $cantidad = (int) $producto["cantidad"]; //cantidad de cada producto
            $total = (int) $precio * $cantidad; //multiplico el precio por la cantidad de cada producto
            $totalPrecio = $total+$i;
          
            //muestro los valores:
            echo "<tr class= 'container-testimonials'>
                <th class='testimonials__txt' style='border: pink 5px outset;'>$nombre</th>
                <th class='testimonials__txt' style='border: pink 5px outset;'>$precio</th>
                <th class='testimonials__txt' style='border: pink 5px outset;'>$cantidad</th>
                <th class='testimonials__txt' style='border: pink 5px outset;'>$total</th>
            </tr>";


        } 
    
        /* echo "</tbody>
            <tfoot>
            </tfoot>
            </table>
            <p colspan='2' class='testimonials__txt' style='border: pink 5px outset;'><strong style='text-align:left;'>Total:</strong> $totalPrecio</p>
            "; */
            echo '
            </tbody>
            <tfoot>
            </tfoot>
            </table>


            <div id="smart-button-container">
                  <div style="text-align: center;">
                    <div id="paypal-button-container"></div>
                  </div>
                </div>
              <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
              <script>
                function initPayPalButton() {
                  paypal.Buttons({
                    style: {
                      shape: "rect",
                      color: "gold",
                      layout: "vertical",
                      label: "paypal",
                      
                    },
            
                    createOrder: function(data, actions) {
                      return actions.order.create({
                        purchase_units: [{"amount":{"currency_code":"USD","value":7}}]
                      });
                    },
            
                    onApprove: function(data, actions) {
                      return actions.order.capture().then(function(orderData) {
                        
                        // Full available details
                        console.log("Capture result", orderData, JSON.stringify(orderData, null, 2));
            
                        // Show a success message within this page, e.g.
                        const element = document.getElementById("paypal-button-container");
                        element.innerHTML = "";
                        element.innerHTML = "¡Gracias por su pago!";
            
                        // Or go to another URL:  
                        actions.redirect("DB/productos/pedido.php");
                        
                      });
                    },
            
                    onError: function(err) {
                      console.log(err);
                    }
                  }).render("#paypal-button-container");
                }

                
                initPayPalButton();
              </script>
 
              ';
              
   /*   echo '<script>

        const compra = document.querySelector("#smart-button-container");

        function botonCompra() {

            compra.innerHTML = "<a href="DB/productos/pedido.php" class="welcome__btn" style="text-align: center;">Terminar Compra</a>";
        }
    
        </script>'; */
    }
       

}



function anadirProductoAcarrito($mostrarCarrito = false) //construir carrito desde sesion
{
    //si no existe el carrito, aquí lo crea.
    if(!isset($_SESSION["carrito"]))
    {
        $_SESSION["carrito"] = array(); //guardo el carrito en un array, en una sesion, desde el post
    }
    //creo nuevamente carrito:
    //array con producto, array asociativo
    $nuevoItem = ["productoId"=>$_POST["productoId"],
    "tamanoId"=>$_POST["tamanoId"], 
    "colorId"=>$_POST["colorId"],
    "nombre"=>$_POST["nombre"],
    "descripcion"=>$_POST["descripcion"],
    "cantidad"=>$_POST["cantidad"],
    "precio"=>$_POST["precio"]
    ];
    //[item1, item2, item3]; c/item es un nuevo hijo
    //Se busca en el carrito para ver si ya existe ese producto en la lista (con el mismo color y tamano)
    $encontrado = -1; //contador
    for($i=0; $i<count($_SESSION["carrito"]); $i++) //si existe entonces contará y añadirá a la cantidad del mismo producto
    {
        $ms = $_SESSION["carrito"][$i]; //guardo los items buscados en $ms para luego buscarlos
        //Aquí es donde busca si un item ya tiene el mismo color y tamano:
        //si tienen el mismo color/tamaño es el mismo producto
        if($ms["productoId"] == $nuevoItem["productoId"] &&
        $ms["colorId"] == $nuevoItem["colorId"] &&
        $ms["tamanoId"] == $nuevoItem["tamanoId"]){ 
            $encontrado = $i; break;} 
    }
    //se le añade un item de producto al carrito en caso de que no se haya encontrado.
    if($encontrado===-1)
    {
        array_push($_SESSION["carrito"], $nuevoItem);//array_push inserta los elementos de $nuevoItem al final del carrito
    }
    else
    {
    //Si se encontró, sobreescribe el carrito que ya estaba.
        $_SESSION["carrito"][$encontrado]["cantidad"] += $nuevoItem ["cantidad"]; //sobreescribe la cantidad para aumentarla (sumarla)
        
    }
    //Si quiero ver que hay en el carrito:
    if($mostrarCarrito){mostrarQueHayEnElCarrito($encontrado);}
    //Esto es para sumar el total de productos en el carrito.
    $cantidadTotal = 0;
    foreach($_SESSION["carrito"] as $item)
    {
        $cantidadTotal+=(int)$item["cantidad"]; //por cada iteración del ciclo foreach, se va agregando la cantidad al total
        
    }
    if($cantidadTotal==0){$cantidadTotal="";}//si no hay nada en $cantidadTotal, se convierte en string, no se muestra un 0
   /*  echo "<script> alert(\"tu(s) $cantidadTotal producto(s) ha(n) sido añadido(s) al carrito\");</script>";  */
   




}
/* function mostrarQueHayEnElCarrito($encontrado) //para ver si funciona:
{
    echo "<br> <br> <br> Encontrado === </br>";
        var_dump($encontrado);
        echo "sesión - carrito === </br>"; 
        var_dump($_SESSION["carrito"]); 

        if($encontrado!==-1)
        {
            echo "<br> <br> <br>sesión - carrito - encontrado === </br>";
            var_dump($_SESSION["carrito"][$encontrado]);
            echo "<br> <br> <br> sesión - carrito - encontrado - cantidad === </br>";
            var_dump($_SESSION["carrito"][$encontrado]["cantidad"]);
        }
}
 */
?>