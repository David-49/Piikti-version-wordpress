<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <h1  class="titrePageHome"><?php the_title(); ?></h1>

    <div class="slide">
      <?php the_content(); ?>
    </div>

<?php endwhile; endif; ?>

<aside class="site__sidebar">
        <ul>
            <?php dynamic_sidebar( 'blog-sidebar' ); ?>
          </ul>
</aside>

<?php get_footer(); ?>
