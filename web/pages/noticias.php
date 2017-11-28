<?php
/*
 * Sitio web: Colegio Buenos Aires
 * @LaCueva.tv
 * Since 1.0
 * PAGE TEMPLATE: PAGINA NOTICIAS
*/
echo getPageVar( cleanUri() );//trae la variable de la pagina

include 'header.php';
?>

<!--- .inner-wrapper: contenido principal y específico del template -->
<div class="inner-wrapper">
	
	<header>
    	<div class="container">
	        <h1>Noticias</h1>
	    </div>
    </header>
   
    <div class="main-content-page-wrapper container">
	    <div class="main-content-page">
	    


	    </div><!-- //.main-content-page -->

	    <aside class="sidebar">
	       <?php getTemplate( 'sidebar' ); ?>
	   	</aside>
   </div><!-- //.main-content-page-wrapper -->

</div><!--- //.inner-wrapper -->

<?php include 'footer.php'; ?>