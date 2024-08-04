<?php 
//insertar datos del usuario en la base de datos en la tabla "usuarios"

/* if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['region']) && !empty($_POST['comuna']) && !empty($_POST['direccion']) && !empty($_POST['contrasenia'])) {
  
    $sentenciaSQL= $pdo->prepare("INSERT INTO usuarios (nombre, email, telefono, region, comuna, direccion, contrasenia) VALUES (:nombre, :email, :telefono, :region, :comuna, :direccion, :contrasenia);");
    $sentenciaSQL->bindParam(':nombre',$nombre);
    $sentenciaSQL->bindParam(':email',$email);
    $sentenciaSQL->bindParam(':telefono',$telefono);
    $sentenciaSQL->bindParam(':region',$region);
    $sentenciaSQL->bindParam(':comuna',$comuna);
    $sentenciaSQL->bindParam(':direccion',$direccion);
    $pass_fuerte = password_hash($contrasenia, PASSWORD_BCRYPT);
    $sentenciaSQL->bindParam(':contrasenia',$pass_fuerte);
    $sentenciaSQL->execute();
} */

include('DB/conexion.php');
session_start();

try {
        if (isset($_POST['btn_registrar'])) {
        
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $region = $_POST['region'];
            $comuna = $_POST['comuna'];
            $direccion = $_POST['direccion'];
            $contrasenia = $_POST['contrasenia'];
            $contrasenia_hash = password_hash($contrasenia, PASSWORD_BCRYPT);
        
            $query = $pdo->prepare("SELECT * FROM usuarios WHERE email=:email");
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->execute();
        
            if ($query->rowCount() > 0) {
                echo "<script>console.log('La dirección de email que ha digitado ya está registrada!');</script>";
                echo "<script>alert('La dirección de email que ha digitado ya está registrada!');</script>";
            }
        
            if ($query->rowCount() == 0) {
                $query = $pdo->prepare("INSERT INTO usuarios(nombre, email, telefono, region, comuna, direccion, contrasenia) VALUES (:nombre, :email, :telefono, :region, :comuna, :direccion, :contrasenia_hash);");
                //Sustituye 
                $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
                $query->bindParam("email", $email, PDO::PARAM_STR);
                $query->bindParam("telefono", $telefono, PDO::PARAM_STR);
                $query->bindParam("region", $region, PDO::PARAM_STR);
                $query->bindParam("comuna", $comuna, PDO::PARAM_STR);
                $query->bindParam("direccion", $direccion, PDO::PARAM_STR);
                $query->bindParam("contrasenia_hash", $contrasenia_hash, PDO::PARAM_STR);
                $result = $query->execute();
                
                if ($result) {
                    echo "<script>console.log('Registro exitoso!');</script>";
                    echo "<script>alert('Registro exitoso!');</script>
                    <script>
                        setTimeout(function(){ window.location="."'login.php'" ."; }, 100);
                    </script>";
                } else {     
                    echo "<script>console.log('algo va mal!');</script>";
                    echo "<script>alert('algo va mal!');</script>";
                }           
            }
        }

    }

    catch (PDOException $err) {
        echo "<main class='main'>
            <section class='container-testimonials'>
                <p class='testimonials__txt'>Error: el usuario que ha ingresado ya existe en la base de datos. Inténtelo de nuevo con otro nombre.</p>
                <p class='testimonials__txt'>Error: ".$err->getMessage()."</p>
            </section>
        </main>";
        die();
    }

?>