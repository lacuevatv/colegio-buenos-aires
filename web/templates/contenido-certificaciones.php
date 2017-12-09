<?php
global $pageActual; ?>
	
<div class="certificaciones-wrapper">
	
	<?php if ( $pageActual == 'niveles' ) {
		
		echo '<h2>Certificaciones</h2>';
	
	} else {
		
		echo '<h3>Detalles:</h3>';
	
	} ?>

	<div class="certificaciones-tabla">

<?php switch ( $data ) {

		case 'primaria': ?>
	<!-- CERTIFICACIONES PRIMARIA -->
	<article class="certificacion article-border-right">
		<a href="<?php echo MAINSURL; ?>/certificaciones">
			<h1>	
				Inglés
			</h1>
		</a>
		<ul class="certificacion-lista">
			<li>
				Trinity College London Gese: Nivel Initial y Elemental
			</li>
			<li>
				Cambridge Universirt Yle: Nivel Starters Movers Flyers
			</li>
		</ul>
	</article>

	<article class="certificacion">
		<h1>
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
			<h1>	
				Inglés
			</h1>
		</a>
		<ul class="certificacion-lista">
			<li>
				Trinity College London Gese: Nivel Initial y Elemental
			</li>
			<li>
				Cambridge Universirt Yle: Nivel Starters Movers Flyers
			</li>
		</ul>
	</article>

	<article class="certificacion">
		<h1>
			Informática UTN
		</h1>
		<ul class="certificacion-lista">
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