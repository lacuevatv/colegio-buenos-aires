<?php 
/*
 * Sitio web: MVL
 * @LaCueva.tv
 * Since 1.0
 * FUNCTIONS
 * 
*/

require_once 'config.php';
require_once 'lib/mobile-detect/Mobile_Detect.php';

//busca la página $name = nombre del archivo sin extensión
function getPage( $name ) {
	$error = '404';
	$namePage = PAGESDIR . '/'. $name. '.php';

	if (is_file($namePage)) {
		include $namePage;
	} else {
		include PAGESDIR . '/'. $error. '.php';		
	}
}

//busca el template $name = nombre del archivo sin extensión
function getTemplate ( $name, $data = array() ) {
	$namePage = TEMPLATEDIR . '/'. $name. '.php';
	$error = '404';

	if (is_file($namePage)) {
		include $namePage;
	} else {
		include TEMPLATEDIR . '/'. $error. '.php';			
	}
}

//esta función limpia el url si el sitio no está instalado en la rais del servidor para que funcionen los permalinks sin problemas
function cleanUri() {
	$uri = $_SERVER["REQUEST_URI"];
	$uri = str_replace(CARPETASERVIDOR, '', $uri);
	return $uri;	
}

//detecta el dispositivo
function dispositivo () {
	$dispositivo = 'pc';
	$detect = new Mobile_Detect;

	if ( $detect->isMobile() ) {
		$dispositivo = 'movil';
	}
		
	// Any tablet device.
	if( $detect->isTablet() ){
		$dispositivo = 'tablet';
	}

	return $dispositivo;

}

function isAjax() {
    return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']  == 'XMLHttpRequest');
}

/*
* FUNCIÓN DE PERMALINKS
 * Define la page actual y redirecciona segun url, devuelve el slug o template part.
 * a) En el caso de que sean paginas, busca el template en la carpeta templates y listo.
 * b) En el caso de que sea noticia, categoria o curso, busca el template adecuado (cursos = curso.php / o en en el archivo index elige la primera opcion (la segunda es de paginas).
 * Pero ademas, e importante, busca en la base de datos mediante el slug. Si es noticia hace un loop de la categoria elegida o de todas las noticias y si es noticia single busca la noticia específica.
 *
*/
function pageActual ( $uri ) {
	$slug = 'inicio'; //slug por defecto
	/*if ( $_SERVER["PHP_SELF"] == '/index.php' ) {
	 
	} else {
		//echo $_SERVER["PHP_SELF"];
		//echo $_SERVER["REQUEST_URI"];
	}*/
	//borramos la barra / luego del dominio:
	$url = $uri;
	$parseUrl = explode('/', $url);
	$RequestURI = $parseUrl[1];
	
	//busca el simbolo ? en la url
	$permalink = strpos($RequestURI, '?');
	$permalink2 = strpos($RequestURI, '&');
	
	//si en el url no aparece ni ? ni & es porque es un link bonito
	if ( $permalink === false && $permalink2 === false ) {
		
		//si no está vacío, hay que procesar cual es
		if ( $url != '/' ) {

			$slug = $RequestURI;		
			
		}

	} 
	//en cambio, si aparece el ? o el & el url funciona con ids, ejecuta la segunda opcion
	else {
		//BUSCAR PAGE EN EL URL, por defecto sería home
		$slug = isset($_REQUEST['page'])?$_REQUEST['page']:'inicio';
		$noticia = isset($_REQUEST['noticia'])?$_REQUEST['noticia']:'none';
		$cat = isset($_REQUEST['cat'])?$_REQUEST['cat']:'none';

		if ( $noticia != 'none' ) {
			$slug = $noticia;
		}

		if ( $cat != 'none' ) {
			$slug = $cat;
		}
	}

	return $slug;

}//pageActual()

