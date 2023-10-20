<!DOCTYPE html>
<html class="no-js normal green" <?php language_attributes(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Home Page, Turbo C/C++ simple basic web site theme." />
    <meta name="author" content="Fatih Tatoğlu" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <link rel="canonical" href="https://blog.tatoglu.net/blog-theme-turboc" />
    <link rel="home" href="https://blog.tatoglu.net/blog-theme-turboc" />

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css" />

    <script src="<?php echo get_template_directory_uri();?>/node_modules/mustache/mustache.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <span class="site-name">Turbo C Theme - Home Page</span>
    </header>

    <nav id="navigation"><?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => '','walker' => new AWP_Menu_Walker())); ?></nav>
