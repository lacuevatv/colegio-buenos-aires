<?php 
global $pageActual;


$deportesContenido = array(
	'imagen'  => 'campo-deportes.jpg',
	'titulo'  => 'Campo de deportes',
	'parrafo' => 'Estancia “La Chiquita” ubicada en la localidad de Cnel. Brandsen. Espacio verde reservado para recreación y eventos deportivos.',
	'link'    => '/campo-deportes',
);

//el template normal es cuando no está en la pagina de inicio
if ( $pageActual != 'inicio' ) : ?>

<article class="niveles-widget-article animation-element fade-in-scroll">
	<figure class="niveles-widget-imagen">
		<img src="<?php echo MAINSURL . '/assets/images/' . $deportesContenido['imagen']; ?>">
	</figure>
	<div class="niveles-widget-data niveles-widget-data-verde-agua animation-element niveles-widget-data-animate">
		<h1>
			<?php echo $deportesContenido['titulo']; ?>
		</h1>

		<p>
			<?php echo $deportesContenido['parrafo']; ?>
		</p>
		<p>
			<a href="<?php echo MAINSURL . $deportesContenido['link']; ?>" class="btn btn-sm btn-border-inverse">
				Leer más
			</a>
		</p>
	</div>
</article>

<?php else : 
//el template de la pagina de incio
?>

<article class="niveles-widget-article-inicio-deportes animation-element fade-in-scroll">
	<figure class="niveles-widget-imagen">
		<img src="<?php echo MAINSURL . '/assets/images/' . $deportesContenido['imagen']; ?>">
	</figure>
	<div class="niveles-widget-data niveles-widget-data-verde-agua animation-element niveles-widget-data-animate">
		<h1>
			<?php echo $deportesContenido['titulo']; ?>
		</h1>

		<p>
			<?php echo $deportesContenido['parrafo']; ?>
		</p>
		<p>
			<a href="<?php echo MAINSURL . $deportesContenido['link']; ?>" class="btn btn-sm btn-border-inverse">
				Leer más
			</a>
		</p>
	</div>
</article>

<?php endif; ?>