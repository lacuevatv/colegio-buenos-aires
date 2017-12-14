<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA NIVELES
 * TEMPLATES: niveles educativo sin sidebar, inicial, primaria y secundaria con. Por lo tanto, se separa al principio, ya que el header también es distinto.
*/

//TEXTOS e IMAGEN SUPERIOR
$textoNiveles = array(
	'imagenHeader' => array(
		'inicial'    => 'header-inicial.jpg',
		'primaria'   => 'header-primario.jpg',
		'secundario' => 'header-secundario.jpg',
	),
	'tituloHeader' => array(
		'inicial'    => 'Nivel Inicial',
		'primaria'   => 'Nivel Primario',
		'secundario' => 'Nivel Secundario',
	),
	'textoHeader' => array(
		'inicial'    => 'A partir de la sala de 2 años nos proponemos a lograr la integración del niño a un pequeño grupo social, acompañando y estimulando el paso del juego solitario al paralelo, recurriendo al juego simbólico.',
		'primaria'   => 'Educación común y laica, con características inclusivas y de un pensamiento abierto a los cambios socio-culturales que demandan nuevas pedagogías y nuevas tecnologías para lograr una enseñanza de aprendizajes significativos en nuestros alumnos.',
		'secundario' => 'Hemos elaborado a lo largo de años de experiencia, un Proyecto Educativo que se condice con nuestro criterio de Formación Integral. Realizamos un seguimiento continuo e individualizado de cada uno de nuestros alumnos',
	),
	'textoProyecto' => array(
		'inicial'    => 'El proyecto pedagógico del Colegio Buenos Aires está diseñado en función al desarrollo personal y social del niño y su alfabetización cultural, permitiendo las bases para una Educación Integral. A partir de sala de 2 años todas las actividades se desarrollan, teniendo como eje la centralidad en el juego, la multitarea y el trabajo en pequeños grupos como modalidad organizativa para estimular un aprendizaje enriquecido con las experiencias individuales y los saberes que cada niño trae como valor cultural familiar.',
		'primaria'   => 'El proyecto pedagógico del Colegio Buenos Aires está diseñado en función al desarrollo personal y social del niño y su alfabetización cultural, permitiendo las bases para una Educación Integral. Respetando el hecho de que todos los alumnos tienen necesidades educativas propias y todos tienen derecho a que las propuestas curriculares y didácticas sean elaboradas de modo tal que en su marco les sea posible aprender.',
		'secundario' => 'Hemos elaborado a lo largo de años de experiencia, un Proyecto Educativo que se condice con nuestro criterio de Formación Integral. Realizamos un seguimiento continuo e individualizado de cada uno de nuestros alumnos. Para ello, debemos tener en cuenta los grandes cambios que los adolescentes experimentan tanto en los aspectos físico e intelectual, como afectivo, entre los 12 y 17 años.',
	),
	'textoDeportes' => array(
		'inicial'    => '<p><strong>SALIDAS AL CAMPO "LA CHIQUITA"</strong>: A partir de Sala de 5 años, los niños asisten mensualmente a nuestra Estancia "La Chiquita", en la localidad de Cnel. Brandsen, para realizar una jornada de Vida en la Naturaleza: Deportes y Recreación y Area Socio-afectiva, a cargo de profesores de Educación Física, quienes planifican las actividades en relación con los ojetivos del aula. Es objetivo d esta jornada, desarrollar en los niños el amor por la naturaleza y la preservación del medio ambiente desde la experiencia directa, estimulando la integración de los grupos que concurren cada semana y adecuando las actividades a la edad evolutiva de los alumnos.</p><p>Anualmente se realiza el tradicional "Día del Egresadito". Al finalizar el año, las familias de preescolar, docentes, profesores y directivos, a través de juegos, canciones y mucho amor, se brinda a las niñas y niños de ese nivel, una inolvidable y emotiva despedida.</p><p>En el mes de marzo, el Colegio Buenos Aires invita a los padres que ingresan por primera vez, a conocer y recorrer el lugar acompañados por los profesores y directivos quienes los interiorizan sobre las actividades que sus hijos e hijas desarrollarán en el transcurso del año.</p>',
		'primaria'   => '<p>Los alumnos del Nivel Primario asisten mensualmente a nuestra <strong>Estancia “La Chiquita”</strong>, en la localidad de Cnel. Brandsen, para realizar una jornada  de Vida en la Naturaleza;  Deportes y Recreación  y  Area Socio-afectiva,, a cargo de profesores de Educación Física, quienes planifican las actividades en relación con los objetivos del aula   Es objetivo de esta jornada, desarrollar en los niños el amor por la naturaleza y la preservación del medio ambiente desde la experiencia directa, estimulando la integración de los grupos que concurren cada semana y adecuando las actividades a la edad evolutiva de los alumnos.</p><p>En el mes de marzo, el Colegio Buenos Aires invita a los padres que ingresan por primera vez, a conocer y recorrer el lugar acompañados por los profesores y directivos quienes los interiorizan sobre las actividades que sus hijos e hijas desarrollarán en el transcurso del año.</p>',
		'secundario' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
	),
	'textoHorario' => array(
		'manana' => array(
			'simple' => array(
				'inicial'    => '8:00 a 11:50hs',
				'primaria'   => '8:00hs a 12:45hs',
				'secundario' => '8:00 a 12:45hs',
			),
			'complementaria' => array(
				'inicial'    => 'Almuerzo y descanso hasta las 14hs. <br>Almuerzo, descanso y talleres hasta las 16:15hs.',
				'primaria'   => 'Almuerzo: hasta las 14hs.<br> Almuerzo  y  Talleres: hasta las 16:30hs.',
				'secundario' => 'Almuerzo hasta las 14hs. <br>Almuerzo y talleres hasta las 16:30hs.',
			),
		),
		'tarde' => array(
			'simple' => array(
				'inicial'    => '13:30 a 17:00hs',
				'primaria'   => '13:15hs  a  17:45hs',
				'secundario' => '13:15 a 17:45hs',
			),
			'complementaria' => array(
				'inicial'    => 'Talleres, almuerzo y descanso desde las 8:30hs.',
				'primaria'   => 'Talleres y almuerzo: desde las 8:00hs.',
				'secundario' => 'Talleres y Almuerzo desde las 8:00hs.',
			),
		),
	),
	'complementaria' => array(
		'inicial'    => '<p>A partir de Sala de 2 años se puede optar por la Jornada Complementaria con horarios extendidos en contra turno. Esta sala de Jornada Complementaria se conforma por nenes de las salas de 2 y 3 años o de 4 y 5 años  y  están a cargo dos docentes. Las actividades son de juego/tarea; se realizan proyectos mensuales favoreciendo al desarrollo del lenguaje oral, la expresión espontánea, ofreciéndoles diversas técnicas y elementos que orienten el desarrollo de la capacidad creadora. </p><p><strong>Almuerzo</strong>: pueden optar por la vianda individual  o  por el servicio de catering que ofrece el Colegio.<br> <strong>Materias Especiales</strong>: Inglés  y  Computación <em>(para las salas de 4 y 5 años)</em></p>',
		'primaria'   => '<p>En nivel Primario se puede optar por la Jornada Complementaria con horarios extendidos en contra turno. La organización de los Talleres está orientada hacia la posibilidad de ampliar y profundizar en áreas del conocimiento, desde un espacio propicio para desarrollar las potencialidades y estimular la creatividad en diversas áreas.</p> <p><strong>Almuerzo</strong>: pueden optar por la vianda individual  o  por el servicio de catering que ofrece el Colegio.</p><p> <strong>Materias especiales</strong>: Educación Plástica,  Educación Física, Idioma extranjera, Informática, Comunicación Social el Taller de Tareas a cargo de maestras de grado para servir de apoyo en las diversas áreas del conocimiento.</p>',
	),
);

