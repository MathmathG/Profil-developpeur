


<?php
get_template_part(
    'template-parts/single-header'
);
$parent_project_query = new WP_Query([
	'post_type'              => 'hobbies',
	'post_parent'            => 0,
	'posts_per_archive_page' => -1,
]);?>
<div class="wrapper-hobbies">
<section class="hobbies">
<?php
if ( $parent_project_query->have_posts() ) :
	while ( $parent_project_query->have_posts() ) :
		$parent_project_query->the_post();
		get_template_part(
			'template-parts/hobbies/hobbies'
			
		);
    endwhile;
    ?>
    </section>
    <?php
	wp_reset_postdata();
endif;
?>
<div class="copy"><p>Copyright &copy; ProfilMath - Tous droits réservés - 2019</p><a href="#header"><i class="fa fa-arrow-circle-up"></i></a></div>
<?php
do_action( 'wp_footer' ); ?>
</div>