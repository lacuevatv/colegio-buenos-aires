<?php 
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * CONFIG
 * Contenido: conneccion
*/
define ( 'VERSION', '1.0' );
//CARPETAS
define ( 'UPLOADS', dirname( __FILE__ ) . '/../galeria' );
define ( 'PAGESDIR', dirname( __FILE__ ) . '/../pages' );
define ( 'TEMPLATEDIR', dirname( __FILE__ ) . '/../templates' );
//urls
define ('CARPETASERVIDOR', '' );//esta variable se define si el sitio no está en el root del dominio y si está en una subcarpeta
define ('MAINSURL', 'http://' . $_SERVER['HTTP_HOST'] . CARPETASERVIDOR );
define ('UPLOADSURL', MAINSURL . '/galeria');
//base de datos
define("DB_SERVER", "localhost");
define("DB_USER", "dbuser");
define("DB_PASS", "123");
define("DB_NAME", "colegio");
//META TAGS
define('SITETITLE', 'Colegio Buenos Aires');
define('METADESCRIPTION', 'Inicial, Primaria y secundaria. Colegio Buenos Aires se encuentra en Acevedo 357, C.A.B.A');
define('METAKEYS', 'Colegio Buenos Aires, inicial, primaria, secundaria, colegio, Escuela, Buenos Aires, educación, campus virtual, estancia la chiquita, convenios utn, convenios cambridge,');
//LINKS:
define('LINK_FACEBOOK', '#');
define('LINK_INSTAGRAM', '#');
define('LINK_TWITTER', '#');
define('LINK_YOUTUBE', '#');
define('LINK_EMAIL', '#');
define('TELCOLEGIO', '4855 8289');
define('GOOGLECALENDAR', '#');
define('XHENDRA', '#');

//categoria para hacer loop
global $categorias;
$categorias = array(
	array( 'slug' => 'noticias', 'nombre' => 'Noticias'),
	array( 'slug' => 'edad-feliz', 'nombre' => 'Edad Feliz'),
);

//items del menu
global $menuItems;
$menuItems = array(
	array( 'url' => 'inicio', 'nombre' => 'Inicio'),
	array( 'url' => 'institucional', 'nombre' => 'Institucional'),
	array( 'url' => 'niveles', 'nombre' => 'Niveles', 'subItem' => array(
		array ('url' => 'niveles/inicial', 'nombre' => 'inicial'),
		array ('url' => 'niveles/primaria', 'nombre' => 'primaria'),
		array ('url' => 'niveles/secundario', 'nombre' => 'secundario'),
		),
	),
	array( 'url' => 'noticias', 'nombre' => 'Noticias'),
	array( 'url' => 'edad-feliz', 'nombre' => 'Edad Feliz'),
	array( 'url' => 'contacto', 'nombre' => 'Contacto'),
);

//galeria de imagenes del sidebar. Tres parametros, alt, src y caption para ponerle algún texto
global $galeriaBienvenidos;
$galeriaBienvenidos = array(
	array( 'url' => '2017-11-20-262-imagen.jpg', 'alt' => 'Colegio Buenos Aires', 'caption' => 'Colegio Buenos Aires'),
	array( 'url' => '2017-11-20-563-imagen.jpg', 'alt' => 'Colegio Buenos Aires', 'caption' => 'Colegio Buenos Aires'),
	array( 'url' => '2017-11-21-533-imagen.jpg', 'alt' => 'Colegio Buenos Aires', 'caption' => 'Colegio Buenos Aires'),
);
