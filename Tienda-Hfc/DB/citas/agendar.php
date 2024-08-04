<?php 

try {
    if (isset($_POST['agendado'])) {
        include('DB/conexion.php');

        $fecha = strtotime($_POST['fecha']);
        $fecha_formateada = date('Y-m-d', $fecha);
    
        $hora = strtotime($_POST['hora']);
        $hora_formateada = date("H:i:s", $hora);
    
        $servicioId = $_POST['servicioId'];
        $cabello = $_POST['cabello'];
        $comentarios = $_POST['comentarios'];
 
        $ncFecha = 'fecha';
        $ncHora = 'hora';
        $ncServicio = 'servicioId';
        $ncCabello = 'cabello';
        $ncComentarios = 'comentarios';
        $ncUsuario = 'usuarioId';
 
        $query = $pdo->prepare("INSERT INTO citas($ncFecha, $ncHora, $ncServicio, $ncCabello, comentarios, usuarioId) VALUES (:$ncFecha, :$ncHora, :$ncServicio, :$ncCabello, :$ncComentarios, :$ncUsuario)");
        $query->bindParam(":$ncFecha", $fecha_formateada, PDO::PARAM_STR);
        $query->bindParam(":$ncHora", $hora_formateada, PDO::PARAM_STR);
        $query->bindParam(":$ncServicio", $servicioId, PDO::PARAM_STR);
        $query->bindParam(":$ncCabello", $cabello, PDO::PARAM_STR);
        $query->bindParam(":$ncComentarios", $comentarios, PDO::PARAM_STR);
        $query->bindParam(":$ncUsuario", $_SESSION['id'], PDO::PARAM_INT);
        $query->execute();

        //alert y redireccion:
        echo("<script>alert(\"Se ha agendado tu cita con éxito para el $fecha_formateada a las $hora_formateada\");</script>");

        echo "<script>
                setTimeout(function(){ window.location="."'confirma_cita.php'" ."; }, 100);
            </script>";
    }
}

catch (PDOException $err){
    echo "<main class='main'>
            <section class='container-testimonials'>
                <p class='testimonials__txt'>Error: la hora y fecha que ha ingresado ya está registrada. Elija otra hora/fecha.</p>
                <p class='testimonials__txt'>Error: ".$err->getMessage()."</p>
            </section>
        </main>";
        die();
}

?>