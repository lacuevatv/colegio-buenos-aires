<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA CONTACTO
*/
include 'header.php';
?>
<!--- .inner-wrapper: contenido principal y específico del template -->
<div id="contact-page" class="inner-wrapper">
   <header><h1 class="sr-only">Contacto</h1></header>
    <div class="main-content-page-wrapper container">
	    <div class="main-content-page">

	    	<section class="contact-form-wrapper">
	    		<h2 class="subtitulo_clasico">Formulario de Contacto</h2>

	    		<form id="contact-form" method="POST">
	    			
	    			<div class="form-group">
		    			<label for="nombre">
		    				Nombre
		    			</label>
		    			<input type="text" name="nombre" <?php if ( dispositivo() == 'pc' ) { echo 'placeholder="Nombre"'; } ?>>
		    		</div>

		    		<div class="form-group">
		    			<label for="email">
		    				Correo Electrónico (requerido)
		    			</label>
		    			<input type="email" name="email" required <?php if ( dispositivo() == 'pc' ) { echo 'placeholder="Correo Electrónico (requerido)"'; } ?>>
		    		</div>

		    		<div class="form-group">
		    			<label for="subject">
		    				Asunto
		    			</label>
		    			<input type="text" name="subject" <?php if ( dispositivo() == 'pc' ) { echo 'placeholder="Asunto"'; } ?>>
		    		</div>

		    		<div class="form-group">
		    			<label for="msj">
		    				Mensaje
		    			</label>
		    			<textarea name="msj" <?php if ( dispositivo() == 'pc' ) { echo 'placeholder="Mensaje"'; } ?>></textarea>
		    		</div>
					
					<div class="form-group">
		    			<button type="submit" id="send-contact-form" class="btn btn-primary">Enviar</button>
		    		</div>
		    		<div class="ajax-loader"></div>
		    		
	    		</form>
	    		<div class="mensaje-wrapper">
		    		<span class="mensaje"></span>
		    	</div>
	    	</section>

	    	<section class="contact-data-wrapper">
	    		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.2362842021116!2d-58.44429744015378!3d-34.59818617135286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca0b414510e1%3A0x43564576cc0da8d3!2sAcevedo+357%2C+C1414DJG+CABA!5e0!3m2!1ses!2sar!4v1511791250465" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	    		<ul class="contact-data-items row">
		    		<div class="col-50">
		    			<li class="icon-before icon-before-location">
		    				Acevedo 357, C1414DJG CABA
		    			</li>
		    			<li class="icon-before icon-before-email">
		    				info@colegiobuenosaires.edu.ar
		    			</li>
		    		</div>

		    		<div class="col-50">
		    			<li class="icon-before icon-before-tel">
		    				4855-8289
		    			</li>
		    			<li class="icon-before icon-before-clock">
		    				Lunes a Viernes de 9:00 a 18:00hs
		    			</li>
		    		</div>
	    		</ul>
	    	</section>


	    	<section class="contact-calendar-wrapper">
	    		<a href="<?php echo GOOGLECALENDAR; ?>" target="_blank" title="Calendario de Eventos en Google Calendar">
		    		<figure>
		    			<img src="<?php echo UPLOADSURL; ?>/2017-11-24-395-imagen.png">
		    		</figure>
		    	</a>
	    	</section>


	    </div><!-- //.main-content-page -->

	    <aside class="sidebar">
	       <?php getTemplate( 'sidebar' ); ?>
	   	</aside>
   </div><!-- //.main-content-page-wrapper -->
        
</div><!--- //.inner-wrapper -->

<?php include 'footer.php'; ?>