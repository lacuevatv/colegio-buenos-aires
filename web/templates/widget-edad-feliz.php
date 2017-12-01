<?php $EFPosts = getPosts( 'edad-feliz', 1 ); ?>

<article class="widget animation-element fade-in-scroll">
			
	<h1>
		<span class="sr-only">Edad feliz</span>
		<img src="<?php echo MAINSURL; ?>/assets/images/logoEF.jpg">
	</h1>
	
	<p>
		<?php echo acortaTexto( $EFPosts[0]['post_resumen'], 20 ); ?>
	</p>
	
	<figure>
		<img src="<?php echo UPLOADSURL . '/' . $EFPosts[0]['post_imagen']; ?>">
	</figure>
	
	<a href="<?php echo MAINSURL . '/edad-feliz/' . $EFPosts[0]['post_url'] ?>" class="btn btn-sm btn-primary link-widget">Ver Nota</a>

</article>