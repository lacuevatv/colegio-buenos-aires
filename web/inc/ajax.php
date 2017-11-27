<?php 
/*
 * Sitio web: MVL
 * @LaCueva.tv
 * Since 1.0
 * FUNCTIONS
 * 
*/

require_once 'config.php';
require_once 'functions.php';

//chequea si es peticion de ajax y ejecuta la funcion
if( isAjax() ) {
	$function = isset($_POST['function']) ? $_POST['function'] : '';

	switch ( $function ) {
		case 'contact-form':

			$nombre     = isset($_POST['nombre']) ? $_POST['nombre'] : '';
			$email      = isset($_POST['email']) ? $_POST['email'] : '';
			$asunto     = isset($_POST['subject']) ? $_POST['subject'] : '';
			$mensaje    = isset($_POST['msj']) ? $_POST['msj'] : '';
			$bodyEmail  = 'Nombre: ' . $nombre . '\r';
			$bodyEmail .= 'email: ' . $email . '\r';
			$bodyEmail .= 'Mensaje: ' . $mensaje . '\r';

			
			echo 'ok';
		
		break;		
	}

	
//sino es peticion ajax se cancela
} else{
    throw new Exception("Error Processing Request", 1);   
}