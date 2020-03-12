<?php
/*
    Template Name: Page_produits
*/
?>

<?php get_header(); ?>

<?php get_template_part('banniere'); ?>

<?php
// echo "<p class='testt'>".the_term()."</p>";
var_dump(get_terms('product_cat'));
?>

<div class="produitCatégorie">
    <div class="blocPhotoCategorie">

        <?php
        $picture_ID = get_field('homme');// On récupère cette fois l'ID
        $url = wp_get_attachment_image_src($picture_ID, 'post-thumbnail');

        ?>

        <a href="<?php echo get_permalink(48); ?>?cat=homme" class="blocImagecadre"><img src="<?php echo $url[0]; ?>" alt="photo désignant la catégorie homme">
            <p class="titreImage">HOMME</p>
            <div class="calqueNoir"></div>

        </a>

        <?php
        $picture_ID = get_field('femme');// On récupère cette fois l'ID
        $url = wp_get_attachment_image_src($picture_ID, 'post-thumbnail');
        ?>

        <a href="<?php echo get_permalink(48); ?>?cat=femme" class="blocImagecadre"><img src="<?php echo $url[0]; ?>" alt="photo désignant la catégorie homme">
            <p class="titreImage">FEMME</p>
            <div class="calqueNoir"></div>

        </a>

    </div>
</div>

<?php get_footer(); ?>
