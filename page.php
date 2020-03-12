<?php get_header(); ?>

<?php

// $genres = get_terms('product_cat');
// for ($i=0; $i <count($genres) ; $i++) {
//     echo "<p style='color:black;'>".$genres[$i]."</p>";
// }

if (!empty($_GET['cat']) && $_GET['cat'] == 'homme') {
    $get_cat = htmlspecialchars($_GET['cat']);

    // Create the WP_User_Query object
    $wp_user_query = new WP_User_Query(array(
        'role' => 'Créateurs',
        'orderby' => 'display_name'
    ));

    // Get the results
    $createurs = $wp_user_query->get_results();

    // Looping createurs
    if (!empty($createurs)) {
        $user_info = get_userdata($get_cat); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

<?php endwhile;
        endif; ?>

        <?php
    }
}
?>
<?php get_footer(); ?>
