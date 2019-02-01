<?php

get_header();
if ( have_posts() ) :
	// Pas besoin de while, je suis certain de n'avoir qu'un seul article
	the_post();

	get_template_part(
		'template-parts/posts/page',
		'banner'
	);

endif;
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<article>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>
		<?php
	}
}

get_footer();
