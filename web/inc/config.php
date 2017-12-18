<?php 
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * CONFIG
 * Contenido: conneccion
*/
define ( 'VERSION', '1.0' );
define ( 'CANTPOST', 5 );
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
define('METADESCRIPTION', 'Bienvenidos al Colegio Buenos Aires. Dentro de nuestra propuesta educativa, las activadades que se desarrollan en los Talleres Extraprogramáticos cumplen un rol protagónico en la formación integral del educando.');
define('METAKEYS', 'Colegio Buenos Aires, inicial, primaria, secundaria, colegio, Escuela, Buenos Aires, educación, campus virtual, estancia la chiquita, convenios utn, convenios cambridge,');
//LINKS:
define('LINK_FACEBOOK', '#');
define('LINK_INSTAGRAM', '#');
define('LINK_TWITTER', '#');
define('LINK_YOUTUBE', '#');
define('TELCOLEGIO', '4855 8289');
define('COLEGIODIRECCION', 'Acevedo 357, Villa Crespo, 1414 CABA');
define('COLEGIOEMAIL', 'info@colegiobuenosaires.edu.ar');//email que se ve
define('LINK_EMAIL', COLEGIOEMAIL);//email donde se envian los formularios
define('GOOGLECALENDAR', '#');
define('CAMPUSVIRTUAL', 'http://campus.colegiobuenosaires.com/');
define('XHENDRA', '#');
define('LINKINSCRIBITE', MAINSURL . '/contacto');
define('MAPAGOOGLE', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.2362842021116!2d-58.44429744015378!3d-34.59818617135286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca0b414510e1%3A0x43564576cc0da8d3!2sAcevedo+357%2C+C1414DJG+CABA!5e0!3m2!1ses!2sar!4v1511791250465' );
define('LINKFORMULARIOCAMPUS','https://docs.google.com/forms/d/e/1FAIpQLSdvBA2otgsuDDqMlR2aup2O8fnA1ccQJDK0mlJU9B3E9w9Q0g/viewform');
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
	'hideMenus' =>  array(
		array ('url' => 'campo-deportes', 'nombre' => 'campo de deportes'),
		array ('url' => 'campus-virtual', 'nombre' => 'campus virtual'),
		array ('url' => 'certificaciones', 'nombre' => 'certificaciones'),
		array ('url' => 'documentacion', 'nombre' => 'documentacion'),
		array ('url' => 'jornada-complementaria', 'nombre' => 'jornada complementaria'),
		array ('url' => 'talleres', 'nombre' => 'talleres'),
		array ('url' => GOOGLECALENDAR, 'nombre' => 'Calendario'),
	),
);

//galeria de imagenes del sidebar. Tres parametros, alt, src y caption para ponerle algún texto
global $galeriaBienvenidos;
$galeriaBienvenidos = array(
	array( 'url' => '2017-12-12-144-imagen.jpg', 'alt' => 'Colegio Buenos Aires', 'caption' => 'Entrada'),
	array( 'url' => '2017-12-12-636-imagen.jpg', 'alt' => 'Colegio Buenos Aires', 'caption' => 'Folklore - Día de la tradición'),
	array( 'url' => '2017-11-20-563-imagen.jpg', 'alt' => 'Colegio Buenos Aires', 'caption' => 'Colegio Buenos Aires'),
	array( 'url' => '2017-12-12-981-imagen.jpg', 'alt' => 'Colegio Buenos Aires', 'caption' => 'Colegio Buenos Aires'),
	array( 'url' => '2017-12-12-719-imagen.jpg', 'alt' => 'Colegio Buenos Aires', 'caption' => 'Hall'),
	array( 'url' => '2017-12-12-507-imagen.jpg', 'alt' => 'Colegio Buenos Aires', 'caption' => 'Estancia La Chiquita'),
	array( 'url' => '2017-12-12-524-imagen.jpg', 'alt' => 'Colegio Buenos Aires', 'caption' => 'Pasillo'),
	array( 'url' => '2017-12-12-836-imagen.jpg', 'alt' => 'Colegio Buenos Aires', 'caption' => 'Campana'),
);

global $frases;
$frases = array(
	array(
		'frase' => 'Para construir la paz tenemos que centrarnos en las cosas que nos unen no en las que nos diferencian.',
		'autor' => 'UNICEF',
	),
	array(
		'frase' => 'Dime y lo olvido, enséñame y lo recuerdo, involúcrame y lo aprendo.',
		'autor' => 'Benjamín Franklin',
	),
	array(
		'frase' => 'Enseñar exige respeto a la autonomía del ser del educando.',
		'autor' => 'Paulo Freire',
	),
	array(
		'frase' => 'Los malos entendidos pueden ser fuentes de conflicto si no sabemos abordarlos pacíficamente.',
		'autor' => 'UNICEF',
	),
	array(
		'frase' => 'El mejor medio para hacer que sean buenos los niños es hacerlos felices.',
		'autor' => 'Oscar Wilde',
	),
	array(
		'frase' => 'Todo parece imposible hasta que se hace.',
		'autor' => 'Nelson Mandela',
	),
	array(
		'frase' => 'Solo se ve con el corazón, lo esencial es invisible a los ojos.',
		'autor' => 'Antoine de Saint - Exupery',
	),
);