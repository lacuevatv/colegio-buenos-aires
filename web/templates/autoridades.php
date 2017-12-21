<?php
global $pageActual;
global $dispositivo;

$autoridades = array(
	array(
		'nombre' => 'Mirta Selzler',
		'cargo' => 'Directora de Primaria',
		'imagen' => 'mirta.png',
	),
	array(
		'nombre' => 'Marta Lenzo',
		'cargo' => 'Vicedirectora de Primaria',
		'imagen' => 'marta.png',
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
		'nombre' => 'Alicia Morello',
		'cargo' => 'Directora de Estudios',
		'imagen' => 'alicia.png',
	),
);


if ( $pageActual != 'inicio' && $dispositivo != 'movil' ) : ?>

<ul class="autoridades-list-plus">
	<?php 
		for ($i=0; $i < count($autoridades) ; $i++) { ?>

		<li <?php if ( $pageActual == 'niveles' ) { echo 'class=autoridades-list-plus-width'; } ?>>
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