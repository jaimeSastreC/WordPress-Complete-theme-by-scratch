<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <?php wp_head(); ?>
</head>
<body>
    <header id="en-tête">
        <h1><?php bloginfo('name');?></h1>
    </header>
    <nav>
        <?php wp_nav_menu();?>
    </nav>
    <div id="contenu">
