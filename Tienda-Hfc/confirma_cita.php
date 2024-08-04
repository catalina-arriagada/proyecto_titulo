<?php include("templates/cabecera.php");

session_start();

include("DB/conexion.php");
 
if(!isset($_SESSION['id'])){
    header('Location: login.php');
    exit;
} else {

//echo $_SESSION['id'];

echo '

<main class="main">
    <h3 class="producto_titulo">Presentarse con este comprobante 20 minutos antes de la hora de su cita.</h3>
    <dl>
         <dt class="testimonials__txt"><b>Usuario:</b></dt>
            <p class="testimonials__txt" value "">'.$_SESSION['nombre'].'</p>';

            $query = $pdo->prepare("SELECT * FROM citas ORDER BY id DESC LIMIT 1");
            $query->execute();
            $resultados = $query ->fetchAll(PDO::FETCH_OBJ);
                
    echo'<dt class="testimonials__txt"><b>Fecha de Cita:</b></dt>
            '; if($query-> rowCount() > 0){
                foreach ($resultados as $resultado) {
            echo '
            <p class="testimonials__txt">'.$resultado -> fecha.'</p>
        <dt class="testimonials__txt"><b>Hora de Cita:</b></dt>
            <p class="testimonials__txt">'.$resultado -> hora.'</p>';
            }
        }
    
            $query1 = $pdo->prepare("SELECT * FROM citas
            INNER JOIN servicios
            ON citas.servicioId = servicios.id
            ORDER BY citas.id DESC LIMIT 1;");
            $query1->execute();
            $results = $query1 ->fetchAll(PDO::FETCH_OBJ);
    
    echo    ' 
        <dt class="testimonials__txt"><b>Servicio/s Solicitado/s:</b></dt>
        '; if($query1-> rowCount() > 0){
            foreach ($results as $result) {
    echo '
            <p class="testimonials__txt">'.$result -> nombre.'</p>';
        }
    }

    echo '
        <dt class="testimonials__txt"><b>Altura del Cabello:</b></dt>
            <p class="testimonials__txt">'.$result -> cabello.'</p>
    </dl>
    <br>';
    //<h3 class="testimonials__txt" style="color:red;">*Se ha enviado una copia de este comprobante a su email.</h3>
    echo '<a href="index.php" class="welcome__btn">Volver al inicio</a>
    <br>
    <br>
    <hr>
</main>


';

}


?>




<?php include("templates/pie.php"); ?>