//esta funcion devuelve el nombre de la categoria o nada sino lo es 
function ver_categoria ( $uri ) {
	global $categorias;
	//ver si figura la variable cat en el url, en ese caso es categoria
	$cat = isset($_REQUEST['cat']) ? $_REQUEST['cat'] : 'none';

	$parseUrl = explode('/', $uri);
	$RequestURI = $parseUrl[1];

	for ($i=0; $i < count($categorias); $i++) { 
		if ( $categorias[$i]['slug'] == $RequestURI ) {
		$cat = $RequestURI;
		break;
		}
	}

	return $cat;

}

//esta funcion devuelve el nombre true si es categoria y false si no lo es
function es_categoria ( $uri ) {
	global $categorias;
	//ver si figura la variable cat en el url, en ese caso es categoria
	$cat = isset($_REQUEST['cat'])?$_REQUEST['cat']:'none';
	if ( $cat != 'none' ) {
		return true;
	} 
	//si el url es bonito hay que parsearlo para buscar las categorias
	$parseUrl = explode('/', $uri);

	if ( count( $parseUrl ) >= 3 && $parseUrl[2] != '' ){
		//si el index 2 figura en el url significa que es single
		return false;
	} else {
		$RequestURI = $parseUrl[1];

		for ($i=0; $i < count($categorias); $i++) { 
			if ( $categorias[$i]['slug'] == $RequestURI ) {
			return true;
			break;
			}
		}
		//sino encuentra la categoria en el url, entonces no lo es
		return false;
	}	
}

/*
ESTA FUNCIÓN TOMA LA VARIANTE DE ALGUNAS PAGINAS POR EJEMPLO NOTICIAS, EL SLUG ES UNA CATEGORIA O EL URL DE UNA NOTICIA
@return: string
*/
function getPageVar ( $uri ) {
	$slug = '';

	//si es categoria, entonces no hay nada que decir
	if ( es_categoria( $uri ) ){
		return;
	} 
	
	//si figura variable noticia en el url, entonces es facil:
	$noticia = isset($_REQUEST['noticia'])?$_REQUEST['noticia']:'none';
	if ( $noticia != 'none' ) {
		$slug = $noticia;
		return $slug;
	} 

	//si no hay variables hay que parsear el url para buscar informacion
	$parseUrl = explode('/', $uri);
	
	//si por el contrario hay un indice 2 y este no es la "/" entonces hay info que rescatar
	if ( isset($parseUrl[2]) && $parseUrl[2] != '' ) {
		$slug = $parseUrl[2];
	} 
	
	return $slug;

}
//esta función toma el nombre de la categoría para mostrarlo en el front en caso de que sea distinto el nombre del slug
function getNameCategoria( $categoria ) {
	global $categorias;
	for ($i=0; $i < count($categorias) ; $i++) { 
		if ($categorias[$i]['slug'] == $categoria ) {
			return $categorias[$i]['nombre'];
			break;
		}
	}
}

//acorta el texto
function acortaTexto( $texto, $cantPalabras = 50, $final = null ) {
	if ( null === $final ) {
	$final = '&hellip;';
	}	
	$textoOriginal = $texto;
	
	//quitar html
	$texto = preg_replace( '@<(script|style)[^>]*?>.*?</\\1>@si', '', $texto );
	$texto = strip_tags($texto);
	
	//reducir texto y agregar el final
	 $words_array = preg_split( "/[\n\r\t ]+/", $texto, $cantPalabras + 1, PREG_SPLIT_NO_EMPTY );
	$sep = ' ';
	
	//devolver texto reducido
	if ( count( $words_array ) > $cantPalabras ) {
		array_pop( $words_array );
		$texto = implode( $sep, $words_array );
		$texto = $texto . $final;
	} else {
		$texto = implode( $sep, $words_array );
	}
	return $texto;
}

