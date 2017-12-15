<?php 

$contenidoCampus = array(
		'imagen'  => '2017-11-24-303-imagen.jpg',
		'titulo'  => 'Campus virtual',
		'parrafo' => 'Es una plataforma educativa virtual que nos permite crear un espacio educativo para incluir nuevos aprendizajes.',
		'link'    => '/campus-virtual',
		'url'     => CAMPUSVIRTUAL,
);

	switch ($data) {
		case 'niveles':
		case 'inicio2': ?>
		<article class="niveles-widget-article <?php if ( $data == 'inicio2' ) {
			echo 'niveles-widget-article-taller';
		} ?> animation-element fade-in-scroll">
			<figure class="niveles-widget-imagen">
				<img src="<?php echo MAINSURL . '/assets/images/campus-virtual.jpg'; ?>" alt="Campus Virtual - Colegio Buenos Aires">
			</figure>
			<div class="niveles-widget-data animation-element niveles-widget-data-animate">
				<h1>
					<?php echo $contenidoCampus['titulo']; ?>
				</h1>

				<p>
					<?php echo $contenidoCampus['parrafo']; ?>
				</p>
				<p>
					<a href="<?php echo MAINSURL . $contenidoCampus['link']; ?>" class="btn btn-sm btn-border-inverse">
						Leer más
					</a>
					<a href="<?php echo MAINSURL . $contenidoCampus['url']; ?>" target="_blank" class="btn btn-sm btn-primary link-widget">Entrar</a>
				</p>
			</div>
		</article>
		<?php break;
		
		case 'inicio1': ?>
		<article class="niveles-widget-article-inicio animation-element fade-in-scroll">
			<figure class="niveles-widget-imagen">
				<img src="<?php echo MAINSURL . '/assets/images/campus-virtual.jpg'; ?>" alt="Campus Virtual - Colegio Buenos Aires">
			</figure>
			<div class="niveles-widget-data animation-element niveles-widget-data-animate">
				<h1>
					<?php echo $contenidoCampus['titulo']; ?>
				</h1>

				<p>
					<?php echo $contenidoCampus['parrafo']; ?>
				</p>
				<p>
					<a href="<?php echo MAINSURL . $contenidoCampus['link']; ?>" class="btn btn-sm btn-border-inverse">
						Leer más
					</a>
					<a href="<?php echo MAINSURL . $contenidoCampus['url']; ?>" target="_blank" class="btn btn-sm btn-primary link-widget">Entrar</a>
				</p>
			</div>
		</article>
		<?php break;

		default: ?>
			<article class="widget animation-element fade-in-scroll">
			
				<h1>
					<?php echo $contenidoCampus['titulo']; ?>
				</h1>
				
				<p>
					<?php echo $contenidoCampus['parrafo']; ?>
					<a href="<?php echo MAINSURL . $contenidoCampus['link']; ?>" class="link link-widget">Leer más</a>
				</p>
				
				<figure>
					<img src="<?php echo UPLOADSURL . '/' . $contenidoCampus['imagen']; ?>" alt="Campus Virtual - Colegio Buenos Aires">
				</figure>

				<a href="<?php echo MAINSURL . $contenidoCampus['url']; ?>" target="_blank" class="btn btn-sm btn-primary link-widget">Entrar</a>

			</article>
		<?php break;
	}