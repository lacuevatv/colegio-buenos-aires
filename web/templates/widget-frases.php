<?php
global $frases;
$numeroAleatorio = rand(0, count($frases)-1);
?>
<div class="wrapper-frases animation-element fade-in-scroll">	
	<span class="open animation-element fade-in-scroll"></span>
	<q class="animation-element fade-in-scroll">
		<?php echo  $frases[$numeroAleatorio]['frase']; ?>
	</q>
	<p class="animation-element fade-in-scroll" >
		<?php echo  $frases[$numeroAleatorio]['autor']; ?>
	</p>
	<span class="close animation-element fade-in-scroll"></span>
</div>