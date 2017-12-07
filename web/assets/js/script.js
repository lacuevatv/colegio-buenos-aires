/**
 * File script.js
 *
 * @required jQuery
 * @ver 1.0
 --------------------------------------------------------------
>>> TABLE OF CONTENTS:
1.0 INIT //variables generales e inicio de funciones
2.0 NAVIGATION
3.0 FORMS
4.0 GALERIA IMAGENES
5.0 ACORDION
6.0 TABS
--------------------------------------------------------------*/

/*--------------------------------------------------------------
1.0 INIT
--------------------------------------------------------------*/
//variables generales
var baseUrl = 'http://' + window.location.host;
var uploadsUrl = baseUrl + '/galeria'
var functionsDir = baseUrl + '/inc';
var actualPage;
//variables que identifican los navegadores de microsoft
//var es_ie = navigator.userAgent.indexOf("MSIE") > -1 ;
//var es_edge = window.navigator.userAgent.indexOf("Edge") > -1


$(document).ready(function(){
	actualPage = $('body').attr('data-page');


/*
 * Inicio de acordeones
*/
	if ( document.getElementById('acordionNivelWidget') != null ) {
	
		//inicializa los acordeones de niveles del sidebar
		if (actualPage == 'niveles' ) {
			//en la pagina niveles los inicializa a todos juntos por su clase
			var nivelesAcordion = new acordion( $('.acordion'), 'open' );
			nivelesAcordion.initAcordion();
		} else {
			//en las otras paginas se inicializa por el id
			var widgetAcordion = new acordion( $('#acordionNivelWidget'), 'open', 'active' );
			widgetAcordion.initAcordion();	
			console.log('acordeon-otros')
		}
	}

	if ( document.getElementById('acordionAutoridades') != null ) {
		//inicializa los acordeones de institucional
		var autoridadesAcordion = new acordion( $('#acordionAutoridades') );
			autoridadesAcordion.initAcordion();
	}
	
	/*
	 * institucional, leer completo, es una especie de acordeon también
	 */
	var parrafoInstitucional = $('.read-more-wrapper');
	var stdHeightParrafoInst = parrafoInstitucional.css( 'height' );
	var alturaCompleta = parrafoInstitucional.prop('scrollHeight') + 'px';
	
	//al hacer clic se amplia el parrafo para leerlo completo
	$('.read-more-button-institucional').click(function(){
		
		if ( parrafoInstitucional.css( 'height' ) == stdHeightParrafoInst ) {

		parrafoInstitucional.animate({
			 'height' : alturaCompleta 
			},2000);
		} else {
			parrafoInstitucional.animate({
			 'height' : stdHeightParrafoInst 
			},2000);
		}
	});

	/*
	 * clic boton cargar mas noticias
	*/
	$(document).on('click', '.btn-load-more-news', function( e ){
		e.preventDefault();
		var btn = this;
		var loader = $('.ajax-loader-noticias');
		var contenedor = $('.loop-posts-wrapper');
		var categoria = $(btn).attr('data-categoria');
		var page = parseInt($(btn).attr('data-page'));
		var resto = parseInt( $(btn).attr('data-resto') );
		var cantPost = $(btn).attr('data-cantpost');
		var mensaje = $('.mensaje-sutil');
		var newMensaje = resto + ' noticias más';
		
		$(this).attr('data-resto', resto);

		$.ajax( {
            type: 'POST',
            url: functionsDir + '/ajax.php',
            data: {
            	function: 'load-more',
            	page: page,
            	categoria: categoria,
            	cantPost: cantPost,

            },
            beforeSend: function() {
                loader.fadeIn();
            },
            success: function ( response ) {
                //console.log(response);
                contenedor.append(response);
                loader.fadeOut();
                resto = resto - cantPost;
                if ( resto <= 0 ) {
                	$('.load-more-wrapper').remove();
                } else {
                	newMensaje = resto + ' noticias más';
                	mensaje.html(newMensaje);
                	//aumento el numero en el boton
					$(btn).attr('data-page', page+1);
					//pongo el nuevo resto
					$(btn).attr('data-resto', resto);
                }
            },
            error: function ( ) {
                console.log('error');
            },
        });//cierre ajax
	});

	
	/*
	 * TABS TALLERES
	*/

	if (actualPage == 'talleres') {
		var talleresInicial = new talleresTabs( $('#talleres-inicial-tab') );
		talleresInicial.initTalleres();

		var talleresPrimaria = new talleresTabs( $('#talleres-primaria-tab') );
		talleresPrimaria.initTalleres();

		var talleresSecundaria = new talleresTabs( $('#talleres-secundario-tab') );
		talleresSecundaria.initTalleres();
	}
	
	if (actualPage == 'niveles') {
		var talleres = new talleresTabs( );
		talleres.initTalleres();
	}

});//on-ready


