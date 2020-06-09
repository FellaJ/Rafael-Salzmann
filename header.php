<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/_/img/favicon.ico"
          type="image/x-icon">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/_/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.typekit.net/cbo4kmx.css">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="content-wrap">
    <header class="site-navigation">

        <div class="icon-nav-wrapper">
            <a href="" class="instagram nav-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_/img/instagram.svg" alt="instagram">
            </a>
            <a href="" class="facebook nav-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_/img/facebook-square.svg" alt="facebook">
            </a>
            <a href="" class="youtube nav-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_/img/youtube.svg" alt="youtube">
            </a>
            <a href="" class="twitter nav-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_/img/twitter.svg" alt="twitter">
            </a>
        </div>

        <nav class="main-menu">
            <?php wp_nav_menu(array(
                'theme_location' => 'main',
                'container' => '',
            )); ?>
            <div class="menu-page-blocker"></div>
        </nav>

        <button class="hamburger d-lg-none menu-button ml-1" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

    </header>

    <?php get_template_part('partials/page-header'); ?>
