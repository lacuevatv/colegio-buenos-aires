<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 *
*/
require_once 'inc/functions.php';

global $pageActual;
$pageActual = pageActual( cleanUri() );

getPage( $pageActual );