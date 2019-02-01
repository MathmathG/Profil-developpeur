<?php
get_header();

?>
<section id="intro">
<?php
if ( have_posts() ) :
	// Pas besoin de while, je suis certain de n'avoir qu'un seul article
	the_post();

	get_template_part(
		'template-parts/posts/page',
		'banner'
	);

endif;
?>

</section id="presentation">
<?php
$news_query_args_presentation = [
	// On veut récupérer des articles (posts) (par défaut post_type est défini à 'post')
	'post_type'      => 'post',
	// De la categorie Actualités
	'category_name'  => 'Presentation',
	// Trié par date
	'orderby'        => 'date',
	// Les derniers en premiers
	'order'          => 'DESC',
	// On veut récupérer au max 10 posts
	'posts_per_page' => 1,
];

$news_query = new WP_Query( $news_query_args_presentation );
if ( $news_query->have_posts() ) :
?>
<section class="presentation" id="presentation">
        <div class="flex-pre">
		<?php
		while ( $news_query->have_posts() ):
            
            $news_query->the_post();


	get_template_part(
		'template-parts/posts/page',
		'presentation'
	);


endwhile;
?> 
        </div>
        
		</section>
		<?php
	  endif;
	  ?>
<section class="competence" id="competence">
            <div class='title-competence'><h1>Compétences</h1></div> 
            <div class="skill-flex">   
        <div class="skill">Dynamique</div>
        <div class="skill">Déterminé</div>
        <div class="skill">Réactif</div>
        <div class="skill">Passionné</div>
            </div>
	  </section>
	  
	  <?php
$news_query_args_langage = [
	// On veut récupérer des articles (posts) (par défaut post_type est défini à 'post')
	'post_type'      => 'post',
	// De la categorie Actualités
	'category_name'  => 'Langage',
	// Trié par date
	'orderby'        => 'date',
	// Les derniers en premiers
	'order'          => 'DESC',
	// On veut récupérer au max 10 posts
	'posts_per_page' => 10,
];

$news_query = new WP_Query( $news_query_args_langage );
if ( $news_query->have_posts() ) :
?>

      <section class="language" id="language">
			<div class='title-language'><h1>Langages & technologies</h1></div>
			<div class="techno">
            <?php
          while ( $news_query->have_posts() ):
            
            $news_query->the_post();
            
			get_template_part(
				'template-parts/posts/post',
				'techno'
			);
        endwhile;
		  ?>
		  </div>
      </section>
      <?php
	  endif;
	  ?>
	  </section>
	  <?php
$news_query_args_outils = [
	// On veut récupérer des articles (posts) (par défaut post_type est défini à 'post')
	'post_type'      => 'post',
	// De la categorie Actualités
	'category_name'  => 'Outils',
	// Trié par date
	'orderby'        => 'date',
	// Les derniers en premiers
	'order'          => 'DESC',
	// On veut récupérer au max 10 posts
	'posts_per_page' => 10,
];

$news_query = new WP_Query( $news_query_args_outils );
if ( $news_query->have_posts() ) :
?>

      <section class="outils" id="outil">
			<div class='title-language'><h1>Mes Outils et logiciel de développements</h1></div>
			<div class="techno">
            <?php
          while ( $news_query->have_posts() ):
            
            $news_query->the_post();
            
			get_template_part(
				'template-parts/posts/post',
				'techno-outil'
			);
        endwhile;
       
        
		
		  ?>
		  </div>
      </section>
      <?php
	  endif;
	  ?>
	  <div class='title-projet' id="projets"><h1>Projets</h1></div>
	  </section>
	  
      
			
	<section class="posts" >
			

<?php
$news_query_args_projets = [
	// On veut récupérer des articles (posts) (par défaut post_type est défini à 'post')
	'post_type'      => 'post',
	// De la categorie Actualités
	'category_name'  => 'Projets',
	// Trié par date
	'orderby'        => 'date',
	// Les derniers en premiers
	'order'          => 'DESC',
	// On veut récupérer au max 10 posts
	'posts_per_page' => 10,
];

$news_query = new WP_Query( $news_query_args_projets );
if ( $news_query->have_posts() ) :
?>


      
	  
          

		  <?php
          while ( $news_query->have_posts() ):
            
            $news_query->the_post();
            
			get_template_part(
				'template-parts/posts/post',
				'excerpt'
			);
        endwhile;
       
        
		
		  ?>
	  </section>
	  
      <?php
      endif;
      
	  get_footer() ?>