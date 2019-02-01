<?php
// @link http://php.net/class_exists
if ( ! class_exists( 'Custom_Post_Type_Hobbies' ) ) {
	class Custom_Post_Type_Hobbies {
		// @link http://php.net/manual/fr/language.oop5.magic.php
		public function __construct() {
			// @link http://php.net/callable
			add_action( 'init', [ $this, 'init_post_type' ] );
			
		}
		public function init_post_type() {
			// @link https://codex.wordpress.org/Function_Reference/register_post_type
			$hobbies_cpt_args_labels = [
				'name'               => 'Hobbies',
				'singular_name'      => 'hobbies',
				'add_new'            => 'Ajouter',
				'add_new_item'       => 'Ajouter un nouveau hobbies',
				'edit_item'          => 'Éditer un hobbies',
				'new_item'           => 'Nouveau hobbies',
				'view_item'          => 'Voir le hobbies',
				'search_items'       => 'Rechercher des hobbies',
				'not_found'          => 'Aucun hobbies trouvé',
				'not_found_in_trash' => 'Aucun hobbies trouvé dans la corbeille',
				'menu_name'          => 'hobbies',
				'all_items'          => 'Tous les hobbies',
			];
			$hobbies_cpt_args = [
				// Tous les textes dans le BO associés à notre type de contenu
				'labels'        => $hobbies_cpt_args_labels,
				'description'   => 'La liste de nos hobbies',
				'public'        => true,
				'menu_position' => 6,
				// @link https://developer.wordpress.org/resource/dashicons/#align-none
				'menu_icon'     => 'dashicons-portfolio',
				// fait en sorte que notre CPT se comporte comme les Pages WP (false pour un compotement similaire aux Articles WP)
				'hierarchical'  => true,
				'supports'      => [
					'title',
					'editor',
					'excerpt',
					'thumbnail',
					'custom-fields',
					'page-attributes',
				],
				'has_archive'   => true,
				'query_var'     => 'false',
				// l'argument rewrite permet d'intervenir sur le format de l'URL de notre CPT
			];
			register_post_type( 'hobbies', $hobbies_cpt_args );
		}
		
		public function activation() {
			// On donne connaissance à WP de notre nouveau CPT
			$this->init_post_type();
			// On donne connaissance à WP de nos nouvelles taxonomies
			
			flush_rewrite_rules();
		}
		public function deactivation() {
			// On rafraîchit les permaliens sans charger notre CPT ni nos taxos : WP l'oubliera
			flush_rewrite_rules();
		}
	}
}