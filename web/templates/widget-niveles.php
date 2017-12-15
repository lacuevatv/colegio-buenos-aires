<?php
$contenidoNiveles = array(
	'inicial'    => array(
		'imagen'  => 'inicial-widget-imagen.jpg',
		'titulo'  => 'Inicial',
		'parrafo' => 'A partir de la sala de 2 años nos proponemos lograr la integración del niño a un pequeño grupo social, acompañando y estimulando el paso del juego solitario al paralelo, recurriendo al juego simbólico.',
		'link'    => '/niveles/inicial',
	),
	'primaria'   => array(
		'imagen'  => 'primaria-widget-imagen.jpg',
		'titulo'  => 'Primario',
		'parrafo' => 'Educación común y laica, con características inclusivas y de un pensamiento abierto a los cambios socio-culturales que demandan nuevas pedagogías y nuevas tecnologías para lograr una enseñanza de aprendizajes significativos en nuestros alumnos.',
		'link'    => '/niveles/primaria',
	),
	'secundario' => array(
		'imagen'  => 'secundario-widget-imagen.jpg',
		'titulo'  => 'Secundario',
		'parrafo' => 'Hemos elaborado, a lo largo de años de experiencia, un Proyecto Educativo que se condice con nuestro criterio de Formación Integral. Realizamos un seguimiento continuo e individualizado de cada uno de nuestros alumnos.',
		'link'    => '/niveles/secundario',
	),
);
global $pageActual;

