<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA CAMPO DE DEPORTES
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
    			Campo de deportes - Estancia La Chiquita
    		</h1>
	    	<p class="animation-element fade-in">
	    		<img src="<?php echo MAINSURL; ?>/assets/images/campo-deportes1.jpg" class="image-responsive">
	    	</p>
	    	
	    	<p class="text-justify animation-element fade-in-scroll">
		    	El Colegio cuenta con un espacio genial, ideal para despejarse y pasarla bárbaro. Se trata de un campo ubicado a 64 km del Colegio, en la localidad de Brandsen.
		    </p>
		    <p class="text-justify animation-element fade-in-scroll">
		    	Es una auténtica reserva ecológica, con eucaliptos, pinos, araucarias, robles, palmeras y árboles frutales.
		    </p>
		    <p class="text-justify animation-element fade-in-scroll">
		    	Una gran variedad de pájaros aporta vida al lugar, con sus diferentes trinos.
		    </p>
		    <p class="text-justify animation-element fade-in-scroll">
		    	El campo está a disposición de los chicos del Colegio, de Jardín de Infantes a 5° año.
		    </p>
		    <p class="text-justify animation-element fade-in-scroll">
		    	Las actividades que allí se realizan son múltiples: competencias deportivas, caminatas, asados, campamentos y todo tipo de encuentro.
		    </p>

		    <p class="animation-element fade-in-scroll">
	    		<img src="<?php echo MAINSURL; ?>/assets/images/campo-deportes2.jpg" class="image-responsive">
	    	</p>

		    <p class="text-justify animation-element fade-in-scroll">
		    	También celebramos anualmente el Día de la Familia, en coincidencia con el Día de la Tradición.
		    </p>

		    <p class="text-justify animation-element fade-in-scroll">
		    	Este año cumplimos 25 años con este proyecto que permite a los habitantes de la ciudad, un saludable contacto con la naturaleza.
		    </p>

		    <p class="animation-element fade-in-scroll">
	    		<img src="<?php echo MAINSURL; ?>/assets/images/campo-deportes3.jpg" class="image-responsive">
	    	</p>

	    	<h3 class="subtitulo_clasico animation-element fade-in">
    			¿Cómo llegar?
    		</h3>
			<div>
				<iframe src="<?php echo MAPAGOOGLEDEPORTES; ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

	    </div><!-- //.main-content-page -->

    <?php if ( $dispositivo == 'pc' )  : ?> 
		    	 	
	    <aside class="sidebar">
	       <?php getTemplate( 'sidebar' ); ?>
	   	</aside>

	<?php endif; ?> 
	
   </div><!-- //.main-content-page-wrapper -->
        
</div><!--- //.inner-wrapper -->

<?php include 'footer.php'; ?>