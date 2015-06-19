<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package ENT & Sinus Center
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function ent_sinus_center_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'ent_sinus_center_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function ent_sinus_center_jetpack_setup
add_action( 'after_setup_theme', 'ent_sinus_center_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function ent_sinus_center_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function ent_sinus_center_infinite_scroll_render