//onload para galería de imágenes y animaciónes
$(window).on('load', function(){

	/*
	 * INICIOS GALERIA DE IMAGENES
	*/
	
	//galeria de bienvenidos, widget
	var galeriaWidget = new galeriaImagenes( $('.wrapper-galeria-images') );
	galeriaWidget.initGaleria();

	//si es noticias busca iniciar galeria:

	if (actualPage == 'noticias') {
		galeriaPost = new galeriaImagenesPost( $('.post-galeria-wrapper') );
		galeriaPost.startGaleriaPost();
	}

	/*
	 * ANIMACIONES
	*/
	var $animation_elements = $('.animation-element');
    var $window = $(window);

    //chequea si el elemento esta en la vista de pantalla para ejecutar la animacion
    function check_if_in_view() {
      var window_height = $window.height();
      var window_top_position = $window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);

      $.each($animation_elements, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
          $element.addClass('in-view');
        } else {
          $element.removeClass('in-view');
        }
      });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');

});//on-load




/*--------------------------------------------------------------
2.0 NAVIGATION
--------------------------------------------------------------*/

$(document).ready(function(){
	var alturaNav = $('.main-nav').height();

	//navegación fixed
	$(window).scroll(function(){
        if ($(window).scrollTop() > 20) {
        	$('.main-nav').addClass('nav-collapse-fixed');
        	//$('.inner-wrapper').addClass('padding-fixed');
            
        } else {
           	$('.main-nav').removeClass('nav-collapse-fixed');
            //$('.inner-wrapper').removeClass('padding-fixed');
        }

		//scroll top button fixed
        if ($(window).scrollTop() > 750) {
        	$('.scroll-top-button').addClass('scroll-top-button-fixed');
        } else {
        	$('.scroll-top-button').removeClass('scroll-top-button-fixed');
        }
    });

	//toggle
	$('.toggle').click(function(){
		$(this).toggleClass('toggle-activate');
		var menu = $('.main-menu');

		if ( menu.height() == 0 ) {
			var menuOpen = menu.prop('scrollHeight') + 'px';
			
			menu.animate({
				'height' : menuOpen
			});
			
		} else {
			menu.animate({
				'height' : '0'
			});
		}
	});

	//submenu toggle
	$('.sub-menu-toggle').click(function( e ){
		if ( window.innerWidth < 992 ) {
			e.preventDefault();
			menu = $(this).closest('li').find('.submenu');
			
			if ( menu.height() == 0 ) {				
				var menuOpen = menu.prop('scrollHeight') + 'px';
				menu.animate({
					'height' : menuOpen
				});
				$('.main-menu').css('height', 'auto');
				
			} else {
				menu.animate({
					'height' : '0'
				});
			}
		}
	});

	//cierra el menú al hacer clic afuera
	$(document).on('click',function(e) {
        if ( window.innerWidth < 992 ) {           
	        var nav = $(".main-nav");
	                            
	        if (!nav.is(e.target) && nav.has(e.target).length === 0) { 
	           //quitar la cruz del toggle
				$('.toggle').removeClass('toggle-activate');
				//cerrar el menu si esta abierto
				$('.main-menu').animate({
						'height' : '0'
					});
				//cerrar submenu si esta abierto
				$('.submenu').each(function(){
					$(this).css('height', '0');
				})
	        }
        }
     });

	//scroll top button
	$('.scroll-top-button').click(function(){
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });

});//.ready






