<ul class="otras-noticias">

<?php

for ($i=0; $i < count($data); $i++) { 
	$post = $data[$i]; ?>
	<li class="otras-noticia-item">
		<a href="<?php echo MAINSURL .'/'.$post['post_categoria'].'/'. $post['post_url']; ?>" title="<?php echo $post['post_titulo']; ?>">
			<article>
				<div class="otra-noticia-data">
					<h1>
						<?php echo $post['post_titulo']; ?>			
					</h1>
					<p>
						<?php echo preparaResumen($post); ?>			
					</p>
				</div>
				<figure>
					<img src="<?php echo UPLOADSURL . '/' . $post['post_imagen']; ?>" alt="<?php echo $post['post_titulo']; ?>">
				</figure>
			</article>
		</a>
	</li>
<?php } ?>

</ul>