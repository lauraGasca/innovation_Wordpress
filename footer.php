            <!-- purchase now Start Here -->
            <div class="purchase-now">
                <div class="container">
                    <div class="items col-xs-12 col-sm-12 col-md-9 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0s">
                        Ten a tu disposición la última tecnologia de automatización
                        <p>Ponte en contacto con nosotros hoy mismo</p>
                    </div>
                    <div class="items col-xs-12 col-sm-12 col-md-3 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0s">
                        <a href="{{route('contact')}}" class="btn buy-now">Contactanos</a>
                    </div>
                </div>
            </div>
            <!-- purchase now end Here -->
        </div>
        <!-- site content end Here -->

        <!-- Footer Section Start Here -->
        <footer id="footer">
            <section class="footer">
                <div class="container">
                    <div class="col-xs-12 col-sm-4 abt">
                        <h5 class="title">Acerca de Nosotros</h5>
                        <div class="footer-logo">
                            <a href="http://aitecsa.com.mx" title="Welcome to Matrix">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/aitecsa-logo.png">
                            </a>
                        </div>
                        <p> Es una empresa dedicada a la automatización e integración de tecnología actualizada, tanto en el hogar como en el negocio, que se esfuerza en detectar las necesidades de nuestros clientes.</p>
                        <a href="http://aitecsa.com.mx" class="read-more">Saber Más &raquo;</a>
                    </div>
                    <div class="col-xs-12 col-sm-4 service">
                        <h5 class="title">Links de Interes</h5>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'menu-abajo',
                            'container'       => '',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                        ));
                        ?>
                    </div>
                    <div class="col-xs-12 col-sm-4 touch">
                        <h5 class="title">Contactanos</h5>
                        <p> <i class="fa fa-map-marker"></i> <span>Av. el Sauz #551 Col. Laureles<br/>
                                        Celaya, Guanajuato</span></p>
                        <p> <i class="fa fa-phone"></i> <span>(461) 132 4925 </span></p>
                        <p> <i class="fa fa-envelope"></i> <span>contacto@aitecsa.com.mx </span></p>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <div class="col-xs-12 col-sm-9 col-lg-9 ">
                            <p> Copyright ©AITECSA 2015. Todos los derechos reservados. </p>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-lg-3 pull-right text-right">
                            <p> Creado por © <a href="http://elnahual.com.mx" target="_blank">El nahual</a></p>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <!-- ===========================End footer======================= -->
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdn.lukej.me/prettyphoto/3.1.5/js/jquery.prettyPhoto.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/site.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>