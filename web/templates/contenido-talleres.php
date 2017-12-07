<?php

$talleres = array(
	'inicial'   => array(
		'titles' => array(
			'href' => array( 'teatro', 'comedia-musical', 'creatiarte', 'gimnasia', 'futbol', ),
			'text' => array( 'Teatro', 'Comedia Musical', 'Creatiarte', 'Gimnasia', 'Fútbol', ),
		),
		'content' => array( 
			'La propuesta es introducir a los adolescentes en el mundo del teatro, a través del juego, experimentando con el cuerpo y la imaginación hacia la búsqueda y encuentro del sujeto de aprendizaje con su potencial expresivo. Se trata de construir un espacio de creatividad e identidad personal: camino que va de la expresión individual a la comunicación, ya que en su hacer eminentemente colectivo, el teatro crea  nuevas formas de socialización y construcción del conocimiento.<br>Nos proponemos que mediante el juego teatral el adolescente improvise en un entorno donde pueda sentirse contenido y se estimule su capacidad creadora. Ponemos atención en que los roles no sean fijos, es decir; que todos puedan ser tanto protagonistas como antagonistas, desalentando así la formación de estereotipos. Se trata de elaborar una mirada estética y reflexiva para que cada uno pueda descubrirse y desarrollarse en sus posibilidades de interpretación teatral.',
			'2Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'3Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'4Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'5Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
		),
	),
	'primaria'  => array(
		'titles' => array(
		'href' => array( 'teatro', 'iniciacio-musical', 'creatiarte', 'comedia-musical', 'gimnasia ritmica', 'futbol', 'comic', 'voley', 'comunicacion-social' ),
			'text' => array( 'Teatro', 'Iniciación Musical', 'Creatiarte', 'Comedia Musical', 'Gimnasia Rítmica', 'Fútbol', 'Comic', 'Voley', 'Comunicación Social', ),
		),
		'content' => array(
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
		),
	),
	'secundario' => array(
		'titles' => array(
			'href' => array( 'pre-universitaria', 'comunicacion-social', 'ingles', 'teatro', 'capacitacion-laboral', 'informatica-UTN', 'taller-de-expresion', ),
			'text' => array( 'Pre Universitaria', 'Comunicación Social', 'Inglés', 'Teatro', 'Capacitación Laboral', 'Informática UTN', 'Taller de expresión', ),
		),
		'content' => array(
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.',
		),
	),
);

?>


<ul class="titles-tab">

<?php 
$titulos = $talleres[$data]['titles'];
for ($i=0; $i < count($titulos['href']); $i++) { ?>
	<li>
		<a href="#<?php echo $titulos['href'][$i]; ?>" class="btn-tab">
			<?php echo $titulos['text'][$i]; ?>
		</a>
	</li>
<?php } ?>

</ul>

<div class="tab-content">

<?php 
$content = $talleres[$data]['content'];
for ($i=0; $i < count($content); $i++) { ?>
	<article id="<?php echo $titulos['href'][$i]; ?>" class="contenido-taller">
		<?php echo $content[$i]; ?>
	</article>
	<?php } ?>

</div>
