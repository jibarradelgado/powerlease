<?php get_header(); ?>

<main class='container' class="front_page">
    <section id="inicio">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-6">
                    <div id="whoweare" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#whoweare" data-slide-to="0" class="active"></li>
                            <li data-target="#whoweare" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h1><u>¿Quiénes somos?</u></h1>
                                <p><strong>POWER LEASE</strong> es una arrendadora especializada en integrar soluciones para grandes consumidores de energía (servicios, industrias varias) para migrar su gasto energético hacia energías limpias, esto es posible gracias al alto nivel técnico de sus proveedores, y a sus innovadoras opciones de financiamiento.</p>
                            </div>
                            <div class="carousel-item">
                                <h1><u>Misión</u></h1>
                                <p>Lograr que el mayor número de grandes consumidores de energía migren hacia energías limpias tomando las mejores decisiones técnicas, tecnológicas y financieras beneficiando al ambiente, las personas y a su economía.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="productos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1><u>Productos</u></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-lg-4 offset-lg-2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/Power-Lease-Productos_Icono01.png" alt="energia solar" class="producto-image">                            
                        </div>
                        <div class="col-12 col-lg-6 my-auto producto-texto">
                            <p>Generación de energía eléctrica con energía solar</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4 offset-lg-2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/Power-Lease-Productos_Icono02.png" alt="autos electricos" class="producto-image">                             
                        </div>
                        <div class="col-12 col-lg-6 my-auto producto-texto">
                            <p>Arrendamiento  de flotas de vehículos híbridos y eléctricos</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4 offset-lg-2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/Power-Lease-Productos_Icono03.png" alt="concentradores solares" class="producto-image">                            
                        </div>
                        <div class="col-12 col-lg-6 my-auto producto-texto">
                            <p>Calentamiento de agua por medio de concentradores solares</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1 my-auto">
                    <div class="row">
                        <div class="col">
                            <h2>VAPOR Y AGUA CALIENTE</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Mediante la tecnología de <strong>INVENTIVE POWER</strong> podemos disminuir en forma considerable el gasto por generación de agua caliente, vapor o calor para procesos industriales a base de energía solar.</p>
                            <p>En la actualidad estos procesos se realizan con combustibles fósiles que están sujetos a incrementos de precio continuamente así como altos costos de mantenimiento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ventajas">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 offset-lg-7 ventajas-group">
                    <div class="ventajas-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/Power-Lease-Ventajas_Icono01.png" alt="foco ahorrador" class="bulb">
                    </div>
                    <div class="ventajas-text">
                        <h2>REDUCCIÓN GASTO ELÉCTRICO</h2>
                        <p>Basado en diagnósticos altamente técnicos, diseñamos soluciones autosustentables y eficientes, las grandes empresas generan altos costos por el consumo de energía, existen muchas causas; mal diseño de sus instalaciones, gran cantidad de maquinaria incorrectamente instaladas, iluminación incorrecta, mal diseño del clima, entre otros son factores que incrementan significativamente este gasto, una vez detectadas la fallas se corrigen para que el gastos de la nueva infraestructura sea eficiente y no se incurra en gastos excesivos por el cambio de tecnología.</p>
                    </div>                   
                </div>
            </div>
        </div>
    </section>
    <section id="proveedores">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>PROVEEDORES Y TECNOLOGÍA DE PUNTA</h2>
                    <div id="providers" class="carousel slide mt-3 mb-3" data-ride="carousel">                        
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/Proveedor_Caterpillar2.jpg" class="d-block" alt="logo caterpillar">                                
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/Proveedor_iusasol.jpg" class="d-block" alt="logo iusasol">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/Fratelli-logo.jpg" class="d-block" alt="logo fratelli">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/Logo-inventive-power.jpg" class="d-block" alt="logo inventive power">
                            </div>
                        </div>
                        <a class="carousel-control-prev arrow" href="#providers" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next arrow" href="#providers" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mercado">
                    <h2 class="text-lg-left">MERCADO OBJETIVO</h2>
                    <ul>
                        <li>HOTELES</li>
                        <li>EMBOTELLADORAS</li>
                        <li>INDUSTRIA ALIMENTICIA</li>
                        <li>CLUBES DEPORTIVOS</li>
                        <li>RESTAURANTES</li>
                        <li>INDUSTRIA DEL TEQUILA</li>                        
                    </ul>
                </div>
                <div class="col-12 col-lg-6">
                    <h2>CONTÁCTANOS</h2>
                    <?php dynamic_sidebar('footer'); ?>
                    <section>
                        <p><i class='fas fa-phone-alt' style='font-size:36px'></i>33-27-14-83-11</p>
                    </section>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>