<?php get_header(); ?>

<main id="articles">
    <?php if(have_posts()):?>
        <?php while(have_posts()): the_post();?>
            <article>
                <header class="titre-article">
                    <h2><a href="<?php the_permalink();?>">
                    <?php the_title();?></a></h2>
                </header>
                <p><?php the_content();?></p>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_sidebar();?>
<?php get_footer();?>