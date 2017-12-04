<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * SIDEBAR TEMPLATE
 * Cada widget es un template también
*/

global $pageActual;
$widgets = array();

switch ( $pageActual ) {
	case 'contacto':
		$widgets = array( 
			'bienvenidos', 'niveles', 'campus', 'noticias',);
		break;
	
	case 'institucional':
		$widgets = array( 
			'contacto', 'noticias', 'campus', 'calendario', 'edad-feliz', 'xhendra', 
		);
		break;

	case 'noticias':
		$widgets = array( 
			'bienvenidos', 'niveles', 'campus', 'edad-feliz', 'calendario', 'contacto'
		);
		break;

	case 'edad-feliz':
		$widgets = array( 
			'bienvenidos', 'niveles', 'campus', 'noticias', 'calendario', 'xhendra', 'contacto'
		);
		break;

	case 'niveles':
		$widgets = array( 
			'bienvenidos', 'campus', 'noticias', 'calendario', 'edad-feliz', 'xhendra', 'contacto'
		);
		break;

	default:
		$widgets = array( 
			'bienvenidos', 'niveles', 'campus', 'noticias', 'calendario', 'edad-feliz', 'xhendra', 'contacto'
		);
		break;
}

?>

<ul class="sidebar-widgets">

<?php 

for ($i=0; $i < count($widgets); $i++) { 
	$widget = 'widget-' . $widgets[$i];
	echo '<li>';
		getTemplate( $widget );
	echo '</li>';
}

?>
</ul>