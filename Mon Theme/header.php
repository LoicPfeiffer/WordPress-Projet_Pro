<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" , shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <?php
    if (is_front_page()) :
    ?>
        <title>Accueil | <?php bloginfo('name'); ?></title>
    <?php
    else :
    ?>
        <title><?php wp_title(); ?> | <?php bloginfo('name'); ?></title>
    <?php
    endif;
    ?>
    <link rel="shortcut icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/img/icons8-bulle.svg" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
