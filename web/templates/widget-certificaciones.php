<?php 

$contenidoCertificaciones = array(
	'idioma'    => array(
		'imagen'  => 'certifiacion-ingles.jpg',
		'titulo'  => 'Certificación Idiomas',
		'parrafo' => 'Desde ya hace 5 años el Colegio Buenos Aires ha implementado los cursos de Inglés Intensivo en su horario contra turno para brindarle la oportunidad a los alumnos de prepararse para rendir los exámenes Internacionales de Cambridge English YLE (Young learners of English) y GESE (Graded Examinations in Spoken English) de Trinity College London.',
		'link'    => '/certificaciones',
		'color'   => 'niveles-widget-data-naranja',
	),
	'utn'   => array(
		'imagen'  => 'certificacion-utn.jpg',
		'titulo'  => 'Certificación UTN',
		'parrafo' => 'Con el fin de continuar creciendo en su propuesta educativa, el Colegio Buenos Aires ha articulado con la Universidad Tecnológica Nacional - Facultad Regional Buenos Aires, un Convenio de Certificación de Conocimientos en el área de Informática, que permite avalar los conocimientos impartidos durante el paso de nuestros alumnos por la Institución.',
		'link'    => '/certificaciones',
		'color'   => 'niveles-widget-data-celeste',
	),
);

	switch ($data) {
		case 'utn':
		case 'idioma': ?>
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
		<?php break;
		
		default:
			//aca irian los dos en uno
			echo 'default';
			break;
	}
?>