/*--------------------------------------------------------------
3.0 FORMS
--------------------------------------------------------------*/

$(document).ready(function(){
	$('#contact-form').submit(function( event ){
		event.preventDefault();
		var mensajeExito = 'Correo enviado exitosamente';
		var mensajeError = 'Hubo un error, intente nuevamente o comuniquese por teléfono de 9 a 18hs.';
		var formulario = $(this).serialize()

		formData = new FormData( this );
		formData.append('function','contact-form');


		$.ajax( {
            type: 'POST',
            url: functionsDir + '/ajax.php',
            data: formData,
            processData: false,
			contentType: false,
			cache: false,
            beforeSend: function() {
                $('.ajax-loader').fadeIn();
            },
            success: function ( response ) {
                console.log(response);
                if ( response == 'ok' ) {
	                $('#contact-form').fadeOut( 1000 );
	                $('.mensaje-wrapper').fadeIn();
	                $('span.mensaje').html(mensajeExito);
                } else {
                	$('.ajax-loader').fadeOut();
                	$('#contact-form')[0].reset();
                	$('.mensaje-wrapper').fadeIn();
                	$('span.mensaje').html(mensajeError);
                }
            },
            error: function ( ) {
                console.log('error');
            },
        });//cierre ajax
	})
});

/*--------------------------------------------------------------
4.0 GALERIA IMAGENES
--------------------------------------------------------------*/

/*
 * La galería de imagenes std está al inicio y en el sidebar, las imágenes están definidas en una varible global en config.php
*/

function galeriaImagenes( contenedor, speedTransition, speedAnimation, speedAnimationCaption, classAnimationCaption, tipoTransicion ) {
	//parametros por defecto
	this.contenedor = contenedor;
	//tiempo en la cual se muestra la imagen: speedTransition
	speedTransition || ( speedTransition = 7000 );
	//velocidad de la trancision: speedAnimation
	speedAnimation || ( speedAnimation = 1500 );
	//velocidad de animación del caption en el mouse hover
	speedAnimationCaption || ( speedAnimationCaption = 1000 );
	//clase que va a animar caption: classAnimationCaption
	classAnimationCaption || ( classAnimationCaption = 'fade' );
	//tipo de trancision: tipoTransicion (fade por defecto
	tipoTransicion || ( tipoTransicion = 'fade' );
	 

	//variables
	//array de imagenes
	var images = $(contenedor).find('figure');
	var cantImages = images.length;
	

	//el indice actual de los elementos (imagenes)
	var element = 0;
	//se guarda el id del intervalo para poder detenerlo luego
	var idAnimated;
	
	//función que oculta imagenes y muestra la primera
	var hideImages = function() {
		
		for (var i = 0; i < cantImages; i++) {
			$(images[i]).hide()
		}
	
		$(images[element]).fadeIn(speedAnimation);

	}

	//function que vuelve a iniciar e loop
	var restartImages = function () {
		//vuelve el contardor a cero
		element = 0;
		//fadeOut de imagenes
		for (var i = 0; i < cantImages; i++) {
			$(images[i]).fadeOut()
		}
	
		$(images[element]).fadeIn(speedAnimation);
	}

	//función que hace la animación
	var animatedElement = function () {
		element += 1;
		if ( tipoTransicion == 'fade'  ) {
			if ( element >= cantImages ) {
				
				$(images[element-1]).fadeOut(speedAnimation);

				restartImages();
				
			} else {
				
				$(images[element]).fadeIn(speedAnimation);

			}
		}
	}
	
	//funcion que ejecuta la animación:
	var intervalAnimated = function () {
		//ejecuta la animacion
		idAnimated = setInterval(animatedElement, speedTransition);	
	}

	//función que inicia el ciclo y lo continua
	galeriaImagenes.prototype.initGaleria = function () {
		//oculta las imágenes y comienza el ciclo mostrando la primera
		hideImages();

		intervalAnimated();
	}

	//hover para mostrar el caption, al entrar el mouse se detiene la galeria
	images.on('mouseenter', function(){
		clearInterval(idAnimated);

		el = $(images[element]).find('.caption-wrapper');
		animateCaption( el );
	});

	images.on('mouseleave', function(){
		intervalAnimated();
		el = $(images[element]).find('.caption-wrapper');
		animateCaption( el );
	});

	//animacion de captions
	var animateCaption = function ( el ) {
		if ( classAnimationCaption == 'fade' ) {
			//animación por defecto
			if ( $(el).css('opacity') == '0' ) {
				$(el).animate({
					'opacity' : '1',
				},speedAnimationCaption);
			} else {
				$(el).animate({
					'opacity' : '0',
				},speedAnimationCaption);
			}
		}
	}

	//inicio del programa
	//initGaleria();
}

