/*
 * Script del soft con las funciones de todos los módulos salvo editar noticias
 * principal tarea: cargar los módulos por ajax y manejar los botones gral
 * Since 4.0
 * Es el único script que siempre esta
 * 
 * INDICE
 * 1. Funciones y variables generales reutilizables
 * 2. Navigation
 * 3. logout (index)
 * 4. Nuevo usuario
 * 5. change password
 * 6. loop de sliders
 * 7. editar slider
 * 8. loop de noticias
*/

//urls:
var baseUrl = 'http://' + window.location.host;
var administradorUrl = baseUrl + '/administrador';
var uploadsDir = baseUrl + '/galeria';
var functionsDir = administradorUrl + '/inc';
var templatesDir = administradorUrl + '/templates';
var ajaxFunctionDir = functionsDir + '/ajax-functions';

function scrollHaciaArriba() {
$("html, body").animate({
            scrollTop: 0
        }, "slow");
}

function getCleanedString(cadena){
   // Definimos los caracteres que queremos eliminar
   var specialChars = "!@#$^&%*()+=[]'\"\/{}|:;¡¿<>?,.";

   // Los eliminamos todos
   for (var i = 0; i < specialChars.length; i++) {
       cadena= cadena.replace(new RegExp("\\" + specialChars[i], 'gi'), '');
   }   

   // Lo queremos devolver limpio en minusculas
   cadena = cadena.toLowerCase();

   // Quitamos espacios y los sustituimos por - porque nos gusta mas asi
   cadena = cadena.replace(/ /g,"-");

   // Quitamos acentos y "ñ". Fijate en que va sin comillas el primer parametro
   cadena = cadena.replace(/á/gi,"a");
   cadena = cadena.replace(/é/gi,"e");
   cadena = cadena.replace(/í/gi,"i");
   cadena = cadena.replace(/ó/gi,"o");
   cadena = cadena.replace(/ú/gi,"u");
   cadena = cadena.replace(/ñ/gi,"n");
   return cadena;
}
	function getCleanedStringPLUS(cadena,specialChars){
   // Definimos los caracteres que queremos eliminar

   // Los eliminamos todos
   for (var i = 0; i < specialChars.length; i++) {
       cadena= cadena.replace(new RegExp("\\" + specialChars[i], 'gi'), '');
   }   

   // Lo queremos devolver limpio en minusculas
   cadena = cadena.toLowerCase();

   // Quitamos espacios y los sustituimos por - porque nos gusta mas asi
   cadena = cadena.replace(/ /g,"-");

   // Quitamos acentos y "ñ". Fijate en que va sin comillas el primer parametro
   cadena = cadena.replace(/á/gi,"a");
   cadena = cadena.replace(/é/gi,"e");
   cadena = cadena.replace(/í/gi,"i");
   cadena = cadena.replace(/ó/gi,"o");
   cadena = cadena.replace(/ú/gi,"u");
   cadena = cadena.replace(/ñ/gi,"n");
   return cadena;
}

/*NAVIGATION*/
$(document).ready(function() {

	$('.toggle').click(function(){
		var menu = $('.menus-top-wrapper');
		if ( menu.css('display') == 'none' ) {
			menu.fadeIn();
		} else {
			menu.fadeOut();
		}
	});

	$('.dropdown').click(function(){
		var subMenu = $(this).find('.dropdown-menu');
		if ( subMenu.css('display') == 'none' ) {
			subMenu.fadeIn();
		} else {
			subMenu.fadeOut();
		}
	});
	

});//navigation

/*LOG IN*/

$(document).ready(function (){
	$('#login').submit(function(event){
		event.preventDefault();
		var formulario = this;
		var data = $(this).serialize();
		var msj = $('.error-tag');

		$.ajax( {
			type: 'POST',
			url: functionsDir + '/sesion.php',
			data: data,
			success: function ( response ) {
				if ( response == 1 ) {
					window.setTimeout('location.reload()', 1000);
				} else {
					msj.html('hubo un pequeño error, sus datos no son correctos');
				}
			},
			error: function ( error ) {
				console.log(error);
			},
		});//cierre ajax
	});//submit
});//ready

/*LOG OUT*/

$(document).ready(function() {

	//logout
	$('#logout').click(function(event){
		event.preventDefault();
				
		$.ajax( {
			type: 'POST',
			url: templatesDir + '/logout.php',
            //funcion antes de enviar
            beforeSend: function() {
            },
			success: function ( response ) {
				window.setTimeout('location.reload()', 1000);
			},
			error: function ( error ) {
				console.log(error);
			},
		});//cierre ajax
	});
	
});//document.ready



/*
* NUEVO USUARIO
*/


$(document).ready(function() {

	$('#register').submit(function(event){
			event.preventDefault();
			var formulario = this;
			var data = $(this).serialize();
			var msj = $('.error-tag');

			$.ajax( {
				type: 'POST',
				url: ajaxFunctionDir + '/register.php',
				data: data,
				success: function ( response ) {
					console.log(response);
					if ( response == 'existe') {
						msj.html('ya hay un usuario con ese nombre');
					} else if (response == 'exito') {
						msj.html('el usuario ya fue creado, puede iniciar sesión')
						//window.setTimeout('location.href = index.php', 2000);
					} else {
						msj.html('hubo un error, intente más tarde');
					}
				},
				error: function ( error ) {
					console.log(error);
				},
			});//cierre ajax
		});//submit

})//ready

/*
* CHANGE PASSWORD
*/

$(document).ready(function() {

	$('#password_form').submit(function(event){
			event.preventDefault();

			var formulario = this;
			var data = $(this).serialize();
			var msj = $('.error-tag');

			$.ajax( {
				type: 'POST',
				url: ajaxFunctionDir + '/password.php',
				data: data,
				success: function ( response ) {
					if ( response == 'error') {
						msj.html('Usuario o contraseña incorrecta');
					} else if (response == 'exito') {
						msj.html('el cambio fue echo exitosamente');
						//window.setTimeout('location.href = index.php', 2000);
					} else {
						msj.html('hubo un error, intente más tarde');
					}
				},
				error: function ( error ) {
					console.log(error);
				},
			});//cierre ajax
		});//submit

})//ready
