<?php
/*
 * Sitio web: COLEGIO DE BUENOS AIRES
 * @LaCueva.tv
 * Since 1.0
 * FOOTER
 * 
*/
?>


        </div> <!--- //.main-wrapper -->
    </main>

<!--- footer ---------------------->
    <footer class="footer-site">
            
            <div class="footer-data-wrapper">
                <div class="footer-data">
                    <div class="data-colegio">
                        
                        <img src="<?php echo MAINSURL; ?>/assets/images/logo.png" alt="Logo Colegio De Buenos Aires">

                        <ul class="footer-social-media">
                            <?php getTemplate( 'social-items' ); ?>
                        </ul>

                        <h5>
                            <span class="icon-tel"></span><?php echo TELCOLEGIO; ?>
                        </h5>

                    </div>

                    <div class="footer-contacto">
                        <h3>Contacto</h3>
                        <p>
                            Para contactarse con nosotros puede llamarnos o visitarnos personalmente de lunes a viernes desde las 8 hasta las 18hs.
                        </p>
                        <a href="#" class="btn btn-border-inverse btn-sm">Contactar</a>
                    </div>

                    <nav class="site-map">
                        <h3>Menú</h3>
                        <ul class="footer-menu" role="navigation">
                            <?php
                            global $menuItems;
                            showMenu( $menuItems ); 
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
            
            <div class="footer-copyright">
                <p>&#169; 2017 www.colegiobuenosaires.edu.ar</p>
            </div>

    </footer>

</div><!--- //.wrapper-site -->
<!--- scripts -->    
<!------- jquery 3.1.1 ------>
    <script src="<?php echo MAINSURL; ?>/assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo MAINSURL; ?>/assets/js/script.js?<?php echo VERSION; ?>"></script>
</body>
</html>
