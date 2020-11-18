<?php get_header(); ?>

<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <article>
            <header class="en-tete_page"><h1><?php the_title(); ?> page.php</h1></header>
            <?php the_content(); ?>
        </article>
    <?php endwhile;  ?>
<?php endif; ?>

<?php get_footer();  ?>