global $dispositivo;
$slug = getPageVar( cleanUri() );//variante de la pagina
include 'header.php';
?>

<!--- .inner-wrapper: contenido principal y específico del template -->
<div class="inner-wrapper">

<?php 
//template niveles sin sidebar
if ( $slug == '' ) : 
	
	getTemplate( 'niveles-main-template' );

//template inicial, primaria secundaria con sidebar
 else : ?>
    
    <header class="niveles-header" style="<?php echo 'background-image: url('.MAINSURL.'/assets/images/'.$textoNiveles['imagenHeader'][$slug].')'; ?>">
    	<div class="container">
	        <h1>
	        	<?php echo $textoNiveles['tituloHeader'][$slug]; ?>
	        </h1>
	        <p>
	    		<?php echo $textoNiveles['textoHeader'][$slug]; ?>
	    	</p>
	    </div>
    </header>
   
    <div class="main-content-page-wrapper container">
		    
	    <div class="main-content-page niveles">
	<!--- BIENVENIDA -->
		    <section class="nivel-intro">

	    	<?php if ( $slug == 'inicial' ) : ?>
		    	
		    	<p class="msj-bienvenida animation-element fade-in-scroll">
		    		El colegio Buenos Aires se propone en el Nivel Inicial propiciar la integración de los niños y sus familias al sistema educativo institucional, fortaleciendo vínculos a través del diálogo constructivo y el respeto mutuo, en un ambiente colaborativo y en un clima de afecto y confianza, a fin de afianzar la seguridad en los niños desde las áreas: cognitiva, social y expresiva; ofreciendo oportunidades de actividades educativas que promueven el desarrollo de las capacidades creativas y el placer por el conocimiento desde la construcción de escenarios lúdicos que le permitan desarrollar sus capacidades individuales y sociales.
		    	</p>

	    	<?php elseif ( $slug == 'primaria' ) : ?>
	    		
	    		<p class="msj-bienvenida animation-element fade-in-scroll">
	    			El Colegio Buenos Aires en el Nivel Primario, ofrece una educación común y laica, con características inclusivas y de un pensamiento abierto a los cambios socio-culturales que demandan nuevas pedagogías y nuevas tecnologías para lograr una enseñanza de aprendizajes significativos en nuestros alumnos. Como propósito fundamental, nuestra institución, promueve una educación integral, pensada para desarrollar las capacidades de nuestros niños en las diversas áreas, respetando las necesidades individuales y los intereses comunes; teniendo como criterio central, fortalecer los vínculos entre los niños y con las familias, a través del diálogo constructivo y el respeto mutuo, ofreciendo espacios propicios, en un ambiente social colaborativo y en un clima de afecto y confianza, pensado para que trascienda el ámbito escolar, colaborando en su vida social, creando una conciencia colectiva de la importancia del cuidado del medio social y ambiental en el cual los niños crecen y desarrollan sus oportunidades como individuos únicos y singulares.
	    		</p>

	    	<?php else : ?>
	    		<div class="msj-bienvenida animation-element fade-in-scroll">
		    		<h4>
		    			El futuro está cerca, vayamos a su encuentro.
		    		</h4>
		    		<p>
						Creemos que a la hora de elegir una institución educativa para continuar el camino de la formación es necesario conocer su propuesta.
					</p>
					<p>
						Historicamente, El Colegio Buenos Aires, se ha caracterizado por su visión de futuro y su dinámica de superación permanente. Es por eso que las diferentes propuestas pueden llegar a sufrir algunas modificaciones en cada Ciclo Lectivo, pero éstas se enmarcarán siempre dentro de nuestro ideario.
						</p>
					<p>
						Trabajamos permanentemente en la actualización de los contenidos curriculares, de manera que sirvan como respuesta a una realidad cada vez más dinámica y cambiante.
		    		</p>
		    	</div>
	    	<?php endif; ?>
		    		

		    	<div id="acordionNiveles" class="acordion fade-in-scroll">
		    		<h3 class="title-acordion">
						<span class="icon-open"></span>
							Horario
					</h3>
	    			<div class="acordion-content">
	    				<div class="acordion-container">
		    				<h4 class="nivel-horario-titulo">
		    					Turno Mañana
		    				</h4>
		    				<p class="niveles-horario">
		    					<strong>
		    						Jornada Simple:	
		    					</strong>
		    						<?php echo $textoNiveles['textoHorario']['manana']['simple'][$slug]; ?>
		    					<br>
		    					<strong>
		    						Jornada Complementaria:	
		    					</strong>
		    						<?php echo $textoNiveles['textoHorario']['manana']['complementaria'][$slug]; ?>
		    					<br>
		    				</p>
		    				<h4 class="nivel-horario-titulo">
		    					Turno Tarde
		    				</h4>
		    				<p class="niveles-horario">
		    					<strong>
		    						Jornada Simple:	
		    					</strong>
		    						<?php echo $textoNiveles['textoHorario']['manana']['simple'][$slug]; ?>
		    					<br>
		    					<strong>
		    						Jornada Complementaria:	
		    					</strong>
		    						<?php echo $textoNiveles['textoHorario']['manana']['complementaria'][$slug]; ?>
		    				</p>
		    			</div>
	    			</div>

	    		<?php if ( $slug != 'secundario') : ?>
	    			<h3 class="title-acordion acordion-color-celeste animation-element slide-up">
						<span class="icon-open"></span>
							Jornada Complementaria
					</h3>
	    			<div class="acordion-content">
	    				<div class="acordion-container">
	    					<?php echo $textoNiveles['complementaria'][$slug]; ?>
	    				</div>
	    			</div>
	    		<?php endif; ?>
	    		</div>

		    </section>

    <!--- INSCRIBITE -->
		    <aside class="separador-inscribite animation-element slide-up in-view">
		    	<?php getTemplate( 'separador-inscribite' ); ?>
		    </aside>

	<!--- DETALLES NIVEL -->
		    <section class="nivel-detalles">
		
		    	<div id="acordionDetalles" class="acordion">
		    		
			    		<?php getTemplate( 'niveles-detalle', $slug ); ?>

	    		</div><!--- //.acordion -->

		    </section>

	<?php if ( $slug != 'inicial') : ?>

	<!--- CERTIFICACIONES NIVEL -->
		    <section class="nivel-certificaciones">

		    	<?php getTemplate( 'contenido-certificaciones', $slug ); ?>
		    
		    </section>

	<?php endif; ?>

		    <section class="nivel-proyecto">
		    	
		    	<div class="texto-proyecto-wrapper">
		    		<span class="icon-colectivo animation-element fade-in-scroll"></span>
			    	
			    	<p class="animation-element fade-in-scroll">
			    		<?php echo $textoNiveles['textoProyecto'][$slug]; ?>
			    	</p>
			    	
			    	<span class="icon-calculadora animation-element fade-in-scroll"></span>
			    </div>

		    </section>


	<!--- TALLERES -->

		    <section class="nivel-talleres">
		    	<h2 class="subtitulo_seccion animation-element fade-in-scroll">
		     		Talleres
		     	</h2>
		    	
		<?php if ( $dispositivo != 'movil') : ?>
				
				<div class="tabs-wrappers animation-element fade-in-scroll">
		    		
		    		<?php getTemplate( 'contenido-talleres', $slug ); ?>
		    	
		    	</div>
		    	
	   	<?php else : ?>

	   			<div id="acordionDetalles" class="acordion">
		    		
			    		<?php getTemplate( 'contenido-talleres', $slug ); ?>

	    		</div><!--- //.acordion -->
	    
	    <?php endif; ?>

		    </section>

		     <section class="nivel-deportes">
		     	<h2 class="subtitulo_seccion animation-element fade-in-scroll">
		     		Campo de deportes
		     	</h2>
		     	<div class="nivel-deportes-wrapper animation-element fade-in-scroll">
			     	<div class="nivel-imagen-deportes">
			     		<img src="<?php echo MAINSURL; ?>/assets/images/niveles-deportes.jpg" alt="Colegio Buenos Aires - Estancia La Chiquita">
			     	</div>
			     	
			     	<div class="nivel-data-deportes">
				    	
				    		<?php echo $textoNiveles['textoDeportes'][$slug]; ?>
				    	

				    	<a class="btn btn-primary btn-sm">Ver más</a>
				    </div>
				</div>

		    </section>

		    <section class="nivel-documentacion">

		    	<div id="acordionDocumentacion" class="acordion animation-element slide-up">
		    		<h3 class="title-acordion">
						<span class="icon-open"></span>
							Documentación
					</h3>
	    			<div class="acordion-content">
	    				<div class="acordion-container">
	    					<ul class="documentacion-list">
								<?php getDocumentation( $slug, 'docs' ); ?>
							</ul>
						</div>
	    			</div>
	    		</div>

		    </section>

	    </div><!-- //.main-content-page-->

	    
	<!-- sidebar -->
	    <?php if ( $dispositivo == 'pc' ) : ?>
	    
	    <aside class="sidebar">
	       <?php getTemplate( 'sidebar' ); ?>
	   	</aside>

	   <?php endif; ?><!-- //.sidebar -->

   
   </div><!-- //.main-content-page-wrapper template 2 -->

<?php endif; ?>

</div><!--- //.inner-wrapper -->

<?php include 'footer.php'; ?>