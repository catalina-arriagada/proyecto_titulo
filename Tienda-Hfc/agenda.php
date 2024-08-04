<?php include("templates/cabecera.php");  

session_start();

include("DB/conexion.php");
include("DB/citas/agendar.php");
 
if(!isset($_SESSION['id'])){
    header('Location: login.php');
    exit;
} else {

//echo $_SESSION['id'];
//echo $_SESSION['nombre'];

echo '<main class="main">
        <section class="service__title">
            <h3 class="design__title">Agendar Cita</h3>
        </section> 

        <section class="container-testimonials">
            <form method="POST">  
              <h3 class="section__title">Pide tu cita para nuestro salón de belleza aquí y te contactaremos a la brevedad</h3>
              <p class="testimonials__txt" style="margin-top: 15px; color: red;">* Campos obligatorios</p> 
            <div class="testimonials__txt">
                <label>Fecha de Cita<span style="color: red;">*</span></label>
                <input type="date" name="fecha" min="2022-07-05" max="2022-12-30" placeholder="mm/dd/aaaa">      
            </div>
            <div class="testimonials__txt">
                <label>Hora de Cita<span style="color: red;">*</span></label>
                <input type="time" name="hora" min="11:30" max="17:00" placeholder="12:30">      
            </div>
         		<div class="testimonials__txt">
         		 <label>Servicio Solicitado<span style="color: red;">*</span></label>

            ';

            $query = $pdo->prepare("SELECT * FROM servicios");
            $query->execute();
            $resultados = $query ->fetchAll(PDO::FETCH_OBJ);
            
            echo'<select name="servicioId" required="required">
         		   	<option value="" disabled selected>Seleccione...</option>';
                   
                if($query-> rowCount() > 0){
                 
                foreach ($resultados as $resultado) {
                    echo '<option value="'. $resultado -> id. '">
                    '. $resultado -> nombre.'</option>';
                  }
                }
         		 echo '</select> 	
         		</div>
                <div class="testimonials__txt">
                <label>Altura del Cabello<span style="color: red;">*</span></label>
                <select name="cabello" required="required">
                  <option value="" disabled selected>Seleccione...</option>
                  <option value="corto">Corto</option>
                  <option value="medio">Medio</option>
                  <option value="largo">Largo</option>                                             
                </select>  
               </div>
               <p class="testimonials__txt" style="margin-top: 15px; color: red;">Altura del cabello Corto: hasta abajo de las orejas, Medio: hasta los hombros, Largo: hasta la cintura.</p> 
         		<div class="testimonials__txt">
         			<label>Información extra:</label>
              <br>
              <br>
         			<textarea name="comentarios" placeholder="Ingrese información extra sobre su pedido aquí" rows="6" style="width: 100%"></textarea>
         		</div>
               <div class="testimonials__txt">
                <input type="submit" value="Agendar" class="welcome__btn" name="agendado">

         		  </div>	
         	</form>       
        </section>

    </main>
    
    <script type="text/javascript" src="js/login/evitar_reenvio.js"></script>';

  }


  ?>

<?php include("templates/pie.php"); ?>