/*
 * La galería de imagenes del single post
*/
function galeriaImagenesPost ( galeria, speedTransition, speedAnimation, tipoTransicion ) {
	/*
	 * INICIALIZA PARAMETROS POR DEFECTO
	*/
	//tiempo en la cual se muestra la imagen: speedTransition
	speedTransition || ( speedTransition = 7000 );
	//velocidad de la trancision: speedAnimation
	speedAnimation || ( speedAnimation = 100 );
	//tipo de trancision: tipoTransicion (fade por defecto
	tipoTransicion || ( tipoTransicion = 'fade' );
	
	/*
	 * VARIABLES INTERNAS
	*/
	var contenedor   = galeria.find('ul');
	
	var imagenes     = contenedor.find('li img');
	var mainImage    = galeria.find('.galeria-main-image img');
	var controls     = $('.controls');
	var leftControl  = $('.left-control');
	var rightControl = $('.right-control');
	var openContened = $('.main-image-wrapper');//la imagen en version gigante
	var maximus = false;//cuando la version gigante esta abierta esto es true


	//función que inicia la galeria
	galeriaImagenesPost.prototype.startGaleriaPost = function () {
		//oculta el contenedor de la imagen gigante
		$(openContened).hide()
		//ocultar o mostrar controles si es necesario
		showControls();
		//muestra la primera foto
		showMainImage();
		//inicial el slider automatico
		intervalAnimated();

	}

	//function: muestra la foto cliqueada o la primera en la lista en grande
	var showMainImage = function ( img, contenedor ) {
		img || ( img = imagenes[0] );
		contenedor || ( contenedor = mainImage ); 

		if ( tipoTransicion == 'fade' ) {
			var src = uploadsUrl + '/' + $(img).attr('data-href');
			$(contenedor).fadeOut(speedAnimation, function(){
				$(contenedor).attr('src', src);	
			});
			$(contenedor).fadeIn();
		}	

		//finalmente poner la clase actva a la nueva imagen
		classActive(img);
	}
	
	//function: muestra u oculta los controles
	var showControls = function () {
		if ( window.innerWidth > 500 ) {
			//mayor de 500px;
			if ( imagenes.length < 6 ) {
				controls.hide();
			}
			
		} else {
		//menor de 500px;
			if ( imagenes.length < 4 ) {
				controls.hide();
			}
		}
	}

	//function: pone clase activa a la imagen seleccionada
	var classActive = function ( img ) {
		//busca si alguna tiene la clase y la elimina
		$('.galeria-imagenes .image-active').each(function(){
			$(this).removeClass('image-active');
		});
		//agrega la clase a la imagen seleccionada
		$(img).addClass('image-active');
	}


	//function: mueve las imagenes thumnail para la izquierda o para la derecha
	var moveThumnailImgs = function ( direction ) {
		var imagenesLi   = contenedor.find('li');
		var count = imagenesLi.length;
		clearInterval(idAnimation);

		//mueve a la derecha
		if ( direction == 'right' ) {
			$(imagenesLi[0]).fadeOut(300, function(){
				contenedor.append($(imagenesLi[0]));
			});
			$(imagenesLi[0]).fadeIn();
			//cambia la imagen cuando es image-active
			if ( $(imagenesLi[0]).find('img').hasClass('image-active') ) {
				showMainImage( $(imagenesLi[0]).next().find('img') );
			}

			//si la galería grande esta abierta, cambia la imagen allí tambien
			if (maximus) {
				showMainImage( $(imagenesLi[0]).next().find('img'), openContened.find('img') );	
			}

		}
		//mueve a la izquierda
		if ( direction == 'left' ) {
			$(imagenesLi[count-1]).fadeOut(400, function(){
				contenedor.prepend($(imagenesLi[count-1]));
			});
			$(imagenesLi[count-1]).fadeIn();

			showMainImage( $(imagenesLi[count-1]).find('img') );

			if (maximus) {
				showMainImage( $(imagenesLi[count-1]).find('img'), openContened.find('img') );
			}
		}

		//vuelve a iniciar la animacion
		intervalAnimated();
	}

	//click control right/left, mueve las imagenes de indice
	leftControl.click(function(){
		moveThumnailImgs('left');
	});

	rightControl.click(function(){
		moveThumnailImgs('right');
	});


	//funcion que ejecuta animacion de galeria
	var intervalAnimated = function () {
		//ejecuta la animacion
		idAnimation = setInterval(transitionElement, speedTransition);	
	}

	var transitionElement = function() {
		moveThumnailImgs('right');
	}

	//click en un thumnail, se coloca esa imagen como principal
	imagenes.click(function(){
		showMainImage(this);
	})


	//al entrar el mouse se detiene la animacion
	mainImage.mouseenter(function(){
		clearInterval(idAnimation);
	})

	//al salir el mouse se reinicia la animacion
	mainImage.mouseleave(function(){
		intervalAnimated();
	});

	//ampliar galeria
	mainImage.click(function(){
		$(openContened).fadeIn();
		showMainImage( $('.image-active'), openContened.find('img') );
		maximus = true;
	});


	//cierra la big image al hacer clic en ella
	openContened.click(function(){
		$(openContened).fadeOut();
		maximus = false;
	});

	//funciones teclado
	$(document).keyup(function(event){
        //tecla escape
        if(event.which==27) {
        	//reinicia la animacion
        	clearInterval(idAnimation);
        	intervalAnimated();
        	$(openContened).fadeOut();
        }
        //tecla izquierda
        if(event.which==37) {
        	moveThumnailImgs('left');
        }
		//tecla derecha
        if(event.which==39) {
        	moveThumnailImgs('right');
        }
    });



	/*
		funciontes touch
	*/

	/*if ( window.innerWidth < 769 ) {
	    
	}*/

}//galeriaImagenesPost()



