<?php 
if (function_exists('register_nav_menus')) {
    register_nav_menus(
        [
            'principal' => 'Menu principal',
            'secondaire' => 'Menu secondaire',
        ]
    );
}

if (function_exists('register_sidebar')) {
    
    register_sidebar(
        [
            'id' => 'gauche',
            'name' => 'Emplacement gauche',
            'description' => 'Emplacement à gauche des widgets',
            'befor_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ]
    );

    register_sidebar(
        [
            'id' => 'droite',
            'name' => 'Emplacement droite',
            'description' => 'Emplacement à droite des widgets',
            'befor_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ]
    );
}