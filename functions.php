<?php
/*--------------------------*
/* StyleSheets
/*--------------------------*/#

function child_hover_css_loader() {
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style('layout', get_template_directory_uri().'/css/layout.css', false ,'1.0', 'all' );
}

add_action('wp_enqueue_scripts', 'child_hover_css_loader');

function child_hover_undo_hooks( $length ) {
    remove_filter( 'wp_enqueue_scripts', 'hover_css_loader' );
}

add_action( 'after_setup_theme', 'child_hover_undo_hooks' );


add_action('wp_print_scripts', 'my_enqueue_scripts'); ?>