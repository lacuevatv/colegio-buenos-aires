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
		/*
		 * Maneja el formulario de contacto
		*/
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

		/*
		 * carga más noticias
		*/
		case 'load-more':
			$cantPost = isset($_POST['cantPost']) ? $_POST['cantPost'] : CANTPOST;
			$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : 'none';
			$pageNumber = isset($_POST['page']) ? $_POST['page'] : '1';
			$offset = $cantPost * $pageNumber;
			
			$newPosts = getPosts( $categoria, $cantPost, 'none', 'publicado', $offset );

			for ($i=0; $i < count($newPosts); $i++) { 
	    		echo '<li>';
	    			getTemplate( 'loop-posts', $newPosts[$i] );
	    		echo '</li>';
	    	}
		break;



	}//switch

	
//sino es peticion ajax se cancela
} else{
    throw new Exception("Error Processing Request", 1);   
}