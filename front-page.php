<?php get_header(); ?>

<?php
$picture_ID = get_field('banniere');// On récupère cette fois l'ID
$url = wp_get_attachment_image_src($picture_ID, 'post-thumbnail');
?>
    <div class="cadreImage"><img src="<?php echo $url[0]; ?>" class="image-banniere">
    <div class="calque"></div>

    <div class="blocDesc">
        <h1  class="titrePageHome"><?php echo get_bloginfo('description'); ?></h1>
        <p class="descSite">Grâce à <span>PIIKTI</span>, offrez vous gratuitement
            de la visibilité sur vos créations</p>
        <a href="#" class="lienDesc">A propos de nous</a>
    </div>

</div>

<div class="blocImageAccueil">

    <?php
    $picture_ID = get_field('tendances');// On récupère cette fois l'ID
    $url = wp_get_attachment_image_src($picture_ID, 'post-thumbnail');
    ?>

    <div class="blocImagecadre"><img src="<?php echo $url[0]; ?>" alt=""><div class="calqueNoir"></div>
    <p class="titreImage">TENDANCES</p>
    </div>

    <?php
    $picture_ID = get_field('produits');// On récupère cette fois l'ID
    $url = wp_get_attachment_image_src($picture_ID, 'post-thumbnail');
    ?>

    <div class="blocImagecadre"><img src="<?php echo $url[0]; ?>" alt=""><div class="calqueNoir"></div>
    <p class="titreImage">PRODUITS</p>
    </div>

    <?php
    $picture_ID = get_field('createurs');// On récupère cette fois l'ID
    $url = wp_get_attachment_image_src($picture_ID, 'post-thumbnail');
    ?>

    <div class="blocImagecadre"><img src="<?php echo $url[0]; ?>" alt=""><div class="calqueNoir"></div>
    <p class="titreImage">LES CREATEURS</p>
    </div>

</div>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



    <div class="slide">
      <?php the_content(); ?>
    </div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
