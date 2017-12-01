<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA NOTICIAS
*/
$cantPost = CANTPOST;
$slug = getPageVar( cleanUri() );//trae la variable de la pagina
$single = false;
$dispositivo = dispositivo();

if ( $slug != '' ) {
	$singlePost = getSinglePost( $slug );
	$fecha = tuneandoFecha( $singlePost['post_fecha'] );
	$single = true;
} else {
	$posts = getPosts( 'noticias', $cantPost );
}


include 'header.php';
?>

<!--- .inner-wrapper: contenido principal y específico del template -->
<div class="inner-wrapper">
	<header></header>

    <div class="main-content-page-wrapper container">
	    <div class="main-content-page">
		
		   	<header class="header-posts">

		   	<?php if ( $single ) : ?>   	
		    	
		    	<div class="title-post-wrapper">
					<h1>
						<a href="<?php echo MAINSURL .'/'. $singlePost['post_categoria'] .'/'.$singlePost['post_url']; ?>">
							<?php echo $singlePost['post_titulo']; ?>
						</a>
					</h1>
					
					<h6 class="date-post">
						<?php echo $fecha; ?>
					</h6>
				</div>
			
			<?php else : ?>
				
				<h1>Noticias</h1>
		        <p>
		        	En esta sección podés encontrar todas las noticias y novedades de Colegio Buenos Aires. Seguinos en nuestras redes para mantenerte al tanto.
		        </p>

			<?php endif; ?>

		    </header>    
		
	    	<?php if ( $single ) :
	    		
	    		getTemplate( 'single-post', $singlePost );
	    	
	    	else : ?>
	    	
	    	<ul class="loop-posts-wrapper">
	    	<?php
	    	//loop
	    		for ($i=0; $i < count($posts); $i++) { 
	    		echo '<li>';
	    			getTemplate( 'loop-posts', $posts[$i] );
	    		echo '</li>';
	    		} ?>
	    	</ul>

	    	<?php getPagination( 'noticias', $cantPost );
	    	
	    	endif; ?>

	    </div><!-- //.main-content-page -->

	<?php if ( $dispositivo == 'pc' )  : ?> 
		    	 	
	    <aside class="sidebar">
	       <?php getTemplate( 'sidebar' ); ?>
	   	</aside>

	<?php endif; ?>

   </div><!-- //.main-content-page-wrapper -->

</div><!--- //.inner-wrapper -->

<?php include 'footer.php'; ?>