<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <?php wp_head(); ?>
</head>
<body>

<header id="header" class="sticky-top">
    <div class="container pr-lg-0">
        <div class="row">
            <div class="col-4 pl-lg-5 py-2">
                <img id="logo" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="logo" class="logo"/>
            </div>
            <div class="col-8 px-lg-0">
                <nav id="head-nav" class="navbar navbar-expand-lg navbar-light ml-auto">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top_menu',
                            'menu_class' => 'main_menu navbar-nav',
                            'container_class' => 'mx-auto'
                        )
                    ); ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>