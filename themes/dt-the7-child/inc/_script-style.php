<?php
defined( 'ABSPATH' ) || exit;

/**
 * CSS files
 * @add_action
 * @wp_enqueue_scripts
 * @the7styles
 */
add_action( 'wp_enqueue_scripts', 'the7styles' );
function the7styles() {
	/**
	 * Enqueue Style
	 * @wp_enqueue_style
	 */
    wp_enqueue_style( 'the7-customize', TEMPLATE_PATH . '/assets/css/customize.css', [], '1.0.0' );

}
/**
 * JS files
 * @add_action
 * @wp_enqueue_scripts
 * @the7scripts
 */
add_action( 'wp_enqueue_scripts', 'the7scripts' );
function the7scripts() {



}
