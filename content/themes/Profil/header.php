<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="shortcut icon" href="#">
  <meta name="viewport" content="width=device-width">
	<?php do_action( 'wp_head' ); ?>
</head>
<body>
  <div class="wrapper">
    <header class="header">
    <?php
    wp_nav_menu([
                'theme_location' => 'title',
                'menu_class'     => 'logo'
                ]);
       get_template_part( 'template-parts/menu/nav', 'social' ); ?>
      <a href="#" class= "Menu"><i class="fa fa-bars"></i></a>
    </header>
    <main>