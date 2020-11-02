<?php 

function init_template() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus( 
        array(
            'top_menu' => 'Principal'
        )
    );
}
add_action('after_setup_theme','init_template');

function assets() {
    wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', '', '4.5.2', 'all' );
    //wp_register_style('avenir-roman', get_template_directory_uri().'/assets/fonts/avenir-roman/Avenir-Roman.woff2', '', '1.0', 'all');
    //wp_register_style('futura-condensed', get_template_directory_uri().'/assets/fonts/futura-condensed/Futura-Condensed-Medium.woff2', '', '1.0', 'all');
    wp_enqueue_style('styles', get_stylesheet_uri(), array('bootstrap'/*,'avenir-roman','futura-condensed'*/), '1.0', 'all');

    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', '', '1.16.0', true );
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery', 'popper'), '4.5.2', true );
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true );

}
add_action('wp_enqueue_scripts', 'assets');

function sidebar() {
    register_sidebar( 
        array (
            'name' => 'Contact Form',
            'id' => 'footer',
            'description' => 'Contact form',
            'before_title' => '<p>',
            'after_title' => '</p>',
            'before_widget' => '<div id="%1$s" class="%2&s">',
            'after_widget' => '</div>'
        ) 
    );
}
add_action('widgets_init', 'sidebar');

?>