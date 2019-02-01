<?php
/*
Plugin Name: RedirectTo
*/
if ( ! defined( 'WPINC' ) ) {
	exit;
}


function oredirect_to_redirect() {
	// @link https://developer.wordpress.org/reference/functions/is_single/
	// @link https://developer.wordpress.org/reference/functions/is_page/
	if ( is_page() || is_single() ) {
		$redirect_url = get_post_custom_values( 'oRedirection' );
		if ( ! empty( $redirect_url ) ) {
			// @link http://php.net/trim
			$redirect_url = trim( $redirect_url[0] );
			// Alternative à $redirect_url[0] : current($redirect_url);
			// @link http://php.net/current
			// @link http://php.net/filter_var
			if (
				filter_var( $redirect_url, FILTER_VALIDATE_URL )
				// @link https://developer.wordpress.org/reference/functions/get_permalink/
				&& ( get_permalink() !== $redirect_url )
			) {
				//header( 'Location: ' . $redirect_url );
				// @link https://codex.wordpress.org/Function_Reference/wp_safe_redirect
				wp_redirect( $redirect_url );
			}
		}
	}
}

add_action( 'wp', 'oredirect_to_redirect' );