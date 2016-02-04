<?php


/**
 * Define constance for theme name
 */
define( 'THEME_NAMESPACE', 'anp-network-main-child' );

/**
 * ANP Setup
 */
function anp_network_main_child_setup() {

}

add_action( 'after_setup_theme', 'anp_network_main_child_setup' );


/**
 * Theme assets
 */
function anp_network_main_child_assets() {
  wp_enqueue_style( 'child-styles', trailingslashit( get_stylesheet_directory() ) . 'dist/main.css', false, null );

  wp_enqueue_script( 'child-scripts', trailingslashit( get_stylesheet_directory() ) . 'dist/main.js', ['jquery'], null, true );
}

add_action( 'wp_enqueue_scripts', 'anp_network_main_child_assets', 100 );
