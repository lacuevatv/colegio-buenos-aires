/**
 * File script.js
 *
 * @required jQuery
 * @ver 1.0
 --------------------------------------------------------------
>>> TABLE OF CONTENTS:
1.0 INIT //variables generales
2.0 NAVIGATION
3.0 FORMS
4.0 GALERIA IMAGENES
5.0 TABS
6.0 
--------------------------------------------------------------*/

/*--------------------------------------------------------------
1.0 INIT
--------------------------------------------------------------*/
//variables generales
var baseUrl = 'http://' + window.location.host;
var functionsDir = baseUrl + '/inc';
var actualPage;

$(document).ready(function(){
	actualPage = $('body').attr('data-page');

	//inicializa los acordeones de niveles del sidebar
	var widgetAcordion = new acordion( $('#acordionNivelWidget'), true, true );
	widgetAcordion.initAcordion();

	//inicializa los acordeones de institucional
	var autoridadesAcordion = new acordion( $('#acordionAutoridades') );
	autoridadesAcordion.initAcordion();

	//clic boton cargar mas
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

	//institucional, altura de parrafo
	var parrafoInstitucional = $('.read-more-wrapper');
	var stdHeightParrafoInst = parrafoInstitucional.css( 'height' );

	//al hacer clic se amplia el parrafo para leerlo completo
	$('.read-more-button-institucional').click(function(){
		
		if ( parrafoInstitucional.css( 'height' ) == stdHeightParrafoInst ) {
		parrafoInstitucional.css( 'height', 'auto' )
		var alturaCompleta = $('.read-more-wrapper').height() + 'px';
		parrafoInstitucional.css( 'height', stdHeightParrafoInst );

		parrafoInstitucional.animate({
			 'height' : alturaCompleta 
			},2000);
		} else {
			parrafoInstitucional.animate({
			 'height' : stdHeightParrafoInst 
			},2000);
		}
	});
	
});

//onload para todo lo que funciona con imágenes
$(window).on('load', function(){

	//abre galeria de imagenes del sidebar
	var galeriaWidget = new galeriaImagenes( $('.wrapper-galeria-images') );
	galeriaWidget.initGaleria();

	//animaciones
	var $animation_elements = $('.animation-element');
    var $window = $(window);

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

});




/*--------------------------------------------------------------
2.0 NAVIGATION
--------------------------------------------------------------*/

$(document).ready(function(){
	var alturaNav = $('.main-nav').height();

	//navegación fixed
	$(window).scroll(function(){
        if ($(window).scrollTop() > 20) {
        	$('.main-nav').addClass('nav-collapse-fixed');
        	$('.inner-wrapper').addClass('padding-fixed');
            
        } else {
           	$('.main-nav').removeClass('nav-collapse-fixed');
            $('.inner-wrapper').removeClass('padding-fixed');
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
			menu.css('height', 'auto');
			var menuOpen = menu.height() + 'px';
			menu.css('height', '0');
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
				menu.css('height', 'auto');
				var menuOpen = menu.height() + 'px';
				menu.css('height', '0');
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
 * La galería de imagenes está al inicio y en el sidebar, las imágenes están definidas en una varible global en config.php
*/

function galeriaImagenes(contenedor, speedTransition = 7000, speedAnimation = 1500, speedAnimationCaption = 1000, classAnimationCaption = 'fade', tipoTransicion = 'fade') {
	//parametros
	this.contenedor = contenedor;
	//tiempo en la cual se muestra la imagen: speedTransition (7000 por defecto)
	//velocidad de la trancision: speedAnimation (1500 por defecto)
	//velocidad de animación del caption en el mouse hover: (1000 por defecto);
	//clase que va a animar caption: classAnimationCaption (fade por defecto)
	//tipo de trancision: tipoTransicion (fade por defecto) 

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


/*--------------------------------------------------------------
5.0 ACORDION
--------------------------------------------------------------*/

//función acordion modo "objeto"
//primer parametro id o identificador del contenedor
//segundo parametro, si por defecto hay uno abierto, por defecto ninguno abierto
//tercer parametro, si se pueden abrir todos juntos o uno solo, por defecto todos juntos
function acordion( contenedor = $('.acordion'), open = false , collapse = false ) {
	//parametros
	this.contenedor = contenedor;
	var items = $(contenedor).find('.acordion-content');
	var cantItems = items.length;
	var openItem;
	var toggles = $('.title-acordion');//boton donde se hace clic
	
	//función que inicia el acordion
	acordion.prototype.initAcordion = function () {
		//si es false, no hay nada que hacer
		//si es true, habría que abrir el primer tab
		if (open) {
			openItem( items[0] );
		}

		if (collapse) {
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
			if (collapse) {
				var abierto = $('.acordeon-open');
				closeItem(abierto);
				toggleOpenClass(abierto);
				openItem(elementToOpen);
				toggleOpenClass(elementToOpen);
				iconOpenClose();
			} else {
				//si no es collpase, simplemente lo abre
				openItem(elementToOpen);
				iconOpenClose();

			}

		//cerrar item
		} else {
			
			//si collapse es true hay que abrir uno por defecto, el primero
			if (collapse) {
				closeItem(elementToOpen);
				toggleOpenClass(elementToOpen);
				openItem( items[0] );
				toggleOpenClass(items[0]);
				iconOpenClose();
			} else {
				//si no es collpase, simplemente lo cierra
				closeItem(elementToOpen);
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
		$(item).css('height', 'auto');
		var altura = $(item).height();
		$(item).css('height', '0');
		return altura;
	}

	//function que agrega o quita clase openitem al elemento abierto
	toggleOpenClass = function( item ) {
		
		$(item).toggleClass('acordeon-open');
	}

	//funcion interna que expande el contenido
	var openItem = function( item ) {
		
		//calcula la altura
		h = altura(item);
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
		var icon = $('.title-acordion span');//icono más y menos
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
6.0 
--------------------------------------------------------------*/

//$(document).ready(function(){});