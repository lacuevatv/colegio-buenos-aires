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
define ('MAINSURL', 'http://' . $_SERVER['HTTP_HOST']);
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

global $categorias;
$categorias = array(
	array( 'slug' => 'noticias', 'nombre' => 'Noticias'),
	array( 'slug' => 'edad-feliz', 'nombre' => 'Edad Feliz'),
);