/*--------------------------------------------------------------
5.0 ACORDION
--------------------------------------------------------------*/
//función acordion modo "objeto"
//primer parametro id o identificador del contenedor
//segundo parametro, si por defecto hay uno abierto, por defecto ninguno abierto
//tercer parametro, si se pueden abrir todos juntos o uno solo, por defecto todos juntos
function acordion( contenedor, open, collapse ) {
	//parametros
	this.contenedor = contenedor;
	open || ( open = 'close' );//u open
	collapse || ( collapse = 'false' );//active

	var items = $(contenedor).find('.acordion-content');
	var cantItems = items.length;
	var openItem;
	var toggles = $('.title-acordion');//boton donde se hace clic
	
	//función que inicia el acordion
	acordion.prototype.initAcordion = function () {
		//si es false, no hay nada que hacer
		//si es true, habría que abrir el primer tab
		if (open == 'open' ) {
			
			openItem( items[0] );
			toggleOpenClass(items[0]);
			
		}
 
				
		iconOpenClose();	
		
	}


	//al hacer clic en titulo se abre acordeon
	$(toggles).click(function(){

		//busca el contenedor para abrir o cerrar
		var elementToOpen = $(this).next();
		
		if ( elementToOpen.height() == 0 ) {
		
			//si collapse es true cerrar el que esta abierto
			if (collapse == 'active') {
				var abierto = $('.acordeon-open');
				closeItem(abierto);
				toggleOpenClass(abierto);
				openItem(elementToOpen);
				toggleOpenClass(elementToOpen);
				iconOpenClose();
			} else {
				//si no es collpase, simplemente lo abre
				openItem(elementToOpen);
				toggleOpenClass(elementToOpen);
				iconOpenClose();

			}

		//cerrar item
		} else {
			
			//si collapse es true hay que abrir uno por defecto, el primero
			if (collapse  == 'active') {
				closeItem(elementToOpen);
				toggleOpenClass(elementToOpen);
				openItem( items[0] );
				toggleOpenClass(items[0]);
				iconOpenClose();
			} else {
				//si no es collpase, simplemente lo cierra
				closeItem(elementToOpen);
				toggleOpenClass(elementToOpen);
				iconOpenClose();
			}
			
		}
	});


	//funcion interna que ve si está abierto o cerrado
	var isOpen = function ( item ) {
		if ( $(item).hasClass('acordeon-open') ) {
			return true;
		}
	}

	//funcion interna que calcula todas las alturas
	var altura = function( item ) {
		var altura = $(item).prop('scrollHeight') + 'px';
		return altura;
	}

	//function que agrega o quita clase openitem al elemento abierto
	toggleOpenClass = function( item ) {
		
		$(item).toggleClass('acordeon-open');
	}

	//funcion interna que expande el contenido
	var openItem = function( item ) {
		
		//calcula la altura
		var h = altura(item);

		//anima y abre
		$(item).animate({
			'height' : h
		});
	}

	//funcion interna que cierra el contenido
	var closeItem = function( item ) {
	//anima y cierra
		$(item).animate({
			'height' : '0'
		});


	}

	var iconOpenClose = function () {
		var icon = $('.title-acordion .icon-open');//icono más y menos
		icon.each(function(){
			if ( $(this.parentElement).next().hasClass('acordeon-open') ) {
				$(this).text('-');
			} else {
				$(this).text('+');
			}
		})
	}

}//function
	

