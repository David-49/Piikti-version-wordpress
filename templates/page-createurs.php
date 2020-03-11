<?php
/*
    Template Name: Créateurs
*/
?>
<?php get_header(); ?>

<?php
$picture_ID = get_field('banniere');// On récupère cette fois l'ID
$url = wp_get_attachment_image_src($picture_ID, 'post-thumbnail');
?>

<div class="banniereCreateurs"><img src="<?php echo $url[0]; ?>" class="image-banniere-createurs">
    <div class="calque"></div>

    <h1  class="titrePageCreateurs"><?php the_title(); ?></h1>

</div>

<?php get_template_part('searchForm'); ?>

<?php
// Create the WP_User_Query object
$wp_user_query = new WP_User_Query(array(
    'role' => 'Créateurs',
    'order' => 'ASC',
    'orderby' => 'display_name'
));

// Get the results
$createurs = $wp_user_query->get_results();

// Looping createurs
if (!empty($createurs)) {
    echo "<div class='blocCreateurs'>";
    foreach ($createurs as $createur) {
        // get all the user's data
        $user_info = get_userdata($createur->ID);
        // var_dump($user_info);
        // echo "<p>".$user_info->ID."</p>";
        $userPhoto = $createur->ID;
        // var_dump($userPhoto);
        //printing basic infos
        echo "<a href='".bloginfo('url')."/profil/?user_id=".$userPhoto."' class='cadrePhotoCreateur'>";
        // echo "<a href='".the_permalink($userPhoto)."' class='cadrePhotoCreateur'>";
        mt_profile_img(
            $userPhoto,
            array(
                'size' => 'large',
                'attr' => array( 'alt' => 'photo de profil des créateurs', 'class' => 'photoCreateurs' ),
                'echo' => true,
            )
        );
        echo "<div class='calqueCadreCreateurs'></div>";
        echo "<div class='blocinfoCreateurs'>
        <p class='nomCreateurs'>".$user_info->first_name." ".strtoupper($user_info->last_name)."</p>
        <p class='ageCreateurs'>".$user_info->age."</p>
        </div>";
        echo "</a>";
    }
    echo "</div>";
}




 ?>

<?php get_footer(); ?>
