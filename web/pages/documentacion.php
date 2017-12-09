<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA DOCUMENTACIÓN
*/
echo getPageVar( cleanUri() );//variante de la pagina
$dispositivo = dispositivo();
include 'header.php';
?>
<!--- .inner-wrapper: contenido principal y específico del template -->
<div class="inner-wrapper">
    
    <header><h1 class="sr-only">Documentación</h1></header>
   
    <div class="main-content-page-wrapper container">
	    <div class="main-content-page">
	    	
	    	<section class="talleres-section">
    			<h2 class="subtitulo_clasico animation-element fade-in">
	    			Documentación
	    		</h2>
	    		<div class="text-talleres">
	    			<p>
	    				En esta sección se puede descargar toda la documentación del Colegio Buenos Aires. La misma está dividida en los tres niveles de la curícula. Contiene todos los elementos.
	    			</p>
	    		</div>
	    		
	    		<div id="acordionDocumentacion" class="acordion">
		    		<h3 class="title-acordion">
						<span class="icon-open"></span>
							Inicial
					</h3>
	    			<div class="acordion-content">
	    				<div class="acordion-container">
						<ul class="documentacion-list">
							<?php getDocumentation( 'inicial' ); ?>
						</ul>
						</div>
	    			</div>

	    			<h3 class="title-acordion acordion-color-celeste">
						<span class="icon-open"></span>
							Primaria
					</h3>
	    			<div class="acordion-content">
	    				<div class="acordion-container">
						<ul class="documentacion-list">
							<?php getDocumentation( 'primaria' ); ?>
						</ul>
						</div>
	    			</div>

	    			<h3 class="title-acordion acordion-color-verde">
						<span class="icon-open"></span>
							Secundario
					</h3>
	    			<div class="acordion-content">
	    				<div class="acordion-container">
						<ul class="documentacion-list">
							<?php getDocumentation( 'secundario' ); ?>
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