<?php
function pro_enqueue() {
    $uri    = get_theme_file_uri();
    $ver    = PRO_DEV_MODE ? time() : true;

    // Register scripts and styles
    wp_register_style( 'pro_styles', $uri . '/dist/assets/css/main.css', [], $ver );
    wp_register_script( 'pro_script', $uri .'/dist/assets/js/custom.js', [], $ver, true );
    
    // Enqueue scripts and styles
    wp_enqueue_script( 'jquery');
    wp_enqueue_style( 'pro_styles' );
    wp_enqueue_script( 'pro_script' );
}


function pro_setup_theme() {
    register_nav_menu( 'primary', 'Primary Menu' );
    register_nav_menu( 'secondary', 'Secondary Menu' );
}
