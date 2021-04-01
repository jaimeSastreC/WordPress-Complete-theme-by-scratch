<?php get_header("header-es"); ?>
<?php
$layout = get_option( 'front_page_layout', 'two' );
get_template_part( 'front-page', $layout );
?>
<?php get_footer(); ?>