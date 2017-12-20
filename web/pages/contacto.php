<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA CONTACTO
*/
$dispositivo = dispositivo();

include 'header.php';
?>
<!--- .inner-wrapper: contenido principal y específico del template -->
<div id="contact-page" class="inner-wrapper">
   <header><h1 class="sr-only">Contacto</h1></header>
    <div class="main-content-page-wrapper container">
	    <div class="main-content-page">

	    	<section class="contact-form-wrapper">
	    		<h2 class="subtitulo_clasico animation-element fade-in">
	    			Formulario de Contacto
	    		</h2>
	    		<p class="text-justify animation-element fade-in-scroll">
							Puede completar el formulario para solicitar información o hacer consultas sobre nuestras propuestas educativas. ¡Le responderemos a la brevedad!
						</p>
						
	    		<?php getTemplate( 'formulario-contacto' ); ?>

	    	</section>

	    	<section class="contact-data-wrapper">
	    		<iframe src="<?php echo MAPAGOOGLE; ?>" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen class="animation-element fade-in"></iframe>
	    		
	    		<ul class="contact-data-items row">
		    		<div class="col-50 animation-element slide-up">
		    			<li class="icon-before icon-before-location">
		    				<?php echo COLEGIODIRECCION; ?>
		    			</li>
		    			<li class="icon-before icon-before-email">
		    				<?php echo COLEGIOEMAIL; ?>
		    			</li>
		    		</div>

		    		<div class="col-50 animation-element slide-up">
		    			<li class="icon-before icon-before-tel">
		    				<?php echo TELCOLEGIO; ?>
		    				/
		    				<?php echo TELCOLEGIO2; ?>
		    			</li>
		    			<li class="icon-before icon-before-clock">
		    				Lunes a Viernes de 9:00 a 18:00hs
		    			</li>
		    		</div>
	    		</ul>

	    	</section>


	    	<section class="contact-calendar-wrapper animation-element slide-up">
	    		<a href="<?php echo GOOGLECALENDAR; ?>" target="_blank" title="Calendario de Eventos en Google Calendar">
		    		<figure>
		    			<img src="<?php echo UPLOADSURL; ?>/2017-11-24-395-imagen.png">
		    		</figure>
		    	</a>
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