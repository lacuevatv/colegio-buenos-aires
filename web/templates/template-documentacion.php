<?php 
	
	for ($i=0; $i < count($data); $i++) { ?>

		<li>
			<?php 
			echo '<a href="';
			if ( $data[$i]['docs_type'] == 'file' ) {
				echo UPLOADSURL . '/archivos/';
			}
			echo $data[$i]['docs_url'] . '"';
			
			echo ' target="_blank">';
			?>
			
				<?php echo $data[$i]['docs_texto']; ?>
			</a>
		</li>
<?php } ?>