//muestra el menú del array de menu
function showMenu( $menu, $active = null ) {

	for ($i=0; $i < count($menu); $i++) { ?>
		<li>
			<?php 
				if ( ! isset( $menu[$i]['subItem'] ) ) : ?>
			<a href="<?php echo MAINSURL . '/' . $menu[$i]['url']; ?>" <?php 
			if ( $menu[$i]['url'] == $active ) {
				echo 'class="menu-active"';
			} ?>>
				<?php echo $menu[$i]['nombre']; ?>
			</a>
			
			<?php else : 
				$submenu = $menu[$i]['subItem'];
			?>
			<a href="<?php echo MAINSURL . '/' . $menu[$i]['url']; ?>" class="sub-menu-toggle <?php 
			if ( $menu[$i]['url'] == $active ) {
				echo ' menu-active';
			} ?>">
				<?php echo $menu[$i]['nombre']; ?>
			</a>
				<ul class="submenu">
				<?php for ($a=0; $a < count($submenu); $a++) { ?>
					<li>
						<a href="<?php echo MAINSURL . '/' . $submenu[$a]['url']; ?>">
							<?php echo $submenu[$a]['nombre']; ?>
						</a>
					</li>
				<?php } ?>
				</ul>
			<?php endif; ?>
		</li>
	<?php }
}

//devuelve el título de la página para <head><title>
function SeoTitlePage ( $page ) {
    $tituloBase   = SITETITLE;

    //titulo cuando no es home ni noticias
    if ( $page != 'inicio' && $page != 'noticias' ) {
        //si la página no es home hay que separar la url que está unido por "-" para armar un nuevo título
        $pageActualTitle = explode('-', $page);
        $pageSEOTitle = ' |';
        for ($i=0; $i < count($pageActualTitle); $i++) { 
            $pageSEOTitle .= ' ';
            $pageSEOTitle .= ucfirst($pageActualTitle[$i]);
        }

        $tituloBase .= $pageSEOTitle;
    }

    return $tituloBase;
} //SeoTitlePage()


//define el metadescription en la etiqueta Head para SEO
function metaDescriptionText ( $pageActual, $noticia, $curso, $categoriaNoticias ) {
	$metaDescription = METADESCRIPTION;
	

	if ( $noticia != 'none') {
		global $dataNoticia;
		$base = ' | Asociación de trabajadores de la Sanidad Argentina, Buenos Aires.';
		$metaDescription = $dataNoticia['resumen'] . $base;
	}

	if ( $categoriaNoticias != 'none') {
		$metaDescription = 'Últimas noticias ' .$categoriaNoticias. '. Asociación de trabajadores de la Sanidad Argentina, Buenos Aires.';
	}

	return $metaDescription;

}//metaDescriptionText()



/*
 *
 * FUNCIONES CON BASE DE DATOS
 *
*/

function connectDB () {
	global $connection;
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if( mysqli_connect_errno() ) {
    die("Database connection failed: " . mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }

  if (!mysqli_set_charset($connection, "utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($connection));
    exit();
	} else {
		mysqli_character_set_name($connection);
	}
  return $connection;
}

//cierre base de datos
function closeDataBase( $connection ){
	if ( isset($connection) ) {
    	mysqli_close( $connection );
    }
}

//busca post en base de datos y devuelve array con todos ellos
function getPosts( $categoria = 'none', $number = -1, $exclude = 'none', $status = 'publicado', $offset = 0 ) {
	$connection = connectDB();
	$fecha_actual = date("Y-m-d");
	$tabla = 'noticias';

	if ( $offset != '0' ) {
		$number = $offset.','.$number;
	}

	$query  = "SELECT * FROM " .$tabla;
	$query .= " WHERE post_status='";
	$query .= $status . "'";
	if ( $categoria != 'none' ) {
		$query .= " AND post_categoria = '".$categoria."'";
	}
	if ( $exclude != 'none' ) {
		$query .= " AND post_url!='".$exclude."'";
	}
	if ( $status == 'publicado' ) {
		$query .= " AND post_fecha <= '".$fecha_actual."'";	
	}
	$query .= " ORDER by post_fecha desc ";
	if ( $number != -1 ) {
		$query .= " LIMIT ".$number." ";
	}
	
	$result = mysqli_query($connection, $query);
	
	closeDataBase( $connection );

	if ( $result->num_rows == 0 ) {
		$loop = '<div>Ninguna noticia ha sido cargada todavía</div>';
	} else {

		while ($row = $result->fetch_array()) {
				$loop[] = $row;
			}

	}
	
	return $loop;
}