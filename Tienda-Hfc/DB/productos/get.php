<?php

include('DB/conexion.php');

try {
    if (isset($_GET['id']) >= 0) {
        //creo productos con url dinámica ej: localhost/productoid?1
        $id = $_GET['id'];

        $query = $pdo->prepare("SELECT * FROM productos WHERE id=$id");
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
 
        if (!$result) {
            echo "<script>console.log('no ha sido efectiva la consulta');</script>";
        } else {
            //var_dump($result);
            echo "<script>console.log('si, ha resultado la consulta');</script>";
        }
    }
}

catch (PDOException $e){
    echo "<main class='main'>
            <section class='container-testimonials'>
                <p class='testimonials__txt'>Error: ".$e->getMessage()."</p>
            </section>
        </main>";
        die();
}

?>