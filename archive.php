<?php get_header(); ?>

<?php
    if ( is_category() ) {
        $title = "Catégorie : " . single_tag_title( '', false );
    }
    elseif ( is_tag() ) {
        $title = "Étiquette : " . single_tag_title( '', false );
    }
    elseif ( is_search() ) {
        $title = "Vous avez recherché : " . get_search_query();
    }
    else {
        $title = '<h1 class=\'titrePageActu\'>L\'actualités</h1>';
    }
?>
<h1><?php echo $title; ?></h1>

<div class="container">

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

  <article class="post">
    <h2 class="titreActu"><?php the_title(); ?></h2>

    <figure class="thumbnailBlog">
      <?php the_post_thumbnail("medium"); ?>
    </figure>

    <p class="post__meta">
      Publié le <?php the_time( get_option( 'date_format' ) ); ?>
      par <?php the_author(); ?> • <?php comments_number(); ?>
    </p>

    <div class="post__content">
      <?php the_excerpt(); ?>

    </div>

    <p>
      <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
    </p>
  </article>


<?php endwhile; endif; ?>

<!-- permet de créer une pagination -->
<?php the_posts_pagination(); ?>

</div>

<!-- <aside class="sidebarHome">
  <?php the_category(); ?>
  <?php the_tags(); ?>
</aside> -->

<?php get_footer(); ?>
