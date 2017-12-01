<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA INSTITUCIONAL
*/
include 'header.php';
$dispositivo = dispositivo ();

?>
<!--- .inner-wrapper: contenido principal y específico del template -->
<div class="inner-wrapper">
   
    <header class="main-title-header">
    	<div class="container">
	        <h1>Bienvenidos</h1>
	    </div>
    </header>
   
    <div class="main-content-page-wrapper container">
	    <div id="page-historia" class="main-content-page animation-element fade-in">
	    	
	    	<p>
	    		Bienvenidos al Colegio Buenos Aires. Dentro de nuestra propuesta educativa, las activadades que se desarrollan en los Talleres Extraprogramáticos cumplen un rol protagónico en la formación integral del educando.
	    	</p>

	    	<p>
	    		Los aspectos más sobresalientes de algunos de ellos, se encuentran expresados en las páginas vinculadas a las cuales se accede eligiendo la imagen con el nombre del taller.
	    	</p>

	    	<section class="autoridades">
	    		<div id="acordionAutoridades" class="acordion">
	    			<h3 class="title-acordion acordion-color-celeste">
						<span class="icon-open"></span>
							Autoridades
					</h3>
	    			<div class="acordion-content">
	    				<p>
	    					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	    				</p>

	    				<p>
	    					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	    				</p>

	    			</div>
	    		</div>
	    	</section>

	    	<section class="historia">

	    		<h2 class="color-celeste">
	    			Historia
	    		</h2>

	    		<p>
		    		La Patria había cumplido un siglo y eran épocas muy duras y llenas de privaciones. Un joven maestro y profesor de Ciencias, proveniente de Rosario, provincia de Santa Fe, soñaba con fundar un instituto educativo. Desde temprana edad el joven <strong>Julio Faggioni</strong> había sentido el llamado de su vocación docente. Alentado por <strong>Catalina Donnoli</strong>, quien luego sería su esposa, hace realidad su sueño, inaugurando el 9 de enero de 1911 el <strong>COLEGIO BUENOS AIRES</strong>, en Serrano 341 del barrio de Villa Crespo.
		    	</p>

		    	<p>
		    		Villa Crespo era en ese año un bullicioso crisol de razas que comenzaba a crecer merced a los inmigrantes que se instalaban como obreros en la <strong>Fábrica Nacional de Calzado</strong>. Era también el hogar de la familia Faggioni, donde nacerían sus hijos Delia, Arístides, Jorge y Julio Néstor.
		    	</p>

		    	<p>
					Llega el año 1922. <strong>El COLEGIO BUENOS AIRES</strong> es por entonces la entidad privada docente de mayor prestigio de Villa Crespo. En ese año se traslada a su sede actual, Acevedo 355/57/59. 
		    	</p>
		    	
		    	<figure>
		    		<img src="<?php echo MAINSURL; ?>/assets/images/historia.jpg" alt="Colegio Buenos Aires Foto histórica" class="image-responsive">
		    	</figure>
		    	
		    	<?php if ( $dispositivo != 'pc' ) { 
		    	 	echo '<div class="read-more-wrapper">';
	    	 	} ?>
		    	

			    	<p>
			    		La actividad del profesor Faggioni fue infatigable: sin descuidar su labor docente y la conducción del <strong>COLEGIO BUENOS AIRES</strong>, fue <strong>Presidente</strong> de la <strong>Asociación Cooperadora del Colegio Nro. 2</strong> del Distrito escolar VII "<strong>Francisco D. Herrera</strong>". Siendo Presidente de las Asociaciones Cooperadoras de la Capital Federal, instauró <strong>la copa de leche obligatoria</strong> en las escuelas primarias. 
			    	</p>

			    	<p>
			    		Repentinamente, y cuando mucho se esperaba de su fecunda creatividad, fallece el 2 de abril de 1944, a los cincuenta y cinco años.
			    	</p>

			    	<p>
			    		Es entonces cuando asume la <strong>Dirección del Colegio</strong> el mayor de los hijos varones, <strong>Arístides Faggioni</strong>, quien con el apoyo de su madre y sus hermanos, despliega una vasta actividad docente, guiado por los principios de su padre.
			    	</p>

			    	<p>
			    		En 1961 el <strong>COLEGIO BUENOS AIRES</strong> cumple sus <strong>Bodas de Oro</strong>, pero el 8 de mayo de ese mismo año, fallece doña <strong>Catalina Donnoli de Faggioni</strong>, noticia que afectó profundamente a quienes supieron de su abnegación y ternura.
			    	</p>

			    	<p>
			    		El Colegio continuó con empuje y vitalidad. Entre los años 1962 y 64 se realizan obras de remodelación en el edificio, adecuándolo a los nuevos tiempos y a la jerarquía alcanzada.
			    	</p>

			    	<figure>
			    		<img src="<?php echo MAINSURL; ?>/assets/images/historia2.jpg" alt="Colegio Buenos Aires - Aniversario" class="image-responsive">
			    	</figure>
			    	
			    	<p>
			    		En 1965 se inaugura la <strong>Sección Secundaria</strong>. Al concluir el año 1969 egresa la primera promoción de bachilleres y peritos mercantiles.
			    	</p>
				<?php if ( $dispositivo == 'pc' ) { 
		    	 	echo '<div class="read-more-wrapper">';
	    	 	} ?>
			    	<p>
			    		Al fallecer don Arístides Faggioni, ocurrido en enero de 1970, le sucede en la <strong>Dirección de la Sección Primaria y Jardín de Infantes</strong> el menor de los hermanos: <strong>Julio Néstor Faggioni</strong>.
			    	</p>

			    	<p>
			    		A partir de 1974 se inauguran cinco nuevas secciones de Jardín de Infantes.
			    	</p>

			    	<p>
			    		La gestión del profesor Julio Néstor Faggioni en la dirección del <strong>COLEGIO BUENOS AIRES</strong> marcó un período de crecimiento y también de lucha, con una gran apertura al barrio que tanto amaba.
			    	</p>

			    	<p>
			    		Su prematuro fallecimiento, ocurrido en octubre de 1989, dejó en quienes lo conocieron el recuerdo de su avasallante personalidad.
			    	</p>

			    	<p>
			    		Desde entonces su hijo, <strong>Julio Guillermo Faggioni</strong>, es el heredero de la Dirección General de este afamado Colegio. A su gestión se debe la <strong>creación del turno</strong> tarde en las secciones primaria y secundaria, como así también la creación de la <strong>Sección Jardín Maternal</strong>, en ambos turnos.
			    	</p>

			    	<p>
			    		El <strong>COLEGIO BUENOS AIRES</strong>, pionero en la implementación de talleres extraprogramáticos, comenzó hace muchos años con Aeromodelismo, Inglés y Ajedrez. Se ha adecuado a las necesidades que impone el progreso, incorporando a través de los años nuevas propuestas.
			    	</p>

			    	<p>
			    		Cuenta en la actualidad con Inglés y Computación desde sala de 3 años, taller extraprogramático de Comunicación Social, editando mensualmente la revista <a href="<?php echo MAINSURL; ?>/edad-feliz"><strong>Edad Feliz</strong></a>, que poco a poco se va acercando a su número 100. Además incorporó talleres de <strong>Metodología de Tareas</strong> y del <strong>Estudio en EGB y Secundaria, y UBA XXI</strong> para que los alumnos de los últimos años preparen su ingreso a la Universidad.
			    	</p>

			    	<p>
			    		También cuenta con Gabinete Psicopedagógico para todas sus secciones.
			    	</p>

			    	<figure>
			    		<img src="<?php echo MAINSURL; ?>/assets/images/historia3.jpg" alt="Colegio Buenos Aires - Fachada" class="image-responsive">
			    	</figure>

			    	<p>
			    		Todo el alumnado, desde preescolar hasta 5° año concurre mensualmente a un magnífico campo que el Colegio posee en la localidad de Brandsen, donde se practican deportes, actividades recreativas, y actualmente se trabaja en un proyecto de <strong>Huerta Orgánica</strong>. En el área deportiva, aprovechando las posibilidades del campo, y mediante un arduo trabajo por parte de los docentes, se han obtenido importantes logros en Fútbol, Handbol, Volley, Atletismo y Hockey. En las instalaciones del Colegio los chicos practican Fútbol y las chicas Gimnasia Aeróbica, con éxito creciente en cada presentación.
			    	</p>

			    	<p>
			    		En el área de las artes, los alumnos tienen la posibilidad de desarrollar al máximo sus capacidades. Se organizan anualmente concursos literarios, obras de teatro y espectáculos de danza. Los trabajos de escenografía también los realizan los alumnos.
			    	</p>

			    	<p>
			    		En la sala de exposiciones se arman anualmente dos muestras artísticas, una a mitad de año y otra al final. En el taller de música los alumnos tienen acceso a todos los instrumentos musicales, y tienen la oportunidad de experimentar los diferentes estilos.
			    	</p>

			    	<p>
			    		La formación que este tradicional colegio del barrio de Villa Crespo brinda a su comunidad es digna de admiración. Ha sabido mantener a lo largo de los años, y a pesar de las dificultades, un excelente nivel humano y académico.
			    	</p>

		    	</div>

		    	<div class="read-more-button-wrapper">
			    	<button class="read-more-button-institucional btn btn-destacado">
			    		Continuar leyendo
			    	</button>
			    </div>

	    	</section>

	    	<aside class="separador-campo animation-element slide-up">
	    		<div class="separador-background-transparent">
		    		<h3>
		    			Campo de deportes
		    		</h3>

		    		<p>
		    			Visita Estancia La Chiquita, nuestro campo de deportes, para conocer el lugar.
		    		</p>

			    	<a href="<?php echo MAINSURL; ?>/campo-deportes" title="Estancia La Chiquita - Campo de deportes Colegio Buenos Aires" class="btn btn-sm btn-border-inverse">
			    		Ver campo
			    	</a>
		    	</div>
	    	</aside>

	    </div><!-- //.main-content-page -->
	
	<?php if ( $dispositivo == 'pc' )  : ?> 
		    	 	
	    <aside class="sidebar">
	       <?php getTemplate( 'sidebar' ); ?>
	   	</aside>

	<?php endif; ?> 

   </div><!-- //.main-content-page-wrapper -->

</div><!--- //.inner-wrapper -->

<?php include 'footer.php'; ?>