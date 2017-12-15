<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA JORNADA COMPLEMENTARIA
*/
$dispositivo = dispositivo();
include 'header.php';
?>
<!--- .inner-wrapper: contenido principal y específico del template -->
<div class="inner-wrapper">
    
    <header></header>
   
    <div class="main-content-page-wrapper container">
	    <div class="main-content-page">
	    	<h1 class="subtitulo_clasico animation-element fade-in">
    			Jornada Complementaria
    		</h1>

    		<p class="text-justify">
	    		A partir de Sala de 2 años se puede optar por la Jornada Complementaria con horarios extendidos en contra turno.
	    	</p>

	    	<h2 class="color-celeste">
				Sala 2 y 3 años
			</h2>
			<p class="text-justify">
				La sala de Jornada Complementaria se conforma por nenes de las salas de 2 y 3 años y están a cargo dos docentes. Las actividades son de juego/tarea; se realizan proyectos mensuales favoreciendo al desarrollo del lenguaje oral, la expresión espontánea, ofreciéndoles diversas técnicas y elementos que orienten el desarrollo de la capacidad creadora.
			</p>
			<p>
				<strong>Almuerzo</strong>: pueden optar por la vianda individual o por el servicio de catering que ofrece el Colegio.
			</p>

			<h2 class="color-celeste">
				Sala 4 y 5 años
			</h2>

			<p class="text-justify">
				Esta sala de Jornada Complementaria se conforma por nenes de las salas de 4 y 5 años y están a cargo dos docentes. Las actividades son de juego/tarea; se realizan proyectos mensuales favoreciendo al desarrollo del lenguaje oral, la expresión espontánea, ofreciéndoles diversas técnicas y elementos que orienten el desarrollo de la capacidad creadora.
			</p>
			<p class="text-justify">
				<strong>Almuerzo</strong>: pueden optar por la vianda individual o por el servicio de catering que ofrece el Colegio.
			</p>
			<p class="text-justify">
				<strong>Materias especiales</strong>: Inglés y Computación
			</p>


			<h2 class="color-celeste">
				Primaria
			</h2>

			<p class="text-justify">
				La organización de los Talleres está orientada hacia la posibilidad de ampliar y profundizar en áreas del conocimiento, desde un espacio propicio para desarrollar las potencialidades y estimular la creatividad en diversas áreas.
			</p>
			<p class="text-justify">
				<strong>Almuerzo</strong>: pueden optar por la vianda individual o por el servicio de catering que ofrece el Colegio.
			</p>
			<p class="text-justify">
				<strong>Materias especiales</strong>: Educación Plástica, Educación Física, Idioma extranjera, Informática, Comunicación Social el Taller de Tareas a cargo de maestras de grado para servir de apoyo en las diversas áreas del conocimiento.
			</p>


	    </div><!-- //.main-content-page -->

    <?php if ( $dispositivo == 'pc' )  : ?> 
		    	 	
	    <aside class="sidebar">
	       <?php getTemplate( 'sidebar' ); ?>
	   	</aside>

	<?php endif; ?> 
	
   </div><!-- //.main-content-page-wrapper -->
        
</div><!--- //.inner-wrapper -->

<?php include 'footer.php'; ?>