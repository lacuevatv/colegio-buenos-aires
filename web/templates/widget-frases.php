<?php
global $frases;
$numeroAleatorio = rand(0, count($frases)-1);
?>
<div class="wrapper-frases animation-element fade-in-scroll">	
	<span class="open"></span>
	<q>
		<?php echo  $frases[$numeroAleatorio]['frase']; ?>
	</q>
	<p>
		<?php echo  $frases[$numeroAleatorio]['autor']; ?>
	</p>
	<span class="close"></span>
</div>