 <?php
 /* loading bigger files and updates */
@ini_set( 'upload_max_size' , '120M' );
@ini_set( 'post_max_size', '120M');
@ini_set( 'max_execution_time', '300' );
 

/* Adding CSS & JS */
 function woocommerce_custom_theme() {
    wp_register_style('custom_css', get_template_directory_uri().'/css/style.css', false, 1.0);
    wp_register_style('stolsl_cdn', 'https://use.typekit.net/bjt7zcc.css', false, 1.0);
    wp_register_style('playfair_cdn', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;1,700&display=swap', false, 1.0);

    wp_enqueue_style('custom_css');
    wp_enqueue_style('stolsl_cdn');
    wp_enqueue_style('playfair_cdn');
 }

 /* Creating Customer menus */
 if (function_exists('register_nav_menus')) {
   register_nav_menus([
      'top-menu' => 'top-menu',
   ]);
 }
 

 /* Creating WooCommerce Menu */
 function woocommerce_custom_menu() {
    register_nav_menu(
      'Top-menu-header', 
      __('WooCommerce Custom Menu'), 
      'woocommercecustommenu'
   );
 }

 add_action( 'init', 'woocommerce_custom_menu');

 /* WooCommerce */
 if(class_exists('WooCommerce')) {

    /* WooCommerce Support */
    function woocommerce_add_woocommerce_support() {
        add_theme_support('woocommerce');
    }

    add_action('after_setup_theme', 'woocommerce_add_woocommerce_support');

    /* Remove WooCommerce Styles / option */
    /* add_filter('woocommerce_enqueue_styles', '__return_false'); */

    /* Remove WooCommerce Styles / option */
    add_filter('woocommerce_show_page_title', '__return_false');

    /* Add Support for Gallery Images */
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
 }

 add_action('wp_enqueue_scripts', 'woocommerce_custom_theme');

 