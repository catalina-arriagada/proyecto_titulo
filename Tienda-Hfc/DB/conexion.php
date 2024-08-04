<?php

    $link = 'mysql:host=localhost;dbname=tienda_hfc;charset=utf8';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO ($link,$user,$pass);
        //seteo la base de datos (que php lea los datos de la bd):
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //al $pdo le doy caracteres occidentales:
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
    } catch (PDOException $e) {
        echo "<main class='main'>
            <section class='container-testimonials'>
                <p class='testimonials__txt'>Error: ".$e->getMessage()."</p>
            </section>
        </main>";
        die();
    }

?>