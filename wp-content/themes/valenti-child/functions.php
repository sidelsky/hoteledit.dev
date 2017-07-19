<?php
/**
 * Child stylesheet
 *
 */

function valenti_child_style() {
    if ( ! is_admin() ) {
		wp_enqueue_style( 'valenti-child-stylesheet',  get_stylesheet_directory_uri() . '/style.css' , array( 'cb-main-stylesheet' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'valenti_child_style' );

/**
 * Child l18n
 *
 */
function valenti_child_textdomain() {
    load_child_theme_textdomain( 'cubell', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'valenti_child_textdomain' );