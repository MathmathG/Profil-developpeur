<?php
/*
Plugin Name: Profil Settings
*/
if ( ! defined( 'WPINC' ) ) {
	exit;
}

require plugin_dir_path( __FILE__ ) . 'includes/class-custom-post-type-hobbies.php';

$cpt_hobbies   = new Custom_Post_Type_Hobbies;
// @link https://codex.wordpress.org/Function_Reference/register_activation_hook
register_activation_hook( __FILE__, [ $cpt_hobbies, 'activation' ] );

// @link https://codex.wordpress.org/Function_Reference/register_deactivation_hook
register_deactivation_hook( __FILE__, [ $cpt_hobbies, 'deactivation' ] );
/*
register_activation_hook( __FILE__, function() {
	flush_rewrite_rules();
});
*/