/*--------------------------------------------------------------
6.0  TABS TALLERES
--------------------------------------------------------------*/

//$(document).ready(function(){});

//función Tabs talleres
//primer parametro id o identificador del contenedor
//segundo parametro, si por defecto hay uno abierto, por defecto ninguno abierto
//tercer parametro, si se pueden abrir todos juntos o uno solo, por defecto todos juntos
function talleresTabs( contenedor ) {
	//parametros
	contenedor || ( contenedor = $('.tabs-wrappers') );//u open
	
	var altura =  $(contenedor).height();//guarda la altura minima
	var toggles = $(contenedor).find('.btn-tab');//boton donde se hace clic
	var articles = $(contenedor).find('article');
	//función que inicia las tabs
	talleresTabs.prototype.initTalleres = function () {
		
		alturaContenedor(articles[0]);
		//poner la clase active en el primer titulo activado
		$(toggles[0]).addClass('title-active');
		//poner la clase active en el primer articulo activado
		$(articles[0]).addClass('contenido-taller-active');
		
	}


	//al hacer clic en titulo se abre acordeon
	$(toggles).click(function(event){
		event.preventDefault();
		
		var id = $(this).attr('href');

		alturaContenedor(id);
		showHideTab(id);
		destacarTitulo(this);
		
	});
	
	var showHideTab = function(element) {
		//cierra los otros elementos
		$(contenedor).find('.contenido-taller-active').removeClass('contenido-taller-active');
		
		//abre el elemento
		$(contenedor).find(element).addClass('contenido-taller-active');
	}

	var destacarTitulo = function(element) {
		//quita el destacado del otro titulo
		$(contenedor).find('.title-active').removeClass('title-active');
		
		//abre el elemento
		$(contenedor).find(element).addClass('title-active');
	}

	//ajuste altura elemento
	var alturaContenedor = function( element ) {
		newH = $(contenedor).find(element).height() + 40;
		//si la nueva altura es mayor que la altura normal o la altura que esta ahora
		if ( newH > altura || newH > contenedor.height() ) {
			//contenedor.height(newH);
			contenedor.animate({
				'height':newH + 'px'
			},1000)
		} else {
			//se pone el contenedor a la altura inicial
			//contenedor.height(altura);
			contenedor.animate({
				'height': altura + 'px'
			},1000)
		}
	}

}

/*
	 * AJUSTE ALTURA TABS
	 */
	 var altura = $('.tabs-wrappers').prop('scrollHeight');
	// $('.tabs-wrappers').height(altura);