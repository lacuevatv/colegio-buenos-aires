<?php
global $pageActual;
global $dispositivo;

$autoridades = array(
	array(
		'nombre' => 'Julio Guillermo Faggioni Méndez',
		'cargo' => 'Director General',
		'imagen' => 'faggioni.png',
	),
	array(
		'nombre' => 'Mirta Selzler',
		'cargo' => 'Directora de Primaria',
		'imagen' => 'mirta.png',
	),
	array(
		'nombre' => 'Roxana Caneiro',
		'cargo' => 'Vicedirectora de Primaria',
		'imagen' => 'roxana.png',
	),
	array(
		'nombre' => 'Agustín Iussig',
		'cargo' => 'Directivo adjunto',
		'imagen' => 'agustin.png',
	),
	array(
		'nombre' => 'Maximiliano Silva d´Herbil',
		'cargo' => 'Rector',
		'imagen' => 'maxi.png',
	),
	array(
		'nombre' => 'Verónica Carballeda',
		'cargo' => 'Directora de Estudios',
		'imagen' => 'veronica.png',
	),
	array(
		'nombre' => 'María Pía Bonini',
		'cargo' => 'Psicopedagoga',
		'imagen' => 'maria_pia.png',
	),
	array(
		'nombre' => 'Silvina Perincioli',
		'cargo' => 'Psicopedagoga',
		'imagen' => 'silvina.png',
	),
);


if ( $pageActual != 'inicio' && $dispositivo != 'movil' ) : ?>

<ul class="autoridades-list-plus">
	<?php 
		for ($i=0; $i < count($autoridades) ; $i++) { ?>

		<li>
			<article>
				<img src="<?php echo MAINSURL . '/assets/images/' . $autoridades[$i]['imagen']; ?>" alt="<?php echo $autoridades[$i]['nombre']; ?>">
				<h1>
					<?php echo $autoridades[$i]['nombre']; ?>
				</h1>
				<h4>
					<?php echo $autoridades[$i]['cargo']; ?>
				</h4>
			</article>
		</li>
	<?php }
	?>
</ul>

<?php else : ?>

<ul class="autoridades-list">
	<?php 
		for ($i=0; $i < count($autoridades) ; $i++) { 
			echo '<li>';
			echo '<strong>' . $autoridades[$i]['nombre'] . ':</strong> ' . $autoridades[$i]['cargo'];
			echo '</li>';
		}
	?>
</ul>

<?php endif; ?>
