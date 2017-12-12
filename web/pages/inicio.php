<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA INICIO
*/
include 'header.php';
?>
<!--- .inner-wrapper: contenido principal y específico del template -->
<div class="inner-wrapper" >
	<header>
		<h1 class="sr-only">Colegio Buenos Aires</h1>

		<div class="container">
			<div class="widgets-inicio-wrapper">
				
				<ul class="widgets-inicio">
					<li>
						<?php //getTemplate( 'widget-bienvenidos' ); ?>
					</li>
					<li>
						<?php //getTemplate( 'widget-niveles', 'niveles' ); ?>
					</li>
					<li>
						<?php //getTemplate( 'widget-calendario' ); ?>
					</li>
					<li>
						<?php //getTemplate( 'widget-campus-virtual' ); ?>
					</li>
					<li>
						<?php //getTemplate( 'widget-certificaciones', 'ingles' ); ?>
					</li>
					<li>
						<?php //getTemplate( 'widget-campo-deportes' ); ?>
					</li>
				</ul>

			</div>
		</div>

	</header>
	<!-- main-content -->
	<div class="content-niveles">
		<div class="container">

			<div class="row">
				<div class="col-50">
	<!--- INSTITUCIONAL -->
					<section>
						<h2 class="subtitulo_clasico text-center animation-element fade-in-scroll">
							Institucional
						</h2>
						
						Vemos que poner

					</section>
				</div>

				<div class="col-50">
	<!--- NOTICIAS -->
					<section>
						<h2 class="subtitulo_clasico text-center animation-element fade-in-scroll">
							Noticias
						</h2>
						<ul class="last-news-list">

						<?php 
						$noticias = getPosts( 'noticias', 2 ); 	
						for ($i=0; $i < count($noticias); $i++) { ?>
							<li>
								<article class="wrapper-last-news">
									<a href="<?php echo MAINSURL . '/noticias/' . $noticias[$i]['post_url']; ?>" title="Leer más">
										<h1>
											<?php echo $noticias[$i]['post_titulo']; ?>
										</h1>
									</a>
									
									<div class="wrapper-last-news-data">
										<a href="<?php echo MAINSURL . '/noticias/' . $noticias[$i]['post_url']; ?>" title="Leer más">
											<figure>
												<img src="<?php echo UPLOADSURL . '/' . $noticias[$i]['post_imagen']; ?>" alt="<?php echo $noticias[$i]['post_titulo']; ?>" class="image-responsive">
											</figure>		
										</a>

										<p class="last-news-data">
											<?php echo acortaTexto( $noticias[$i]['post_resumen'], 10 ); ?>
										</p>
										<p>
											<a class="btn btn-sm btn-primary" href="<?php echo MAINSURL . '/noticias/' . $noticias[$i]['post_url']; ?>" class="">Leer más</a>
										</p>

									</div>
									
								</article>
							</li>		 	
						<?php } ?>
							
						</ul>
					</section>
				</div>
			</div>

		</div><!--- //.container -->


	<!--- INSCRIBITE -->
	    <aside class="separador-inscribite animation-element slide-up in-view">
	    	<?php getTemplate( 'separador-inscribite' ); ?>
	    </aside>
	
		<div class="container">
			<div class="row">
				<div class="col-50">
	<!--- CAMPUS -->
					<section>
						<h2 class="subtitulo_clasico text-center animation-element fade-in-scroll">
							Campus Virtual
						</h2>
						<p>
							Completar
						</p>
					</section>
				</div>

				<div class="col-50">
	<!--- NIVELES -->
					<section>
						<h2 class="subtitulo_clasico text-center animation-element fade-in-scroll">
							Niveles
						</h2>
						
						<?php getTemplate( 'widget-niveles', 'inicio' ); ?>

					</section>
				</div>
			</div>
		
			
			<div class="row">
				<div class="col-50">
	<!--- CONTACTO -->
					<section>
						<h2 class="subtitulo_clasico text-center animation-element fade-in-scroll">
							Contacto
						</h2>
						<p>
							Puede completar el formulario para solicitar presupuestos o realizar preguntas generales sobre Colegio Buenos Aires y nuestros cursos. ¡Le responderemos a la brevedad!
						</p>
						<div class="contact-form-wrapper">
							<?php getTemplate( 'formulario-contacto' ); ?>
						</div>
					</section>
				</div>

				<div class="col-50">
	<!--- MAPA -->
					<section>
						<h2 class="subtitulo_clasico text-center animation-element fade-in-scroll">
							Mapa
						</h2>
						<p>
							Colegio Buenos Aires se encuentra en <?php echo COLEGIODIRECCION; ?>
						</p>

						<iframe src="<?php echo MAPAGOOGLE; ?>" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen class="animation-element fade-in"></iframe>
					</section>
				</div>
			</div>
		</div><!--- //.container -->
		
	</div><!--- //.content-niveles (main content) -->

	<aside>
		Aca van las frases
	</aside>

</div><!--- //.inner-wrapper -->

<?php include 'footer.php'; ?>