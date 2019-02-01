<?php

if ( ! function_exists( 'Profil_setup' ) ) {
	function Profil_setup() {
		// WP générera lui-même la balise <title>
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus([
			'main-nav' => 'Menu principal de Profil',
			'social-nav' => 'Menu réseaux sociaux de Profil',
			'title'  =>  'Titre de retour vers la page d\'acceuil'
		]);
	}
}
add_action( 'after_setup_theme', 'Profil_setup' );