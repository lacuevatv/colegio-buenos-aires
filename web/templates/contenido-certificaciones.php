<?php
global $pageActual; ?>
	
<div class="certificaciones-wrapper animation-element fade-in-scroll">
	
	<?php if ( $pageActual == 'niveles' ) {
		
		echo '<h2 class="animation-element slide-up">Certificaciones</h2>';
	
	} else {
		
		echo '<h3 class="animation-element slide-up">Detalles:</h3>';
	
	} ?>

	<div class="certificaciones-tabla">

<?php switch ( $data ) {

		case 'primaria': ?>
	<!-- CERTIFICACIONES PRIMARIA -->
	<article class="certificacion article-border-right">
		<a href="<?php echo MAINSURL; ?>/certificaciones">
			<h1 class="animation-element slide-up">	
				Inglés
			</h1>
		</a>
		<ul class="certificacion-lista animation-element slide-left">
			<li>
				Trinity College London Gese: Nivel Initial y Elemental
			</li>
			<li>
				Cambridge Universirt Yle: Nivel Starters Movers Flyers
			</li>
		</ul>
	</article>

	<article class="certificacion animation-element slide-right">
		<h1 class="animation-element slide-up">
			Informática UTN
		</h1>
		<ul class="certificacion-lista">
			<li>
				Word Junior
			</li>
			<li>
				PowerPoint Junior
			</li>
		</ul>
	</article>

	<?php break;
		
		case 'secundario': ?>
		<!-- CERTIFICACIONES SECUNDARIO -->
	<article class="certificacion article-border-right">
		<a href="<?php echo MAINSURL; ?>/certificaciones">
			<h1 class="animation-element slide-up">	
				Inglés
			</h1>
		</a>
		<ul class="certificacion-lista animation-element slide-left">
			<li>
				Cambridge English: Key (KET) es un examen que evalúa  la habilidad de los alumnos para poder usar el inglés para comunicarse en situaciones simples. Se encuentra en nivel <em>A2 ELEMENTAL</em> en la escala internacional.
			</li>
		</ul>
	</article>

	<article class="certificacion">
		<h1 class="animation-element slide-up">
			Informática UTN
		</h1>
		<ul class="certificacion-lista animation-element slide-right">
			<li>
				Word Fundamentos Avanzado
			</li>
			<li>
				Excel Fundamentos Avanzado
			</li>
		</ul>
	</article>

	<?php break;
	} ?>
		
</div>