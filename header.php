<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/tli5ydr.css">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <header class="header">

      <a href="<?php echo home_url('/'); ?>" class="lienLogo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.svg" alt="Logo" class="logo">
      </a>

      <?php wp_nav_menu(
    array(
        'theme_location' => 'main',
        'container' => 'ul',
        'menu_class' => 'site__header__menu',
       )
);
    ?>


    </header>

    <?php wp_body_open(); ?>
