<?php
// BASE DE DATOS
define('DB_SERVER', 'localhost');
define('DB_USER', 'dbuser');
define('DB_PASS', '123');
define('DB_NAME', 'colegio');
//CARPETAS
define ( 'TEMPLATEDIR', dirname( __FILE__ ) . '/../templates' );
define ( 'MODULOSDIR', dirname( __FILE__ ) . '/modulos' );
define ( 'UPLOADS', dirname( __FILE__ ) . '/../../galeria' );
define ( 'UPLOADSIMAGES', dirname( __FILE__ ) . '/../../galeria' );
define ( 'UPLOADSFILES', dirname( __FILE__ ) . '/../../galeria/archivos' );
//URL
define ('CARPETASERVIDOR', '' );//esta variable se define si el sitio no está en el root del dominio y si está en una subcarpeta
define ('MAINURL', 'http://' . $_SERVER['HTTP_HOST'] . CARPETASERVIDOR );
define ('UPLOADSURL', MAINURL . '/galeria');
define ('UPLOADSURLIMAGES', MAINURL . '/galeria');
define ('UPLOADSURLFILES', MAINURL . '/galeria/archivos');

//DEFINICIONES HEAD Y SCRIPTS
define ( 'SITENAME', 'Colegio de Buenos Aires' );
define ( 'DATEPUBLISHED', '2017');
define ('LOGOSITE' , MAINURL . '/administrador/assets/images/logo.png');
define ( 'SITETITLE', 'Colegio de Buenos Aires - Panel de control' );
define ( 'FAVICONICO', MAINURL . '/favicon.ico' );

//variables de definicion de administrador
global $categorias;
$categorias = array(
	array( 'slug' => 'noticias', 'nombre' => 'Noticias'),
	array( 'slug' => 'edad-feliz', 'nombre' => 'Edad Feliz'),
	array( 'slug' => 'historietas', 'nombre' => 'historietas'),
);

//variables de subsecciones de documentacion
global $subsection;
$subsection = array(
	'inicial'    => array(
		'docs',
	),
	'primaria'   => array(
		'docs',
	),
	'secundario' => array(
		'docs', 'programa-1','programa-2','programa-3-sociales','programa-3-economia','programa-4-sociales','programa-4-economia','programa-5-sociales','programa-5-economia',
	),
);
