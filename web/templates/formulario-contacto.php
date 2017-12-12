<form id="contact-form" method="POST" class="animation-element fade-in">
	    			
	<div class="form-group">
		<label for="nombre">
			Nombre
		</label>
		<input type="text" name="nombre" <?php if ( dispositivo() == 'pc' ) { echo 'placeholder="Nombre"'; } ?>>
	</div>

	<div class="form-group">
		<label for="email">
			Correo Electrónico (requerido)
		</label>
		<input type="email" name="email" required <?php if ( dispositivo() == 'pc' ) { echo 'placeholder="Correo Electrónico (requerido)"'; } ?>>
	</div>

	<div class="form-group">
		<label for="subject">
			Asunto
		</label>
		<input type="text" name="subject" <?php if ( dispositivo() == 'pc' ) { echo 'placeholder="Asunto"'; } ?>>
	</div>

	<div class="form-group">
		<label for="msj">
			Mensaje
		</label>
		<textarea name="msj" <?php if ( dispositivo() == 'pc' ) { echo 'placeholder="Mensaje"'; } ?>></textarea>
	</div>
	
	<div class="form-group">
		<button type="submit" id="send-contact-form" class="btn btn-primary">Enviar</button>
	</div>
	<div class="ajax-loader"></div>
	
</form>
<div class="mensaje-wrapper">
	<span class="mensaje"></span>
</div>