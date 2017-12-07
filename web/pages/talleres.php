<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA TALLERES
*/



$dispositivo = dispositivo();
include 'header.php';
?>
<!--- .inner-wrapper: contenido principal y específico del template -->
<div class="inner-wrapper">
    
    <header><h1 class="sr-only">Talleres</h1></header>
   
    <div class="main-content-page-wrapper container">
	    <div class="main-content-page">

    		<section id="talleres-inicial" class="talleres-section">
    			<h2 class="subtitulo_clasico animation-element fade-in">
	    			Inicial
	    		</h2>
	    		<div class="text-talleres">
	    			<p>
	    				Las actividades son de juego/tarea; se realizan proyectos mensuales favoreciendo al desarrollo del lenguaje oral, la expresión espontánea, ofreciéndoles diversas técnicas y elementos que orienten el desarrollo de la capacidad creadora.
	    			</p>
	    		</div>
	    		<div id="talleres-inicial-tab" class="tabs-wrappers">
	    			<?php getTemplate( 'contenido-talleres', 'inicial' ); ?>
	    		</div>

    		</section>

    		<section id="talleres-primaria" class="talleres-section">
    			<h2 class="subtitulo_clasico animation-element fade-in">
	    			Primaria
	    		</h2>

	    		<div class="text-talleres">
	    			<p>
	    				La organización de los Talleres está orientada hacia la posibilidad de ampliar y profundizar en áreas del conocimiento, desde un espacio propicio para desarrollar las potencialidades y estimular la creatividad en diversas áreas.
	    			</p>
	    		</div>
				<div id="talleres-primaria-tab" class="tabs-wrappers">
    				<?php getTemplate( 'contenido-talleres', 'primaria' ); ?>
				</div><!-- //.tabs-wrapper -->
    		</section>

    		<section id="talleres-secundario" class="talleres-section">
    			<h2 class="subtitulo_clasico animation-element fade-in">
	    			Secundario
	    		</h2>

	    		<div class="text-talleres">
	    			<p>
	    				Como complemento de la parte Programática o Curricular, el Colegio Buenos Aires ofrece a sus alumnos una serie de Talleres que enriquecen su formación a lo largo de toda la carrera, dándoles la posibilidad de canalizar todas sus inquietudes e inclinaciones, e inclusive, descubrir su vocación. También funcionan como apoyo de las materias programáticas, contribuyendo al acompañamiento personalizado que es tradición en nuestra institución.
	    			</p>
	    		</div>

	    		<div id="talleres-secundario-tab" class="tabs-wrappers">
	    			<?php getTemplate( 'contenido-talleres', 'secundario' ); ?>
	    		</div>

    		</section>

	    </div><!-- //.main-content-page -->

    <?php if ( $dispositivo == 'pc' )  : ?> 
		    	 	
	    <aside class="sidebar">
	       <?php getTemplate( 'sidebar' ); ?>
	   	</aside>

	<?php endif; ?> 
	
   </div><!-- //.main-content-page-wrapper -->
        
</div><!--- //.inner-wrapper -->

<?php include 'footer.php'; ?>