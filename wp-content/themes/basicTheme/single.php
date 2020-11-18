<?php get_header(); ?>

<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <div id="article-seul">
            <h2><?php the_title(); ?> single.php</h2>
            <?php the_content(); ?>
            <p class="metadata">Par : <?php the_author(); ?></p>
            <p class="metadata">Publié le : <?php the_date(); ?></p>
        </div>
    <?php endwhile;  ?>
<?php endif; ?>
<?php get_sidebar();  ?>
<?php get_footer();  ?>