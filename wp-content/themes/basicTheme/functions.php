<?php 
    /* Ajout emplacement de menu */

    if (function_exists('register_nav_menus')){
        register_nav_menus(
            [
                'principal' => 'Menu principal',
                'footer' => 'menu bas de page',
            ]
        );
    }

    /* Ajout emplacement de la sidebar */
    if (function_exists('register_sidebar')){
        register_sidebar();
    }