<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package our
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function our_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'our_jetpack_setup' );
