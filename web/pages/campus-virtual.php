<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA CAMPUS VIRTUAL
*/
$dispositivo = dispositivo();
include 'header.php';
?>
<!--- .inner-wrapper: contenido principal y específico del template -->
<div class="inner-wrapper">
    
    <header><h1 class="sr-only">Campus Virtual</h1></header>
   
    <div class="main-content-page-wrapper container">
	    <div class="main-content-page">
	    	<h2 class="subtitulo_clasico animation-element fade-in">
    			Campus Virtual
    		</h2>
	    	<p>
	    		<img src="<?php echo MAINSURL; ?>/assets/images/campus-screenshot2.jpg" class="image-responsive">
	    	</p>
	    	<p class="text-justify">
	    		Es una <strong>plataforma educativa</strong> que nos permite crear un entorno virtual  de aprendizaje.  En otras palabras es una aplicación web que ofrece un espacio educativo especial, con similitudes al aula en la que estamos todos los días con la seño o los profesores y a su vez especial, porque nos permite crear un espacio educativo que incluye nuevos recursos de aprendizaje y utilizar las herramientas de comunicación que tenemos a nuestro alcance. 
	    	</p>

	    	<p class="text-justify">
				Dentro del campus cada uno de los usuarios  puede acceder a sus aulas virtuales, y en cada una de ellas encontrará los diferentes recursos y actividades que los docentes  les van planteando en todas  las materias y niveles con diferentes propuestas. 
			</p>
			<p>
				<img src="<?php echo MAINSURL; ?>/assets/images/campus-screenshot1.jpg" class="image-responsive">
			</p>
			<p class="text-justify">
				Cuando pensamos en nuestros alumnos más grandes, sabemos que ellos en un futuro cercano van a estar estudiando una carrera universitaria o terciaria y deben adquirir nuevas herramientas digitales que les permitan un mejor desempeño en esa nueva etapa. 
			</p>
			<p class="text-justify">
				En todos los  ámbitos  y niveles educativos, en los últimos años hablamos de la incorporación de nuevas tecnologías, de las TIC´s (Tecnologías de Información y Comunicación) como recurso transversal y disponible para todas las áreas.  Hoy tenemos  acceso a mucha información y recursos para acceder a ella y no siempre sabemos qué hacer con tanta información. Es cuando aparece, especialmente en los niveles superiores, un nuevo concepto en la educación digital, espacios propios de aprendizaje.  Es cuando nos encontramos con todos estos contenidos, recursos, conexiones, redes… y vamos descubriendo qué hacer, cómo hacerlo y cómo aplicarlo en situaciones nuevas. 
			</p>

			<p>
				<strong>¡Los esperamos en el campus!</strong>
			</p>

			<p>
				<em>María Julia García</em>
			</p>


			<section class="nivel-documentacion">
				<h2 class="subtitulo_clasico animation-element fade-in">
					Datos útiles
				</h2>
				<p>
					En la parte de documentación, puede acceder a documentos instructivos, por ejemplo, cómo ingresar al campus y muchos otros. En caso de todavía no tener usuario asignado, puede solicitar haciendo click en el botón de abajo.
				</p>

				<p>
					<a href="<?php echo LINKFORMULARIOCAMPUS; ?>" target="_blank" class="btn btn-primary btn-sm">
						Solicitar Usuario
					</a>
				</p>
		    	<div id="acordionDocumentacion" class="acordion animation-element slide-up">
		    		<h3 class="title-acordion">
						<span class="icon-open"></span>
							Documentación
					</h3>
	    			<div class="acordion-content">
	    				<div class="acordion-container">
	    					<ul class="documentacion-list">
								<?php getDocumentation( 'campus-virtual' ); ?>
							</ul>
						</div>
	    			</div>
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