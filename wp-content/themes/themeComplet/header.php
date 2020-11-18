<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmp.org/xfn/11" >
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
    
    <title>
        <?php bloginfo('name'); ?>
        <?php if(is_home() || is_front_page()) : ?>
            &mdash; <?php bloginfo('description'); ?>
        <?php else : ?>
            &mdash; <?php wp_title("", true); ?>
        <?php endif; ?>
    </title>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/kube.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <script src="<?php bloginfo('template_url'); ?> /js/kube.min.js" type="text/javascript"></script>
    
    <?php wp_head(); ?>
</head>
<body>
