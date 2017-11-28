<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA EDAD FELIZ
*/
echo getPageVar( cleanUri() );//trae la variable de la pagina

include 'header.php';
?>

<!--- .inner-wrapper: contenido principal y específico del template -->
<div class="inner-wrapper">
	
	<header>
    	<div class="container">
	        <h1>Edad feliz</h1>
	    </div>
    </header>
   
    <div class="main-content-page-wrapper container">
	    <div class="main-content-page">
	    	<h1>colegio de buenos aires
			<br>
				<small>Fuente h1 small</small></h1>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui <a href="#">officia</a> deserunt mollit anim id est laborum.
			</p>

			<p>
				<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui <a href="#">officia</a> deserunt mollit anim id est laborum.</small>
				<a href="#" class="btn">Link</a>
			</p>

			<h2>
				Institucional h2<br>
				<small>Fuente h2 small</small>
			</h2>

			<h3>
				Fuente h3<br>
				<small>Fuente h3 small</small>
			</h3>

			<h4>
				Fuente h4<br>
				<small>Fuente h4 small</small>
			</h4>

			<h5>
				Fuente h5<br>
				<small>Fuente h5 small</small>
			</h5>

			<q>La escuela es el arma más poderosa que puedes usar para cambiar el mundo.</q>
			<p>Nelson Mandela</p>
	    </div><!-- //.main-content-page -->

	    <aside class="sidebar">
	       <?php getTemplate( 'sidebar' ); ?>
	   	</aside>
   </div><!-- //.main-content-page-wrapper -->

</div><!--- //.inner-wrapper -->

<?php include 'footer.php'; ?>