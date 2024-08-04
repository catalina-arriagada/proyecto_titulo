<?php

session_start();

if(!isset($_SESSION['id'])){
    echo "<script>alert('¡No existe una sesión abierta!');</script>
    <script>
        setTimeout(function(){ window.location="."'../../login.php'" ."; }, 100);
    </script>";

} else {
   
    session_destroy();
    echo "<script>alert('Has cerrado sesión. ¡Vuelve Pronto!');</script>
    <script>
        setTimeout(function(){ window.location="."'../../index.php'" ."; }, 100);
    </script>
    ";

}

//header("Location: ../../login.php");
?>

