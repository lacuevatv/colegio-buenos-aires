<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 *
*/
require_once 'inc/functions.php';

//TEMPLATES, DEFAULT SINGLE PAGE:
/*$noticiaSingle     = false;
$esNoticias        = false;
$esCategoria       = false;
//estos links o slugs especificos indican como buscar en la base de datos ya que representan los titulos de la noticia, categoria o curso
$categoriaNoticias = 'none';
$noticia           = 'none';
*/
//definir $pageActual
global $pageActual;
$pageActual = pageActual();

//estas dos funciones se definen aquí, para poder usar la info de las cuales en las meta tag y titulos para el SEO
/*if ( $noticiaSingle ) {
	$dataNoticia = singlePostHTML ( $noticia );
}*/


getPage( $pageActual );