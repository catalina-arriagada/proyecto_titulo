<?php include("templates/cabecera.php"); 
include("DB/conexion.php");
include("DB/login/registrar.php"); ?>

   <main class="main">
            <section class="info">
                <h3 class="design__title">Regístrate</h3>
            </section>

            <section class="container-testimonials">
                <form method="post" name="f1">
                    <h3 class="section__title">Registrate y pide productos o citas a nuestro salón de belleza</h3>
                    <div class="testimonials__txt">
                        <label for="nombre">Nombre de usuario:</label>
                        <input type="text" pattern="[a-zA-Z0-9]+" name="nombre" placeholder="luisperez123" required>
                        <br>
                    </div>
                    <div class="testimonials__txt">
                        <label for="email">Email:</label>
                        <input type="text" name="email" placeholder="luisperez35@gmail.com" required>
                        <br>
                    </div>
                    <div class="testimonials__txt">    
                        <label for="telefono">Telefono:</label>
                        <input type="number" max= "999999999" name="telefono" placeholder="987656560" required>
                        <br>
                    </div>
                    <div class="testimonials__txt">
                        <label for="region">Región:</label>
                        <select name="region" onchange="cambia_comuna()">
                            <option value="-1" selected required>-- Seleccione --</option>
                            <option value="1">METROPOLITANA</option>
                            <option value="2">Arica-Parinacota</option>
                            <option value="3">Tarapacá</option>
                            <option value="4">Antofagasta</option>
                            <option value="5">Atacama</option>
                            <option value="6">Coquimbo</option>
                            <option value="7">Valparaíso</option>
                            <option value="8">O'Higgins</option>
                            <option value="9">Maule</option>
                            <option value="10">Ñuble</option>
                            <option value="11">Bío Bío</option>
                            <option value="12">Araucanía</option>
                            <option value="13">Los Ríos</option>
                            <option value="14">Los Lagos</option>
                            <option value="15">Aysén</option>
                            <option value="16">Magallanes y Antártica Chilena</option>
                        </select>
                        <br>
                    </div>
                    <div class="testimonials__txt">
                        <label for="comuna">Comuna:</label>
                        <select name="comuna"> 
                            <option value="-">
                        </select>
                        <!-- <select name="comuna">
                        <option value="-1" selected required>-- Seleccione --</option>
                            <option value="1">Arica</option>
                            <option value="2">Camarones</option>
                            <option value="3">Putre</option>
                            <option value="4">General Lagos</option>
                            <option value="5">Iquique</option>
                            <option value="6">Alto Hospicio</option>
                            <option value="7">Pozo Almonte</option>
                            <option value="8">Camiña</option>
                            <option value="9">Colchane</option>
                            <option value="10">Huara</option>
                            <option value="11">Pica</option>
                            <option value="12">Antofagasta</option>
                            <option value="13">Mejillones</option>
                            <option value="14">Sierra Gorda</option>
                            <option value="15">Taltal</option>
                            <option value="16">Calama</option>
                            <option value="17">Ollague</option>
                            <option value="18">San Pedro de Atacama</option>
                            <option value="19">Tocopilla</option>
                            <option value="20">María Elena</option>
                            <option value="21">Copiapó</option>
                            <option value="22">Caldera</option>
                            <option value="23">Tierra Amarilla</option>
                            <option value="24">Chañaral</option>
                            <option value="25">Diego de Almagro</option>
                            <option value="26">Vallenar</option>
                            <option value="27">Alto del Carmen</option>
                            <option value="28">Freirina</option>
                            <option value="29">Huasco</option>
                            <option value="30">La Serena</option>
                            <option value="31">Coquimbo</option>
                            <option value="32">Andacollo</option>
                            <option value="33">La Higuera</option>
                            <option value="34">Paihuano</option>
                            <option value="35">Vicuña</option>
                            <option value="36">Illapel</option>
                            <option value="37">Canela</option>
                            <option value="38">Los Vilos</option>
                            <option value="39">Salamanca</option>
                            <option value="40">Ovalle</option>
                            <option value="41">Combarbalá</option>
                            <option value="42">Monte Patria</option>
                            <option value="43">Punitaqui</option>
                            <option value="44">Río Hurtado</option>
                            <option value="45">Valparaíso</option>
                            <option value="46">Casablanca</option>
                            <option value="47">Concón</option>
                            <option value="48">Juan Fernández</option>
                            <option value="49">Puchuncaví</option>
                            <option value="50">Quintero</option>
                            <option value="51">Viña del Mar</option>
                            <option value="52">Isla de Pascua</option>
                            <option value="53">Los Andes</option>
                            <option value="54">Calle Larga</option>
                            <option value="55">Rinconada</option>
                            <option value="56">San Estéban</option>
                            <option value="57">La ligua</option>
                            <option value="58">Cabildo</option>
                            <option value="59">Papudo</option>
                            <option value="60">Petorca</option>
                            <option value="61">Zapallar</option>
                            <option value="62">Quillota</option>
                            <option value="63">La Calera</option>
                            <option value="64">Hijuelas</option>
                            <option value="65">La Cruz</option>
                            <option value="66">Nogales</option>
                            <option value="67">San Antonio</option>
                            <option value="68">Algarrobo</option>
                            <option value="69">Cartagena</option>
                            <option value="70">El Quisco</option>
                            <option value="71">El Tabo</option>
                            <option value="72">Santo Domingo</option>
                            <option value="73">San Felipe</option>
                            <option value="74">Catemu</option>
                            <option value="75">Llay-Llay</option>
                            <option value="76">Panquehue</option>
                            <option value="77">Putaendo</option>
                            <option value="78">Santa María</option>
                            <option value="79">Quilpué</option>
                            <option value="80">Limache</option>
                            <option value="81">Olmué</option>
                            <option value="82">Villa Alemana</option>
                            <option value="83">Rancagua</option>
                            <option value="84">Codegua</option>
                            <option value="85">Coinco</option>
                            <option value="86">Coltauco</option>
                            <option value="87">Doñihue</option>
                            <option value="88">Graneros</option>
                            <option value="89">Las Cabras</option>
                            <option value="90">Machalí</option>
                            <option value="91">Malloa</option>
                            <option value="92">Mostazal</option>
                            <option value="93">Olivar</option>
                            <option value="94">Peumo</option>
                            <option value="95">Pichidagua</option>
                            <option value="96">Quinta de Tilcoco</option>
                            <option value="97">Rengo</option>
                            <option value="98">San Vicente</option>
                            <option value="99">Pichilemu</option>
                            <option value="100">La Estrella</option>
                            <option value="101">Litueche</option>
                            <option value="102">Marchihue</option>
                            <option value="103">Navidad</option>
                            <option value="104">Paredones</option>
                            <option value="105">San Fernando</option>
                            <option value="106">Chépica</option>
                            <option value="107">Chimbarongo</option>
                            <option value="108">Lolol</option>
                            <option value="109">Nancagua</option>
                            <option value="110">Palmilla</option>
                            <option value="111">Peralillo</option>
                            <option value="112">Placilla</option>
                            <option value="113">Pumanque</option>
                            <option value="114">Santa Cruz</option>
                            <option value="115">Talca</option>
                            <option value="116">Constitución</option>
                            <option value="117">Curepto</option>
                            <option value="118">Empedrado</option>
                            <option value="119">Maule</option>
                            <option value="120">Pelarco</option>
                            <option value="121">Pencahue</option>
                            <option value="122">Río Claro</option>
                            <option value="123">San Clemente</option>
                            <option value="124">San Rafael</option>
                            <option value="125">Cauquenes</option>
                            <option value="126">Chanco</option>
                            <option value="127">Pelluhue</option>
                            <option value="128">Curicó</option>
                            <option value="129">Hualañé</option>
                            <option value="130">Licantén</option>
                            <option value="131">Molina</option>
                            <option value="132">Rauco</option>
                            <option value="133">Romeral</option>
                            <option value="134">Sagrada Familia</option>
                            <option value="135">Teno</option>
                            <option value="136">Vichuquén</option>
                            <option value="137">Linares</option>
                            <option value="138">Colbún</option>
                            <option value="139">Longaví</option>
                            <option value="140">Parral</option>
                            <option value="141">Retiro</option>
                            <option value="142">San Javier</option>
                            <option value="143">Villa Alegre</option>
                            <option value="144">Yerbas Buenas</option>
                            <option value="145">Chillán</option>
                            <option value="146">Bulnes</option>
                            <option value="147">Chillán Viejo</option>
                            <option value="148">El Carmen</option>
                            <option value="149">Pemuco</option>
                            <option value="150">Pinto</option>
                            <option value="151">Quillón</option>
                            <option value="152">San Ignacio</option>
                            <option value="153">Yungay</option>
                            <option value="154">Quirihue</option>
                            <option value="155">Cobquecura</option>
                            <option value="156">Coelemu</option>
                            <option value="157">Ninhue</option>
                            <option value="158">Portezuelo</option>
                            <option value="159">Ránquil</option>
                            <option value="160">Treguaco</option>
                            <option value="161">San Carlos</option>
                            <option value="162">Coihueco</option>
                            <option value="163">Ñiquén</option>
                            <option value="164">San Fabián</option>
                            <option value="165">San Nicolás</option>
                            <option value="166">Concepción</option>
                            <option value="167">Coronel</option>
                            <option value="168">Chiguayante</option>
                            <option value="169">Florida</option>
                            <option value="170">Hualqui</option>
                            <option value="171">Lota</option>
                            <option value="172">Penco</option>
                            <option value="173">San Pedro de la Paz</option>
                            <option value="174">Santa Juana</option>
                            <option value="175">Talcahuano</option>
                            <option value="176">Tomé</option>
                            <option value="177">Hualpén</option>
                            <option value="178">Lebu</option>
                            <option value="179">Arauco</option>
                            <option value="180">Cañete</option>
                            <option value="181">Contulmo</option>
                            <option value="182">Curanilahue</option>
                            <option value="183">Los Álamos</option>
                            <option value="184">Tirúa</option>
                            <option value="185">Los Ángeles</option>
                            <option value="186">Antuco</option>
                            <option value="187">Cabrero</option>
                            <option value="188">Laja</option>
                            <option value="189">Mulchén</option>
                            <option value="190">Nacimiento</option>
                            <option value="191">Negrete</option>
                            <option value="192">Quilaco</option>
                            <option value="193">Quilleco</option>
                            <option value="194">San Rosendo</option>
                            <option value="195">Santa Bárbara</option>
                            <option value="196">Tucapel</option>
                            <option value="197">Yumbel</option>
                            <option value="198">Alto Biobío</option>
                            <option value="199">Temuco</option>
                            <option value="200">Carahue</option>
                            <option value="201">Cunco</option>
                            <option value="202">Curarrehue</option>
                            <option value="203">Freire</option>
                            <option value="204">Galvarino</option>
                            <option value="205">Gorbea</option>
                            <option value="206">Lautaro</option>
                            <option value="207">Loncoche</option>
                            <option value="208">Melipeuco</option>
                            <option value="209">Nueva Imperial</option>
                            <option value="210">Padre Las Casas</option>
                            <option value="211">Perquenco</option>
                            <option value="212">Pitrufquén</option>
                            <option value="213">Pucón</option>
                            <option value="214">Teodoro Schmidt</option>
                            <option value="215">Toltén</option>
                            <option value="216">Vilcún</option>
                            <option value="217">Villarrica</option>
                            <option value="218">Cholchol</option>
                            <option value="219">Angol</option>
                            <option value="220">Collipulli</option>
                            <option value="221">Curacautín</option>
                            <option value="222">Ercilla</option>
                            <option value="223">Lonquimay</option>
                            <option value="224">Los Sauces</option>
                            <option value="225">Lumaco</option>
                            <option value="226">Purén</option>
                            <option value="227">Renaico</option>
                            <option value="228">Traiguén</option>
                            <option value="229">Victoria</option>
                            <option value="230">Valdivia</option>
                            <option value="231">Corral</option>
                            <option value="232">Lanco</option>
                            <option value="233">Los Lagos</option>
                            <option value="234">Máfil</option>
                            <option value="235">Mariquina</option>
                            <option value="236">Paillaco</option>
                            <option value="237">Panquipulli</option>
                            <option value="238">La Unión</option>
                            <option value="239">Futrono</option>
                            <option value="240">Lago Ranco</option>
                            <option value="241">Río Bueno</option>
                            <option value="242">Puerto Montt</option>
                            <option value="243">Calbuco</option>
                            <option value="244">Cochamó</option>
                            <option value="245">Fresia</option>
                            <option value="246">Frutillar</option>
                            <option value="247">Los Muermos</option>
                            <option value="248">Llanquihue</option>
                            <option value="249">Maullín</option>
                            <option value="250">Puerto Varas</option>
                            <option value="251">Castro</option>
                            <option value="252">Ancud</option>
                            <option value="253">Chonchi</option>
                            <option value="254">Curaco de Vélez</option>
                            <option value="255">Dalcahue</option>
                            <option value="256">Puqueldón</option>
                            <option value="257">Queilén</option>
                            <option value="258">Quellón</option>
                            <option value="259">Quemchi</option>
                            <option value="260">Quinchao</option>
                            <option value="261">Osorno</option>
                            <option value="262">Puerto Octay</option>
                            <option value="263">Purranque</option>
                            <option value="264">Puyehue</option>
                            <option value="265">Río Negro</option>
                            <option value="266">San Juan de la Costa</option>
                            <option value="267">San Pablo</option>
                            <option value="268">Chaitén</option>
                            <option value="269">Futaleufú</option>
                            <option value="270">Hualaihué</option>
                            <option value="271">Palena</option>
                            <option value="272">Coyhaique</option>
                            <option value="273">Lago Verde</option>
                            <option value="274">Aysén</option>
                            <option value="275">Cisnes</option>
                            <option value="276">Guaitecas</option>
                            <option value="277">Cochrane</option>
                            <option value="278">O'Higigns</option>
                            <option value="279">Tortel</option>
                            <option value="280">Chile Chico</option>
                            <option value="281">Río Ibáñez</option>
                            <option value="282">Punta Arenas</option>
                            <option value="283">Laguna Verde</option>
                            <option value="284">Río Verde</option>
                            <option value="285">San Gregorio</option>
                            <option value="286">Cabo de Hornos</option>
                            <option value="287">Antártica</option>
                            <option value="288">Porvenir</option>
                            <option value="289">Primavera</option>
                            <option value="290">Timaukel</option>
                            <option value="291">Natales</option>
                            <option value="293">Torres del Paine</option>
                            <option value="294">Santiago</option>
                            <option value="295">Cerrillos</option>
                            <option value="296">Cerro Navia</option>
                            <option value="297">Conchalí</option>
                            <option value="298">El Bosque</option>
                            <option value="299">Estación Central</option>
                            <option value="300">Huechuraba</option>
                            <option value="301">Independencia</option>
                            <option value="302">La Cisterna</option>
                            <option value="303">La Florida</option>
                            <option value="304">La Granja</option>
                            <option value="305">La Pintana</option>
                            <option value="306">Maipú</option>
                            <option value="307">Ñuñoa</option>
                            <option value="308">Pedro Aguirre Cerca</option>
                            <option value="309">Peñalolén</option>
                            <option value="310">Providencia</option>
                            <option value="311">Pudahuel</option>
                            <option value="312">Quilicura</option>
                            <option value="313">Quinta Normal</option>
                            <option value="314">Recoleta</option>
                            <option value="315">Renca</option>
                            <option value="316">San Joaquín</option>
                            <option value="317">San Miguel</option>
                            <option value="318">San Ramón</option>
                            <option value="319">Vitacura</option>
                            <option value="320">Puente Alto </option>
                            <option value="321">Pirque</option>
                            <option value="322">San josé de Maipo</option>
                            <option value="323">Colina</option>
                            <option value="324">Lampa</option>
                            <option value="325">Til Til</option>
                            <option value="326">San Bernardo</option>
                            <option value="327">Buin</option>
                            <option value="328">Calera de Tango</option>
                            <option value="329">Paine</option>
                            <option value="330">Melipilla</option>
                            <option value="331">Alhué</option>
                            <option value="332">Curacaví</option>
                            <option value="333">María Pinto</option>
                            <option value="334">San Pedro</option>
                            <option value="335">Talagante</option>
                            <option value="336">El Monte</option>
                            <option value="337">Isla de Maipo</option>
                            <option value="338">Padre Hurtado</option>
                            <option value="339">Peñaflor</option>
                        </select> -->
                        <br>
                    </div>
                    <div class="testimonials__txt">
                        <label for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" placeholder="Calle Ahumada 3247" required>
                        <br>
                    </div>
                    <div class="testimonials__txt">
                        <label for="contrasenia">Contraseña:</label>
                        <input type="password" name="contrasenia" required>
                        <br>
                    </div>
                    <div class="testimonials__txt">
                        <input type="submit" value="Registrar" name="btn_registrar">
                    </div>                    
                </form>
                <h3 class="section__title">Si ya tienes cuenta Ingresa aquí</h3>
                <a href="login.php" class="welcome__btn">Ingresa</a>
                
            </section>


                <script>
                var comunas_1=new Array("-","Santiago","Cerrillos","Cerro Navia","Conchalí","El Bosque","Estación Central","Huechuraba","Independencia","La Cisterna","La Florida","La Granja","La Pintana","Maipú","ñuñoa","Pedro Aguirre Cerda","Peñalolén","Providencia","Pudahuel","Quilicura","Quinta Normal","Recoleta","Renca","San Joaquín","San Miguel","San Ramón","Vitacura","Puente Alto","Pirque","San José de Maipo","Colina","Lampa","Til Til","San Bernardo","Buin","Calera de Tango","Paine","Melipilla","Alhué","Curacaví","María Pinto","San Pedro","Talagante","El Monte","Isla de Maipo","Padre Hurtado","Peñaflor");
                var comunas_2=new Array("-","Arica","Camarones","Putre","General Lagos");
                var comunas_3=new Array("-","Iquique","Alto Hospicio","Pozo Almonte","Camiña","Colchane","Huara","Pica");
                var comunas_4=new Array("-","Antofagasta","Mejillones","Sierra Gorda","Calama","Ollague","San Pedro de Atacama","María Elena","Tocopilla");
                var comunas_5=new Array("-","Chañaral","Diego de Almagro","Caldera","Copiapó","Tierra Amarilla","Alto del Carmen","Freirina","Huasco","Vallenar");
                var comunas_6=new Array("-","Canela","Illapel","Los Vilos","Salamanca","Andacollo","Coquimbo","La Higuera","La Serena","Paihuano","Vicuña","Combarbalá","Monte Patria","Ovalle","Punitaqui","Río Hurtado");
                var comunas_7=new Array("-","Isla de Pascua","Calle Larga","Los Andes","Rinconada de Los Andes","San Esteban","Limache","Olmué","Quilpué","Villa Alemana","Cabildo","La ligua","Papudo","Petorca","Zapallar","Hijuelas","La Calera","La Cruz","Nogales","Quillota","Algarrobo","Cartagena","El Quisco","El Tabo","San Antonio","Santo Domingo","Catemu","Llaillay","Panqueque","Putaendo","San Felipe","Santa María","Casablanca","Concón","Juan Fernández","Puchuncaví","Quintero","Valparaíso","Viña del Mar");
                var comunas_8=new Array("-","Codegua","Coínco","Coltauco","Doñihue","Graneros","Las Cabras","Machalí","Malloa","Olivar","Peumo","Pichidegua","Quinta de Tilcoco","Rancagua","Requínoa","Rengo","San Francisco de Mostazal","San Vicente de Tagua Tagua","La Estrella","Litueche","Marchigue","Navidad","Paredones","Pichilemu","Chépica","Chimbarongo","Lolol","Nancagua","Palmilla","Peralillo","Placilla","Pumanque","San Fernando","Santa Cruz");
                var comunas_9=new Array("-","Cauquenes","Chanco","Pelluhue","Curicó","Hualañé","Licantén","Molina","Rauco","Romeral","Sagrada Familia","Teno","Vichuquén","Colbún","Linares","Longaví","Parral","Retiro","San Javier de Loncomilla","Villa Alegre","Yerbas Buenas","Constitución","Curepto","Empedrado","Maule","Pelarco","Pencahue","Río Claro","San Clemente","San Rafael","Talca");
                var comunas_10=new Array("-","Bulnes","Chillán","Chillán Viejo","El Carmen","Pemuco","Pinto","Quillón","San Ignacio", "Yungay","Cobquecura","Coelemu","Ninhue","Portezuelo","Quirihue","Ránquil","Treguaco","Coihueco","Ñiquén","San Carlos","San Fabián","San Nicolás");
                var comunas_11=new Array("-","Arauco","Cañete","Contulmo","Curanilahue","Lebu","Los Álamos","Tirúa","Alto Biobío","Antuco","Cabrero","Laja","Los Ángeles","Mulchén","Nacimiento","Negrete","Quilaco","Quilleco","San Rosendo","Santa Bárbara","Tucapel","Yumbel","Chiguayante","Concepción","Coronel","Florida","Hualpén","Hualqui","Lota","Penco","San Pedro de la Paz","Santa Juana","Talcahuano","Tomé");
                var comunas_12=new Array("-","Carahue","Cholchol","Cunco","Curarrehue","Freire","Galvarino","Gorbea","Lautaro","Loncoche","Melipeuco","Nueva Imperial","Padre Las Casas","Perquenco","Pitrufquén","Pucón","Saavedra","Temuco","Teodoro Schmidt","Toltén","Vilcún","Villarrica","Angol","Collipulli","Curacautín","Ercilla","Lonquimay","Los Sauces","Lumaco","Purén","Renaico","Traiguén","Victoria");
                var comunas_13=new Array("-","Futrono","La unión","Lago Ranco","Río Bueno","Corral","Lanco","Los Lagos","Máfil","Mariquina","Paillaco","Panquipulli","Valdivia");
                var comunas_14=new Array("-","Ancud","Castro","Chonchi","Curaco de Vélez","Dalcahue","Puqueldón","Queilén","Quellón","Quemchi","Quinchao","Calbuco","Cochamó","Fresia","Frutillar","Llanquihue","Los Muermos","Maullín","Puerto Montt","Puerto Varas","Osorno","Puerto Octay","Purranque","Puyehue","Río Negro","San Pablo","San Juan de la Costa","Chaitén","Futaleufú","Hualaihué","Palena");
                var comunas_15=new Array("-","Aysén","Cisnes","Guaitecas","Cochrane","O'Higgins","Tortel","Coyhaique","Lago Verde","Chile Chico","Río Ibáñez");
                var comunas_16=new Array("-","Antártica","Cabo de Hornos","Laguna Blanca","Río Verde","San Gregorio","Porvenir","Primavera","Timaukel","Natales","Torres del Paine");

                var todasComunas = [
                    [],
                    comunas_1,
                    comunas_2,
                    comunas_3,
                    comunas_4,
                    comunas_5,
                    comunas_6,
                    comunas_7,
                    comunas_8,
                    comunas_9,
                    comunas_10,
                    comunas_11,
                    comunas_12,
                    comunas_13,
                    comunas_14,
                    comunas_15,
                    comunas_16,
                ];

                function cambia_comuna(){ 
                    //tomo el valor del select de la region elegida 
                    var region 
                    region = document.f1.region[document.f1.region.selectedIndex].value 
                    //miro a ver si la region está definida
                    if (region != 0) { 
                        //si estaba definida, entonces coloco las opciones de la comuna correspondiente. 
                        //selecciono el array de comuna adecuado 
                        mis_comunas=todasComunas[region]
                        //calculo el numero de comunas 
                        num_comunas = mis_comunas.length 
                        //marco el número de comunas en el select 
                        document.f1.comuna.length = num_comunas
                        //para cada comuna del array, la introduzco en el select 
                        for(i=0;i<num_comunas;i++){ 
                            document.f1.comuna.options[i].value=mis_comunas[i] 
                            document.f1.comuna.options[i].text=mis_comunas[i] 
                        }	
                    }else{ 
                        //si no había comuna seleccionada, elimino las comunas del select 
                        document.f1.comuna.length = 1 
                        //coloco un guión en la única opción que he dejado 
                        document.f1.comuna.options[0].value = "-" 
                        document.f1.comuna.options[0].text = "-" 
                    } 
                    //marco como seleccionada la opción primera de comuna 
                    document.f1.comuna.options[0].selected = true 
                }

                </script>



        </main>
<script type="text/javascript" src="js/login/evitar_reenvio.js"></script>
<?php include("templates/pie.php"); ?>