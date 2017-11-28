<?php
/*
 * Este template crea el single recibiendo todos los datos del post, empieza luego del título, ya que el título esta en pages noticias. Funciona para las dos categorias
*/
$fecha = tuneandoFecha( $data['post_fecha'] );


?>

<div class="single-post-wrapper">
	<?php 
		echo preparaResumen( $data );
	?>
</div>