<?php
/*
    Template name: Profil
*/
?>

<?php get_header(); ?>

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
    echo '<ul>';
    foreach ($createurs as $createur) {
        // get all the user's data
        $user_info = get_userdata($createur->ID);
        $userKK = $createur->ID;
        //printing basic infos
        echo '<li>';
        mt_profile_img(
            $userKK,
            array(
                'size' => 'thumbnail',
                'attr' => array( 'alt' => 'Alternative Text' ),
                'echo' => true,
            )
        );
        echo $user_info->first_name;
        echo $user_info->last_name;
        echo $user_info->age;
        echo $user_info->user_email;
        echo $user_info->description;
        echo '</li>';
    }
    echo '</ul>';
}

?>

<?php get_footer(); ?>
