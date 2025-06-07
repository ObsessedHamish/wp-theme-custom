<?php


function load_stylesheets(){
    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css', array(),1,'all');
    wp_enqueue_style('bootstrap');
        
    wp_register_style('custom-plugins',get_template_directory_uri() . 'css/plugins.css', array(),1,'all');
    wp_enqueue_style('custom-plugins');
    
    wp_register_style('styles',get_template_directory_uri() . 'css/style.css', array(),1,'all');
    wp_enqueue_style('styles');

    wp_register_style('colouring',get_template_directory_uri() . 'css/coloring.css', array(),1,'all');
    wp_enqueue_style('colouring');
    
    wp_register_style('colors',get_template_directory_uri() . 'css/colors/scheme-01.css', array(),1,'all');
    wp_enqueue_style('colors');

}
add_action('wp-enqueue_scripts', 'load_stylesheets')

