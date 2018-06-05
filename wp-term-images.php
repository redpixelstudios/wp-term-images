<?php

/**
 * Plugin Name: WP Term Images
 * Plugin URI:  https://wordpress.org/plugins/wp-term-images/
 * Author:      John James Jacoby
 * Author URI:  https://profiles.wordpress.org/johnjamesjacoby/
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Description: Pretty images for categories, tags, and other taxonomy terms.  Minor loading modifications made by Red Pixel Studios.
 * Version:     1.0.1
 * Text Domain: wp-term-images
 * Domain Path: /assets/lang/
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Instantiate the main class
 *
 * @since 0.2.0
 */
function _wp_term_images_init() {
	
	if ( function_exists( 'add_term_meta' ) ) {
		
		require_once dirname( __FILE__ ) . '/includes/class-wp-term-images.php';
		
		new WP_Term_Images( __FILE__ );
		
	}
}
add_action( 'init', '_wp_term_images_init', 88 );
