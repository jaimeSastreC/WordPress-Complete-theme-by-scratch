<?php get_header("header-de"); ?>
<?php
$layout = get_option( 'front_page_layout', 'one' );
get_template_part( 'front-page', $layout );
?>
<?php get_footer(); ?>