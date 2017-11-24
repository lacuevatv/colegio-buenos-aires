<?php
$exclude =  getPageVar( cleanUri() );
$noticias = getPosts( 'noticias', 2 ); 

?>
<article class="widget">
			
	<h1>Últimas noticias</h1>
	
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.</p>
	
	<figure>
		<img src="<?php echo UPLOADSURL; ?>/2017-11-20-262-imagen.jpg">
	</figure>
	
	<a href="#" class="btn btn-sm btn-primary link-widget">Leer más</a>

</article>