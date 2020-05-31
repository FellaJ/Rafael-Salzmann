<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/_/img/favicon.ico"
          type="image/x-icon">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/_/img/favicon.ico" type="image/x-icon">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="content-wrap">
    <header class="site-navigation">

        <a class="home-link mr-auto" href="<?php echo home_url(); ?>">
            <img alt="Memedia" src="<?php echo get_stylesheet_directory_uri() . "/_/img/logo.svg" ?>">
        </a>

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
