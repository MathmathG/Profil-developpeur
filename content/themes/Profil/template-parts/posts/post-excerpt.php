<article class="post-excerpt" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
            <header class="post-excerpt__header">
                <h2 class="post-excerpt__header__title"><?php the_title(); ?></h2>
            </header>
            <main class="post-excerpt__content">
                
                <p><?php the_excerpt(); ?></p> 
            </main>
            <footer class="post-excerpt__footer__link"><a class="post-excerpt-link" href="<?php the_permalink(); ?>">Lire la suite</a></footer>
        </article>