<header class="header-niveles">
	<div class="container">
		<h1 class="subtitulo_clasico animation-element fade-in">
			Niveles Educativos
		</h1>

		<p class="text-justify">
			El Colegio Buenos Aires desde su fundación, se ha identificado por su educación laica y mixta.
		</p>

		<p class="text-justify">
			Entre los objetivos institucionales prioriza el desarrollo integral de la personalidad de los alumnos, educándoloes y preparándolos para actuar en forma autónoma y responsable en un mundo globalizado, y desarrollar a través de la acción diario los valores que lo lleven ser personas de bien.
		</p>

		<?php getTemplate( 'widget-niveles', 'niveles' ); ?>
	</div>
</header>

<!-- main-content -->
<div class="content-niveles">

<!--- HISTORIA -->
	<section>
		<div class="container">
			<div class="tabs-historia-wrapper">
				<ul class="tabs-historia-titulos">
					<li data-id="bienvenidos" class="animation-element slide-left">
						Bienvenidos
					</li>
					<li data-id="autoridades" class="animation-element slide-left" style="animation-delay: 0.3s">
						Autoridades
					</li>
					<li data-id="historia" class="animation-element slide-left" style="animation-delay: 0.5s">
						Historia
					</li>
				</ul>
				<div class="tabs-historia-contenido-wrapper">
					<div id="bienvenidos" class="tabs-historia-contenido">
						<div class="row row-align-center">
							<div class="col-50">
								<img src="<?php echo MAINSURL; ?>/assets/images/header-institucional.jpg" class="image-responsive">
							</div>
							<div class="col-50">
								<h3 class="color-celeste animation-element fade-in-scroll">
									Bienvenidos
								</h3>
								<p class="text-justify animation-element fade-in-scroll">
									Bienvenidos al Colegio Buenos Aires. Dentro de nuestra propuesta educativa, las activadades que se desarrollan en los Talleres Extraprogramáticos cumplen un rol protagónico en la formación integral del educando.
								</p>
								<p class="animation-element fade-in-scroll">
									<a href="<?php echo MAINSURL; ?>/institucional" class="btn btn-primary btn-sm">Ver más</a>
								</p>
							</div>
						</div>
					</div>

					<div id="autoridades" class="tabs-historia-contenido">
						<h3 class="color-celeste text-center animation-element fade-in-scroll">
							Autoridades
						</h3>
						<p class="text-center animation-element fade-in-scroll">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<div class="btn-wrapper-center animation-element fade-in-scroll">
							<a href="<?php echo MAINSURL; ?>/institucional" class="btn btn-primary btn-sm">Ver más</a>
						</div>
					</div>

					<div id="historia" class="tabs-historia-contenido">
						<div class="row row-align-center">
							<div class="col-50">
								<h3 class="color-celeste animation-element fade-in-scroll">
									Historia
								</h3>
								<p class="text-justify animation-element fade-in-scroll">
									La Patria había cumplido un siglo y eran épocas muy duras y llenas de privaciones. Un joven maestro y profesor de Ciencias, proveniente de Rosario, provincia de Santa Fe, soñaba con fundar un instituto educativo. Desde temprana edad el joven Julio Faggioni había sentido el llamado de su vocación docente...
								</p>
								<p class="animation-element fade-in-scroll">
									<a href="<?php echo MAINSURL; ?>/institucional" class="btn btn-primary btn-sm">Ver más</a>
								</p>
							</div>
							<div class="col-50">
								<img src="<?php echo MAINSURL; ?>/assets/images/historia.jpg" class="image-responsive">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
	
<!--- INSCRIBITE -->
    <aside class="separador-inscribite animation-element slide-up in-view">
    	<?php getTemplate( 'separador-inscribite' ); ?>
    </aside>

<!--- widgets -->
	<section>
		<div class="container">
			<ul class="niveles-widget-app-wrap">
				
				<li>
					<?php getTemplate( 'widget-certificaciones', 'utn' ); ?>
				</li>

				<li>
					<?php getTemplate( 'widget-certificaciones', 'idioma' ); ?>
				</li>

				<li>
					<?php getTemplate( 'widget-talleres' ); ?>
				</li>

				<li>
					<?php getTemplate( 'widget-jornada-complementaria' ); ?>
				</li>

				<li>
					<?php getTemplate( 'widget-campo-deportes' ); ?>
				</li>

				<li>
					<?php getTemplate( 'widget-campus', 'niveles' ); ?>
				</li>

			</ul>
		</div>
	</section>

<!--- CONTACTO -->
	<section class="section-contacto">
		<div class="container">

			<h2 class="subtitulo_clasico text-center animation-element fade-in-scroll">
				Contactanos
			</h2>
			<div class="row">
				<div class="col-50">
					
					<h3 class="animation-element fade-in-scroll">
						Formulario de contacto
					</h3>
					<p class="animation-element text-justify fade-in-scroll">
						Puede completar el formulario para solicitar presupuestos o realizar preguntas generales sobre Colegio Buenos Aires y nuestros cursos. ¡Le responderemos a la brevedad!
					</p>
					<div class="contact-form-wrapper animation-element fade-in-scroll">
						<?php getTemplate( 'formulario-contacto' ); ?>
					</div>
				</div>

				<div class="col-50">
					<h3 class="animation-element fade-in-scroll">
						Mapa y Direcciones
					</h3>
					<p class="animation-element fade-in-scroll">
						Colegio Buenos Aires se encuentra en <?php echo COLEGIODIRECCION; ?>
					</p>

					<iframe src="<?php echo MAPAGOOGLE; ?>" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen class="animation-element fade-in"></iframe>
				</div>
			</div>
		</div>
	</section>
</div><!-- //.main-content -->