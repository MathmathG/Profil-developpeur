<nav class="main-nav">
<?php
wp_nav_menu([
	// Identifiant du menu
	'theme_location' => 'main-nav',
	// On ne veut pas de la structure HTML générée par WP
	'container'      => false,
	'menu_class'     => 'main-nav__link',
]);
?>
</nav>