switch ($data) {
	case 'niveles': ?>
		<ul class="niveles-widget-app">
			<li>
				<article class="niveles-widget-article animation-element fade-in-scroll">
					<figure class="niveles-widget-imagen">
						<img src="<?php echo MAINSURL . '/assets/images/' . $contenidoNiveles['inicial']['imagen']; ?>">
					</figure>
					<div class="niveles-widget-data animation-element niveles-widget-data-animate">
						<h1>
							<?php echo $contenidoNiveles['inicial']['titulo']; ?>
						</h1>

						<p>
							<?php echo $contenidoNiveles['inicial']['parrafo']; ?>
						</p>
						<p>
							<a href="<?php echo MAINSURL . $contenidoNiveles['inicial']['link']; ?>" class="btn btn-sm btn-border-inverse">
								Leer más
							</a>
						</p>
					</div>
				</article>
			</li>

			<li>
				<article class="niveles-widget-article animation-element fade-in-scroll">
					<figure class="niveles-widget-imagen">
						<img src="<?php echo MAINSURL . '/assets/images/' . $contenidoNiveles['primaria']['imagen']; ?>">
					</figure>
					<div class="niveles-widget-data niveles-widget-data-celeste animation-element niveles-widget-data-animate">
						<h1>
							<?php echo $contenidoNiveles['primaria']['titulo']; ?>
						</h1>

						<p>
							<?php echo $contenidoNiveles['primaria']['parrafo']; ?>
						</p>
						<p>
							<a href="<?php echo MAINSURL . $contenidoNiveles['primaria']['link']; ?>" class="btn btn-sm btn-border-inverse">
								Leer más
							</a>
						</p>
					</div>
				</article>
			</li>

			<li>
				<article class="niveles-widget-article animation-element fade-in-scroll">
					<figure class="niveles-widget-imagen">
						<img src="<?php echo MAINSURL . '/assets/images/' . $contenidoNiveles['secundario']['imagen']; ?>">
					</figure>
					<div class="niveles-widget-data niveles-widget-data-verde animation-element niveles-widget-data-animate">
						<h1>
							<?php echo $contenidoNiveles['secundario']['titulo']; ?>
						</h1>

						<p>
							<?php echo $contenidoNiveles['secundario']['parrafo']; ?>
						</p>
						<p>
							<a href="<?php echo MAINSURL . $contenidoNiveles['secundario']['link']; ?>" class="btn btn-sm btn-border-inverse">
								Leer más
							</a>
						</p>
					</div>
				</article>
			</li>

		</ul>
	<?php break;

	case 'inicio': ?>
		<ul class="niveles-widget-app-column">
			<li>
				<article class="niveles-widget-article-inicio animation-element fade-in-scroll">
					<figure class="niveles-widget-imagen">
						<img src="<?php echo MAINSURL . '/assets/images/' . $contenidoNiveles['inicial']['imagen']; ?>">
					</figure>
					<div class="niveles-widget-data animation-element niveles-widget-data-animate">
						<h1>
							<?php echo $contenidoNiveles['inicial']['titulo']; ?>
						</h1>

						<p>
							<?php echo $contenidoNiveles['inicial']['parrafo']; ?>
						</p>
						<p>
							<a href="<?php echo MAINSURL . $contenidoNiveles['inicial']['link']; ?>" class="btn btn-border-inverse">
								Leer más
							</a>
						</p>
					</div>
				</article>
			</li>

			<li>
				<article class="niveles-widget-article-inicio animation-element fade-in-scroll">
					<figure class="niveles-widget-imagen">
						<img src="<?php echo MAINSURL . '/assets/images/' . $contenidoNiveles['primaria']['imagen']; ?>">
					</figure>
					<div class="niveles-widget-data niveles-widget-data-celeste animation-element niveles-widget-data-animate">
						<h1>
							<?php echo $contenidoNiveles['primaria']['titulo']; ?>
						</h1>

						<p>
							<?php echo $contenidoNiveles['primaria']['parrafo']; ?>
						</p>
						<p>
							<a href="<?php echo MAINSURL . $contenidoNiveles['primaria']['link']; ?>" class="btn btn-border-inverse">
								Leer más
							</a>
						</p>
					</div>
				</article>
			</li>

			<li>
				<article class="niveles-widget-article-inicio animation-element fade-in-scroll">
					<figure class="niveles-widget-imagen">
						<img src="<?php echo MAINSURL . '/assets/images/' . $contenidoNiveles['secundario']['imagen']; ?>">
					</figure>
					<div class="niveles-widget-data niveles-widget-data-verde animation-element niveles-widget-data-animate">
						<h1>
							<?php echo $contenidoNiveles['secundario']['titulo']; ?>
						</h1>

						<p>
							<?php echo $contenidoNiveles['secundario']['parrafo']; ?>
						</p>
						<p>
							<a href="<?php echo MAINSURL . $contenidoNiveles['secundario']['link']; ?>" class="btn btn-border-inverse">
								Leer más
							</a>
						</p>
					</div>
				</article>
			</li>

		</ul>
	<?php break;

	//default es widget sidebar
	default: ?>
	<article class="widget animation-element fade-in-scroll">
		
	<?php if ( $pageActual != 'inicio') : ?>		
	
		<h1>Niveles</h1>
	
	<?php endif; ?>
		
		<div id="acordionNivelWidget" class="acordion">
			
			<h3 class="title-acordion">
				<span class="icon-open">+</span>
					<?php echo $contenidoNiveles['inicial']['titulo']; ?>
			</h3>
			<div class="acordion-content">
				<div class="acordion-container">
					<p>
						<?php echo $contenidoNiveles['inicial']['parrafo']; ?>
					</p>
					<div class="btn-wrapper-center">
						<a href="<?php echo MAINSURL . $contenidoNiveles['inicial']['link']; ?>" class="btn btn-rosa">
							Leer más
						</a>
					</div>
				</div>
			</div><!-- //.acordion contenido -->

			<h3 class="title-acordion acordion-color-celeste">
				<span class="icon-open">+</span>
					<?php echo $contenidoNiveles['primaria']['titulo']; ?>
			</h3>
			<div class="acordion-content">
				<div class="acordion-container">
					<p>
						<?php echo $contenidoNiveles['primaria']['parrafo']; ?>
					</p>
					<div class="btn-wrapper-center">
						<a href="<?php echo MAINSURL . $contenidoNiveles['primaria']['link']; ?>" class="btn btn-celeste">
							Leer más
						</a>
					</div>
				</div>
			</div><!-- //.acordion contenido -->

			<h3 class="title-acordion acordion-color-verde">
				<span class="icon-open">+</span>
					<?php echo $contenidoNiveles['secundario']['titulo']; ?>
			</h3>
			<div class="acordion-content">
				<div class="acordion-container">
					<p>
						<?php echo $contenidoNiveles['secundario']['parrafo']; ?>
					</p>
					<div class="btn-wrapper-center">
						<a href="<?php echo MAINSURL . $contenidoNiveles['secundario']['link']; ?>" class="btn btn-verde">
							Leer más
						</a>
					</div>
				</div>
			</div><!-- //.acordion contenido -->		

		</div><!-- //.acordion -->

	</article>
	<?php break;
}

