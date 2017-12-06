<?php
/*
 * Este template crea el single recibiendo todos los datos del post, empieza luego del título, ya que el título esta en pages noticias. Funciona para las dos categorias
*/
$fecha = tuneandoFecha( $data['post_fecha'] );
$video = false;
$galeria = false;

//template video
if ( $data['post_video'] != '' ) {
	$video = true;
	$videoUrl = explode('=', $data['post_video'])[1];
}
//template galeria de fotos
if ( $data['post_galeria'] == '1' ) {
	$galeria = true;

}

?>

<div class="single-post-content">

<?php if ($video) : ?>

<!-- VIDEO -->	
	<div class="post-video-wrapper animation-element fade-in">
		<iframe src="https://www.youtube.com/embed/<?php echo $videoUrl; ?>" frameborder="0" allowfullscreen width="100%" height="100%"></iframe>
	</div>

<?php elseif ($data['post_galeria']) : ?>
<!-- GALERIA DE FOTOS -->
	<div class="main-image-wrapper">
		<img src="">
	</div>
	<div class="post-galeria-wrapper">
		<a>
			<div class="galeria-main-image">
				<img src="" alt="Colegio Buenos Aires">
			</div>
		</a>

		<ul class="galeria-imagenes">
	<?php 
		$imgGaleria = unserialize( $data['post_imagenesGal'] );
		for ($i=0; $i < count($imgGaleria); $i++) { 
			echo '<li>';
				echo '<img src="' . UPLOADSURL . '/' . $imgGaleria[$i] . '" data-href="' . $imgGaleria[$i] . '" alt="'.SITETITLE.'">';
			echo '</li>';
		}
	?>		
		</ul>

		<div class="controls">
			<span class="left-control"></span>
			<span class="right-control"></span>
		</div>
		
	</div>

<?php else : ?>
<!-- IMAGEN DESTACADA-->	

	<figure class="animation-element fade-in-scroll">
		<img src="<?php echo UPLOADSURL . '/' . $data['post_imagen']; ?>" alt="<?php echo $data['post_titulo']; ?>" class="image-responsive">
	</figure>
<?php endif; ?>

<!-- TEXTO CONTENIDO -->	

<div class="content-wrapper animation-element fade-in-scroll">
	<?php echo $data['post_contenido']; ?>
</div>

<footer class="single-post-footer">
	<div class="share-post animation-element fade-in-scroll">
		<h3>
			¡Compartilo en las redes!
		</h3>
		<ul class="social-share">
			<li>
				<?php getTemplate('social-share', $data); ?>
			</li>
		</ul>
	</div>

	<aside class="pagination-single">
		<h3>Seguí navegando</h3>
		<?php paginationSingle( $data['post_categoria'], 2, $data['post_url'] ); ?>
	</aside>
</footer>
</div><!-- //.single-post-content -->

<div id="fb-root"></div>

<!-- script-share -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));
</script>
<!-- //script-share -->