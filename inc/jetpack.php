<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Milestonez Pro
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function milestonez_pro_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'milestonez_pro_jetpack_setup' );
