<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: certificaciones
*/

echo getPageVar( cleanUri() );//variante de la pagina
$dispositivo = dispositivo();
include 'header.php';
?>
<!--- .inner-wrapper: contenido principal y específico del template -->
<div class="inner-wrapper">
    
    <header><h1 class="sr-only">Certificaciones</h1></header>
   
    <div class="main-content-page-wrapper container">
	    <div class="main-content-page">
	    	
	    	<section class="talleres-section">
    			<h2 class="subtitulo_clasico animation-element fade-in">
	    			Certificaciones Primaria
	    		</h2>
	    		<div class="text-talleres">
	    			
	    		</div>
	    		<div class="certificaciones-wrappers">
	    			<?php getTemplate( 'contenido-certificaciones', 'primaria' ); ?>
	    		</div>

    		</section>

    		<section class="talleres-section">
    			<h2 class="subtitulo_clasico animation-element fade-in">
	    			Certificaciones Secundario
	    		</h2>
	    		<div class="text-talleres">
	    			
	    		</div>
	    		<div class="certificaciones-wrappers">
	    			<?php getTemplate( 'contenido-certificaciones', 'secundario' ); ?>
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