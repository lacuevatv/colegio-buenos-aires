<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA INSTITUCIONAL
*/
include 'header.php';
?>
<!--- .inner-wrapper: contenido principal y específico del template -->
<div class="inner-wrapper">
   
    <header>
    	<div class="container">
	        <h1>Bienvenidos</h1>
	    </div>
    </header>
   
    <div class="main-content-page-wrapper container">
	    <div class="main-content-page">
	    	
	    	<section class="autoridades">
	    		<div id="acordionAutoridades" class="acordion">
	    			<h3 class="title-acordion">
						<span>
							Autoridades
						</span>
					</h3>
	    			<div class="acordion-content">
	    				<p>
	    					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	    				</p>
	    			</div>
	    		</div>
	    	</section>

	    	<section class="historia">

	    	</section>


	    </div><!-- //.main-content-page -->

	    <aside class="sidebar">
	       <?php getTemplate( 'sidebar' ); ?>
	   	</aside>
   </div><!-- //.main-content-page-wrapper -->

</div><!--- //.inner-wrapper -->

<?php include 'footer.php'; ?>