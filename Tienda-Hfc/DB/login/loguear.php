<?php
/* require './DB/conexion.php';
session_start(); */

//$_SESSION['email']=$email;
//$_SESSION['contrasenia']=$contrasenia;

/* if(!empty($_POST['email']) && !empty($_POST['contrasenia'])) {
  
    $sentenciaSQL= $conn->prepare('SELECT id, email, contrasenia FROM usuarios WHERE email = :email');
    $sentenciaSQL-> bindParam(':email', $_POST['email']);
    $sentenciaSQL->execute();

    $resultados = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
    $mensaje = '';

    if (count($resultados) > 0 && password_verify($_POST['contrasenia'], $resultados['contrasenia'])) {
        $_SESSION['usuario_id'] = $resultados ['id'];
        header("Location: ../index.php");
    } else {
        $mensaje = 'las credenciales no son correctas';
    }
    
} */


include('DB/conexion.php');
session_start();
 
if (isset($_POST['btn_loguear'])) {
 
    $nombre = $_POST['nombre'];
    $contrasenia = $_POST['contrasenia'];
 
    $query = $pdo->prepare("SELECT * FROM usuarios WHERE nombre=:nombre");
    $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo "<script>console.log('El nombre de usuario y/o contraseña está mal!');</script>";
        echo "<script>alert('El nombre de usuario y/o contraseña está mal!');</script>";
    } else {
        if (password_verify($contrasenia, $result['contrasenia'])) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['nombre'] = $result['nombre'];
            echo "<script>console.log('Felicidades, te has logueado!');</script>";
            echo "<script>alert('Felicidades, te has logueado!');</script>
            <script>
                setTimeout(function(){ window.location="."'index.php'" ."; }, 100);
            </script>";
        } else {
            echo "<script>console.log('La contraseña está mal!');</script>";
            echo "<script>alert('La contraseña está mal!');</script>";
        }
    }
}

?>