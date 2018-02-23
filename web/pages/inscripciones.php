<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA INSCRIPCIONES
*/
$dispositivo = dispositivo();

include 'header.php';
?>
<!--- .inner-wrapper: contenido principal y específico del template -->
<div id="contact-page" class="inner-wrapper">
   <header class="main-title-header-inscripciones">
    	<div class="container">
	        <h1>Inscripciones</h1>
	        <p>
	        	Información requerida, archivos para descargar y detalle sobre uniforme.
	        </p>
	    </div>
    </header>
    <div class="main-content-page-wrapper container">
	    <div class="main-content-page inscripciones">
	    	<div class="instrucciones">
	    		<h2>Instrucciones para solicitar entrevistas para la inscripción</h2>
	    		<ol>
	    			<li>
	    				Comunicarse a los teléfonos del colegio (4855-8289/4854-3882)
	    			</li>
	    			<li>
	    				Solicitar a Secretaría una entrevista para información del nivel que requiera ((inicial, primaria, secundario).
	    			</li>
	    			<li>
	    				Para ser agendado se le solicitará su nombre y un celular de contacto.
	    			</li>
	    			<li>
	    				El día de la entrevista será recibido por la dirección/coordinación y/o psicopedagoga quienes le informarán de la organización del colegio.
	    			</li>
	    		</ol>
	    	</div>

	    	<section>
	    		
	    		<h2 class="subtitulo_clasico animation-element fade-in-scroll">
	    			Inicial
	    		</h2>

	    		<h3 class="animation-element fade-in-scroll">
		    		Documentación para el legajo del alumno
		    	</h3>

		    	<ol class="animation-element fade-in-scroll">
		    		<li>
	    				Fotocopia de DNI (1° y 2° hoja)
	    			</li>
	    			<li>
		    			Fotocopia de partida de nacimiento	
	    			</li>
	    			<li>
		    			Vacunación (fotocopia)	
	    			</li>
	    			<li>
	    				Informe del jardín anterior (fotocopia)
	    			</li>
	    			<li>
		    			Libre deuda (en caso de provenir de colegio privado)	
	    			</li>
		    	</ol>

		    	<div class="docs-list-inscripcion animation-element fade-in-scroll">
					<h3 class="animation-element fade-in-scroll">
						Descargas
					</h3>
					<ul class="lista-documentacion">
						<?php getDocumentation( 'inicial', 'docs' ); ?>
					</ul>
				</div>

	    		<h2 class="subtitulo_clasico animation-element fade-in-scroll">
	    			Primario
	    		</h2>

	    		<h3 class="animation-element fade-in-scroll">
		    		Documentación requerida para el legajo del alumno
		    	</h3>

		    	<ol class="animation-element fade-in-scroll">
		    		<li>
	    				Fotocopia de DNI (1° y 2° hoja)
	    			</li>
	    			<li>
		    			Fotocopia de partida de nacimiento	
	    			</li>
	    			<li>
		    			Vacunación (fotocopia)	
	    			</li>
	    			<li>
	    				Informe del colegio anterior
	    			</li>
	    			<li>
		    			Libre deuda (en caso de provenir de colegio privado)	
	    			</li>
	    			<li>
	    				Apto físico al inicio del ciclo lectivo
	    			</li>
	    			<li>
	    				Los alumnos que provienen de <strong>Colegios Municipales</strong> deberán presentar el <strong>Boletín</strong> (original) e <strong>informe</strong>. Los alumnos que provienen de <strong>Colegios Privados</strong> deberán presentar <strong>Certificación de aprobación de grado</strong> (original), <strong>Boletín</strong> (fotocopia) e <strong>informe</strong>.
	    			</li>
	    			<li>
	    				Los alumnos de primer grado deberán presentar <strong>Certificado de agudeza visual</strong>
	    			</li>
				</ol>

				<div class="docs-list-inscripcion animation-element fade-in-scroll">
					<h3 class="animation-element fade-in-scroll">
						Descargas
					</h3>
					<ul class="lista-documentacion">
						<?php getDocumentation( 'primaria', 'docs' ); ?>
					</ul>
				</div>

	    		<h2 class="subtitulo_clasico animation-element fade-in-scroll">
		    		Secundario
		    	</h2>

	    		<h3 class="animation-element fade-in-scroll">
	    			Documentación obligatoria para el ingreso de 1° año
	    		</h3>

	    		<ol class="animation-element fade-in-scroll">
	    			<li>
	    				Solicitud de Inscripción
	    			</li>
	    			<li>
	    				Certificado original de 7° grado
	    			</li>
	    			<li>
	    				Fotocopia de DNI (1° y 2° hoja)
	    			</li>
	    			<li>
	    				Fotocopia de partida de nacimiento
	    			</li>
	    			<li>
	    				Fotocopia de libreta sanitaria
	    			</li>
	    			<li>
	    				Libre deuda (en caso de provenir de colegio privado)
	    			</li>
	    			<li>
	    				Informe del colegio que proviene
	    			</li>
	    			<li>
	    				Apto físico al inicio del ciclo lectivo
	    			</li>
	    			<li>
	    				Constancia de alumno regular
	    			</li>
				</ol>

				<h3 class="animation-element fade-in-scroll">
	    			Documentación obligatoria para el ingreso de 2° a 5° año
	    		</h3>
				
				<ol class="animation-element fade-in-scroll">	
					<li>
		    			Solicitud de inscripción
	    			</li>
	    			<li>
		    			Constancia de certificado de estudios en trámite
	    			</li>
	    			<li>
		    			Fotocopia de DNI (1° y 2° hoja)
	    			</li>
	    			<li>
		    			Fotocopia de partida de nacimiento	
	    			</li>
	    			<li>
		    			Fotocopia de Libreta Sanitaria
	    			</li>
	    			<li>
		    			Libre deuda (en caso de provenir de colegio privado)
	    			</li>
	    			<li>
	    				Informe del colegio que proviene
	    			</li>
	    			<li>
	    				Apto físico al inicio del ciclo lectivo
	    			</li>
				</ol>

				<div class="docs-list-inscripcion animation-element fade-in-scroll">
					<h3 class="animation-element fade-in-scroll">
						Descargas
					</h3>
					<ul class="lista-documentacion">
						<?php getDocumentation( 'secundario', 'docs' ); ?>
					</ul>
				</div>

	    	</section>
	<!-- UNIFORME -->
	    	<section class="section-uniforme">
	    		<h2 class="subtitulo_clasico animation-element fade-in-scroll">
	    			Uniforme del Colegio Buenos Aires
	    		</h2>

	    		<h4 class="animation-element fade-in-scroll">
	    			Mujeres
	    		</h4>

	    		<ul class="lista-inscripciones animation-element fade-in-scroll">
	    			<li>
	    				Chomba del Colegio Buenos Aires
	    			</li>
	    			<li>
						Pollera gris a pantalón gris de vestir de sarga o gabardina
					</li>
					<li>
						Pullover color azul escote en “V”
					</li>
					<li>
						Zapatillas oscuras o zapatos negros/marrones
					</li>
					<li>
						Campera lisa color azul marino (jean NO) con el escudo del Colegio Buenos Aires. Opcional color negro.
					</li>
	    		</ul>

	    		<h4 class="animation-element fade-in-scroll">
	    			Varones
	    		</h4>

	    		<ul class="lista-inscripciones animation-element fade-in-scroll">
	    			<li>
	    				Chomba del Colegio Buenos Aires
	    			</li>
	    			<li>
	    				Pullover color azul escote en “V”
	    			</li>
	    			<li>
	    				Zapatillas oscuras o zapatos negros/marrones
	    			</li>
	    			<li>
	    				Chomba del Colegio Buenos Aires
	    			</li>
	    			<li>
	    				Campera lisa color azul marino (jean NO) con el escudo del Colegio Buenos Aires. Opcional color negro.
	    			</li>
	    		</ul>

	    		<h3 class="animation-element fade-in-scroll">
	    			Uniforme de Educación Física
	    		</h3>

	    		<h4 class="animation-element fade-in-scroll">
	    			Mujeres
	    		</h4>

	    		<ul class="lista-inscripciones animation-element fade-in-scroll">
	    			<li>
	    				Conjunto jogging color gris, con el estampado del Colegio Buenos Aires en el buzo (invierno)
	    			</li>
	    			<li>
	    				Pollera portafolio color azul y remera color blanco cuello redondo con el escudo del Colegio Buenos Aires (verano)
	    			</li>
	    			<li>
	    				Medias color blanco
	    			</li>
	    			<li>
	    				Zapatillas color blanco
	    			</li>
	    		</ul>

	    		<h4 class="animation-element fade-in-scroll">
	    			Varones
	    		</h4>

	    		<ul class="lista-inscripciones animation-element fade-in-scroll">
	    			<li>
	    				Conjunto jogging color gris, con el estampado del Colegio Buenos Aires en el buzo (invierno)
	    			</li>
	    			<li>
	    				Pantalón corto color azul y remera color blanco cuello redondo con el escudo del Colegio Buenos Aires (Verano)
	    			</li>
	    			<li>
	    				Medias color blanco
	    			</li>
	    			<li>
	    				Zapatillas color blanco
	    			</li>
	    		</ul>

	    		<h3 class="animation-element fade-in-scroll">
	    			Uniforme Jardín, mujeres y varones
	    		</h3>

	    		<ul class="lista-inscripciones animation-element fade-in-scroll">
	    			<li>
	    				Conjunto Joggin color azul con el logo del Colegio Buenos Aires en el buzo (invierno)
	    			</li>
	    			<li>
	    				Pantalón corto color azul, remera blanca cuello redondo con el logo del Colegio Buenos Aires (verano)
	    			</li>
	    		</ul>
	    	</section>

	    	<section class="contact-form-wrapper">
	    		<h2 class="subtitulo_clasico animation-element fade-in-scroll">
	    			Contacto
	    		</h2>
	    		<p class="text-justify animation-element fade-in-scroll">
					Puede completar el formulario para solicitar información o hacer consultas sobre nuestras propuestas educativas. ¡Le responderemos a la brevedad!
				</p>
						
	    		<?php getTemplate( 'formulario-contacto' ); ?>

	    	</section>

	    	<section class="contact-data-wrapper">
	    		<iframe src="<?php echo MAPAGOOGLE; ?>" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen class="animation-element fade-in"></iframe>
	    		
	    		<ul class="contact-data-items row">
		    		<div class="col-50 animation-element slide-up">
		    			<li class="icon-before icon-before-location">
		    				<?php echo COLEGIODIRECCION; ?>
		    			</li>
		    			<li class="icon-before icon-before-email">
		    				<?php echo COLEGIOEMAIL; ?>
		    			</li>
		    		</div>

		    		<div class="col-50 animation-element slide-up">
		    			<li class="icon-before icon-before-tel">
		    				<?php echo TELCOLEGIO; ?>
		    				/
		    				<?php echo TELCOLEGIO2; ?>
		    			</li>
		    			<li class="icon-before icon-before-clock">
		    				Lunes a Viernes de 9:00 a 18:00hs
		    			</li>
		    		</div>
	    		</ul>

	    	</section>

	    </div><!-- //.main-content-page -->
	<?php if ( $dispositivo == 'pc' )  : ?> 
		    	 	
	    <aside class="sidebar">
	       <?php getTemplate( 'sidebar' ); ?>
	   	</aside>

	<?php endif; ?> 
   </div><!-- //.main-content-page-wrapper -->
        
</div><!--- //.inner-wrapper -->

<?php include 'footer.php'; ?>