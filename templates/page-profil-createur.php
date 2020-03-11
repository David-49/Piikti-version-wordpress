<?php
/*
    Template name: Profil
*/
?>

<?php get_header(); ?>

<?php

if (!empty($_GET['user_id'])) {
    $get_id = htmlspecialchars($_GET['user_id']);

    // Create the WP_User_Query object
    $wp_user_query = new WP_User_Query(array(
        'role' => 'Créateurs',
        'orderby' => 'display_name'
    ));

    // Get the results
    $createurs = $wp_user_query->get_results();

    // Looping createurs
    if (!empty($createurs)) {
        $user_info = get_userdata($get_id);

        mt_profile_img(
            $get_id,
            array(
                'size' => 'large',
                'attr' => array( 'alt' => 'photo de profil des créateurs', 'class' => 'photoCreateursProfil' ),
                'echo' => true,
            )
        );
        echo "<div class='blocinfoCreateursProfil'>
        <p class='nomCreateursProfil'>".$user_info->first_name." ".strtoupper($user_info->last_name)."</p>
        <p class='ageCreateursProfil'>".$user_info->age."</p>
        </div>";
        echo $user_info->user_email;
        echo $user_info->description;
    }
}

?>



<?php get_footer(); ?>
