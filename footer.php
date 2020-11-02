<footer>
    <div class="container">
        <div class="row">
            <div class="col-6 mapa-sitio-div">
                <p class="mapa-sitio pt-2">Mapa del sitio</p>
                <nav>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top_menu',
                            'menu_class' => 'footer_menu',
                            'container_class' => 'container-menu'
                        )
                    ); ?>
                </nav>
            </div>
            <div class="col-6 copyright-col">
                <p class="copyright text-right">POWER LEASE© 2020, todos los derechos reservados</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>