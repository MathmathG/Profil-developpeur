<?php
if ( ! function_exists( 'Profil_enqueue_scripts' ) ) {
	// Ajoute les CSS et JS générés par Brunch
	function Profil_enqueue_scripts() {
		wp_enqueue_style(
			'Profil_style',
			get_theme_file_uri( 'public/css/app.css' ),
			[ 'Profil-style-vendor' ]
			
		);


		wp_enqueue_style(
			'Profil-style-vendor',
            get_theme_file_uri( 'public/css/vendor.css' ),
            []
		
        );

		wp_enqueue_script(
			'Profil_script',
			get_theme_file_uri( 'public/js/app.js' ),
			[ 'Profil-script-vendor' ],
			null,
			true
		);

		wp_enqueue_script(
			'Profil-script-vendor',
			get_theme_file_uri( 'public/js/vendor.js' ),
			[],
			null,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'Profil_enqueue_scripts' );