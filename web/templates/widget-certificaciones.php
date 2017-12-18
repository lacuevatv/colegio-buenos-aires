<?php 
global $pageActual;

$contenidoCertificaciones = array(
	'idioma'    => array(
		'imagen'  => 'certifiacion-ingles.jpg',
		'titulo'  => 'Certificación Idiomas',
		'parrafo' => 'Desde ya hace 5 años el Colegio Buenos Aires ha implementado los cursos de Inglés Intensivo en su horario contra turno. Exámenes Internacionales de Cambridge English YLE y GESE de Trinity College London.',
		'link'    => '/certificaciones',
		'color'   => 'niveles-widget-data-naranja',
	),
	'utn'   => array(
		'imagen'  => 'certificacion-utn.jpg',
		'titulo'  => 'Certificación UTN',
		'parrafo' => 'El Colegio Buenos Aires ha articulado con la Universidad Tecnológica Nacional, un Convenio de Certificación de Conocimientos en el área de Informática, que permite avalar los conocimientos impartidos por nuestra Institución.',
		'link'    => '/certificaciones',
		'color'   => 'niveles-widget-data-celeste',
	),
);

//el template normal es cuando no está en la pagina de inicio
if ( $pageActual != 'inicio' ) : ?>

<article class="niveles-widget-article animation-element fade-in-scroll">
	<figure class="niveles-widget-imagen">
		<img src="<?php echo MAINSURL; ?>/assets/images/<?php echo $contenidoCertificaciones[$data]['imagen']?>">
	</figure>
	<div class="niveles-widget-data <?php echo $contenidoCertificaciones[$data]['color']?> animation-element niveles-widget-data-animate">
		<h1>
			<?php echo $contenidoCertificaciones[$data]['titulo']?>
		</h1>

		<p>
			<?php echo $contenidoCertificaciones[$data]['parrafo']?>
		</p>
		<p>
			<a href="<?php echo MAINSURL . $contenidoCertificaciones[$data]['link']; ?>" class="btn btn-sm btn-border-inverse">
				Leer más
			</a>
		</p>
	</div>
</article>

<?php else : 
//el template de la pagina de incio
?>

<article class="niveles-widget-article-inicio animation-element fade-in-scroll">
	<figure class="niveles-widget-imagen">
		<img src="<?php echo MAINSURL; ?>/assets/images/<?php echo $contenidoCertificaciones[$data]['imagen']?>">
	</figure>
	<div class="niveles-widget-data <?php echo $contenidoCertificaciones[$data]['color']?> animation-element niveles-widget-data-animate">
		<h1>
			<?php echo $contenidoCertificaciones[$data]['titulo']?>
		</h1>

		<p>
			<?php echo $contenidoCertificaciones[$data]['parrafo']?>
		</p>
		<p>
			<a href="<?php echo MAINSURL . $contenidoCertificaciones[$data]['link']; ?>" class="btn btn-sm btn-border-inverse">
				Leer más
			</a>
		</p>
	</div>
</article>	

<?php endif; ?>