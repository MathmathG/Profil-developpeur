<?php
get_template_part(
    'template-parts/single-header'
);

if ( have_posts() ) :
    the_post();

    get_template_part(
        'template-parts/posts/post-single'
    );
endif;
?>
<div class="copy"><p>Copyright &copy; ProfilMath - Tous droits réservés - 2019</p><a href="#header"><i class="fa fa-arrow-circle-up"></i></a></div>
<?php
 do_action( 'wp_footer' ); ?>
