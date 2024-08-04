<?php include("templates/cabecera.php"); ?>
 
    <main class="main">
      <section class="welcome">
        <h2 class="section__title">¡Bienvenid@!</h2>
        <p class="welcome__txt"> Somos una tienda especializada en tinturas veganas color fantasía, y productos de estética capilar. También somos un Salón de Belleza especializado en coloración y cuidado capilar.</p>
        <a href="preguntasfrecuentes.php" class="welcome__btn">MÁS INFO</a>
      </section>
      <section class="container-design">
        <div class="design__item">
          <h3 class="design__title">Tinturas Temporales y Artesanales</h3>
          <img src="./img/15.jpg" alt="" class="design__img">
        </div>
        <div class="design__item">
          <h3 class="design__title">Tinturas Semi-permanentes Pravana</h3>
          <img src="./img/16.jpg" alt="" class="design__img">
        </div>
        <div class="design__item">
          <h3 class="design__title">Cuidado Capilar</h3>
          <img src="./img/cuidado.jpg" alt="" class="design__img">
        </div>
        <div class="design__item">
          <h3 class="design__title">Decolorantes</h3>
          <img src="./img/deco.jpg" alt="" class="design__img">
        </div>
      </section>

      <section class="container-testimonials">
        <h3 class="section__title">NUESTROS CLIENTES</h3>
        <img src="./img/cliente1.png" alt="" class="testimonials__img">
        <p class="testimonials__txt">¡Me encantan las tinturas de Hair Fashion Colors! El "Rojo" me vino de maravilla, y le dí un toque más rosa para que combinara con mi pelo. Y nos queda el verde, celeste, negro y morado. Mi estudio fotográfico Pedrito Marinello está muy contento con los resultados, 100% recomendado.</p>
        <p class="testimonials__name">Sandra Velez</p>
      </section>
      
      <section class="container-tips">
        <div class="design__item">
          <h3 class="design__title">Servicios de Peluquería</h3>
          <img src="./img/pelu.jpg" alt="" class="design__img">
        </div>
        <div class="container-box">
          <div class="box">
            <div class="box__icon"><i class="fas fa-cog"></i></div>
            <div class="box__content">
              <h3 class="box__title">CORTES Y PEINADOS</h3>
              <p class="box__txt">Cortes de mujer, hombre, niño (hasta 10 años), Corte chasquilla/flequillo, Brushing, alisados, etc.</p>
            </div>
          </div>
          <div class="box">
            <div class="box__icon"><i class="fas fa-university"></i></div>
            <div class="box__content">
              <h3 class="box__title">COLORACIONES</h3>
              <p class="box__txt">Retoques, pigmentaciones, decoloraciones, despigmentación, iluminación, etc. </p>
            </div>
          </div>
          <div class="box">
            <div class="box__icon"><i class="fas fa-wrench"></i></div>
            <div class="box__content">
              <h3 class="box__title">REPARACIÓN CAPILAR</h3>
              <p class="box__txt">Anti-frizz, moldeados, lavados, Olaplex, Botox capilar, etc.</p>
            </div>
          </div>
        </div>
      </section>
      <br>
    </main>
   

  <?php include("templates/pie.php"); 
  
 /*  $arrayas = [
    'Uno' => "hola",
    'Dos' => 2,
    'Tres' => false,


  ]; */

 /*  $_SESSION['carrito'][1]['colorId']; */

  ?>