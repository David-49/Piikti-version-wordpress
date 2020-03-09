<?php get_header(); ?>

<!-- <div class="image-banniere"><div class="calque"></div></div> -->

<?php
$picture_ID = get_field('banniere');// On récupère cette fois l'ID
$url = wp_get_attachment_image_src($picture_ID, 'post-thumbnail');
?>
<div class="cadreImage"><img src="<?php echo $url[0]; ?>" class="image-banniere">
<div class="calque"></div></div>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1  class="titrePageHome"><?php the_title(); ?></h1>

    <div class="slide">
      <?php the_content(); ?>
    </div>

<?php endwhile; endif; ?>

<aside class="site__sidebar">
        <ul>
            <?php dynamic_sidebar('blog-sidebar'); ?>
          </ul>
</aside>

<?php get_footer(); ?>
