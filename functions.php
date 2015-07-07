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


add_action('wp_print_scripts', 'my_enqueue_scripts'); 


##################################################################

// enable images in media uploader

##################################################################
function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

##################################################################

// display images on media uploader and feature images

##################################################################

function fix_svg_thumb_display() {
  echo '<style> td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { width: 100% !important; height: auto !important; } </style>';
}
add_action('admin_head', 'fix_svg_thumb_display');


#########

?>

