<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.typekit.net/tli5ydr.css">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <header class="header">

      <a href="<?php echo home_url('/'); ?>" class="lienLogo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logoPiikti">
      </a>

      <div class="info-connexion">
          <img src="<?php echo get_template_directory_uri(); ?>/img/accueil/user.svg" class="logoUser">
          <img src="<?php echo get_template_directory_uri(); ?>/img/accueil/supermarket.svg" class="logoCaddie">
      </div>




        <nav class="nav">
            <?php wp_nav_menu(
    array(
                    'theme_location' => 'main',
                    'container' => 'ul',
                    'menu_class' => 'site__header__menu',
                )
);
            ?>
        </nav>


    </header>

    <?php wp_body_open(); ?>
