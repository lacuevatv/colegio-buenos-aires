<?php
$exclude = getPageVar( cleanUri() );
$cantPost = 2;

if ( $exclude == '' ) {
	$noticias = getPosts( 'noticias', $cantPost ); 	
} else {
	$noticias = getPosts( 'noticias', $cantPost, $exclude ); 
}

?>
<article class="widget">
			
	<h1>Últimas noticias</h1>
	
	<ul class="last-news-list">

	<?php for ($i=0; $i < count($noticias); $i++) { ?>
		<li>
			<article class="wrapper-last-news">
				<a href="<?php echo MAINSURL . '/noticias/' . $noticias[$i]['post_url']; ?>" title="Leer más">
					<h1>
						<?php echo $noticias[$i]['post_titulo']; ?>
					</h1>
				</a>
				
				<div class="wrapper-last-news-data">
					<a href="<?php echo MAINSURL . '/noticias/' . $noticias[$i]['post_url']; ?>" title="Leer más">
						<figure>
							<img src="<?php echo UPLOADSURL . '/' . $noticias[$i]['post_imagen']; ?>" alt="<?php echo $noticias[$i]['post_titulo']; ?>">
						</figure>		
					</a>

					<p class="last-news-data">
						<?php echo acortaTexto( $noticias[$i]['post_resumen'], 10 ); ?>
						<a href="<?php echo MAINSURL . '/noticias/' . $noticias[$i]['post_url']; ?>" class="link-last-news">Leer más</a>
					</p>

				</div>
				
			</article>
		</li>		 	
	<?php } ?>
		
	</ul>

</article>