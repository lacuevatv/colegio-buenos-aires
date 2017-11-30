<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA EDAD FELIZ
*/
$cantPost = CANTPOST;
$slug = getPageVar( cleanUri() );//trae la variable de la pagina
$single = false;

if ( $slug != '' ) {
	$singlePost = getSinglePost( $slug );
	$fecha = tuneandoFecha( $singlePost['post_fecha'] );
	$single = true;
} else {
	$posts = getPosts( 'edad-feliz', $cantPost );
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
				
				<h1>Edad Feliz</h1>
		        <p>
		        	Edad feliz es una revista hecha por los alumnos del colegio. Aquí se pueden ver algunas notas y resúmenes de la revista.
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
	    	
			<?php getPagination( 'edad-feliz', $cantPost );
	    	
	    	endif; ?>

	    </div><!-- //.main-content-page -->

	    <aside class="sidebar">
	       <?php getTemplate( 'sidebar' ); ?>
	   	</aside>
   </div><!-- //.main-content-page-wrapper -->

</div><!--- //.inner-wrapper -->

<?php include 'footer.php'; ?>