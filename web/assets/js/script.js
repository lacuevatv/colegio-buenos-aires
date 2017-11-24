/**
 * File script.js
 *
 * @required jQuery
 * @ver 1.0
 --------------------------------------------------------------
>>> TABLE OF CONTENTS:

1.0 NAVIGATION
2.0 GALERIA IMAGENES
3.0 
4.0 
--------------------------------------------------------------*/

/*--------------------------------------------------------------
1.0 NAVIGATION
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
2.0 GALERIA IMAGENES
--------------------------------------------------------------*/

/*
 * La galería de imagenes está al inicio y en el sidebar, las imágenes están definidas en una varible global en config.php
*/

$(window).on('load', function(){
	//galeria sidebar
	var galeriaWidget = new galeriaImagenes( $('.wrapper-galeria-images') );
	galeriaWidget.initGaleria();
	
});

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
3.0 
--------------------------------------------------------------*/

//$(document).ready(function(){});