<article class="widget">
	<a href="<?php echo MAINSURL; ?>/institucional">			
		<h1>Bienvenidos</h1>
		
		<p>
			La Patria había cumplido un siglo, eran épocas duras. Julio Faggioni inaugura el 9 de enero de 1911 el <strong>Colegio Buenos Aires</strong>. 
		</p>
		
		<div class="wrapper-galeria-images">
		
			<?php

			global $galeriaBienvenidos;

		for ($i=0; $i < count($galeriaBienvenidos); $i++) { ?>
			
			<figure>
				<img src="<?php echo UPLOADSURL . '/' . $galeriaBienvenidos[$i]['url']; ?>" alt="<?php echo $galeriaBienvenidos[$i]['alt']; ?>">
				<div class="caption-wrapper">
					<figcaption>
						<?php echo $galeriaBienvenidos[$i]['caption']; ?>
					</figcaption>
				</div>
			</figure>
			
		<?php }	?>
		
		</div>
	</a>
</article>