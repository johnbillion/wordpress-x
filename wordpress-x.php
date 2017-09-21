<?php
/**
 * Plugin Name:     WordPress X
 * Plugin URI:      https://github.com/johnbillion/wordpress-x
 * Description:     A tiny space houses some of the most sophisticated technology we've ever developed.
 * Author:          John Blackbourn
 * Author URI:      https://johnblackbourn.com
 * Text Domain:     wordpress-x
 * Domain Path:     /languages
 * Version:         X.0.1
 *
 * @package WordPress_X
 */

namespace WordPress\X;

function enqueue_style() {
	\wp_enqueue_style(
		'wordpress-x',
		plugin_dir_url( __FILE__ ) . '/x.css',
		[
			'admin-bar',
		],
		'X'
	);
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_style' );
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\enqueue_style' );
