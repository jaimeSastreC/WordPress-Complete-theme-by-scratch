<?php get_header(); ?>

<header class="hero">
    <a href="#" class="hero__wrapper">
        <div class="wrapper">
            <div class="wrapper__heading">
                <!-- todo: change title and subtitle to WP title -->
                <span><?php bloginfo('description');?></span>
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <div class="button button-white">COURSES</div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </a>
</header>

<section class="standard-promo">
    
    <a href="#" class="promo-card promo-card--gray promo-card--classic">
        <h2 class="promo-card__heading">Course</h2>
        <p class="promo-card__body">Short description of the course.</p>
    </a>

    <a href="#" class="promo-card promo-card--gray promo-card--extra">
        <h2 class="promo-card__heading">Visitor Course</h2>
        <p class="promo-card__body">Short desciption of the course.</p>
    </a>

</section>

<section class="standard-promo">
    <!-- todo: make dynamic -->
    <?php 
       if(shortcode_exists('product_category')) {
            echo do_shortcode('[ product_category ]');
            echo do_shortcode('[woocommerce_product_filter_category]');
        }
        if (is_product_category()) {
            echo "<div id='wc-category-menu'>";
            echo do_shortcode('[product_categories columns="5"]');
            echo "</div>";
        }
    ?>

</section>

<section class="shop-section">
    <h2 class="shop-section__heading"> Best Sellers</h2>
    <p class="shop-section__body">Our best sellers. They are cool<br /> with happy results.</p>
    <div class="items">
        <?php /* echo do_shortcode('[best_selling_products category = "Language Level I" limit = "4"]'); */ ?>
        <?php echo do_shortcode('[best_selling_products limit="3"]'); ?>
    </div>
</section>

<section class="shop-section">
    <h2 class="shop-section__heading">New Proposals</h2>
    <p class="shop-section__body">New arrivals. Updated every day.<br />It's time to explore.</p>
    <div class="items">
        <?php echo do_shortcode('[products limit="3" orderbyid="id" order"DESC"]'); ?>
    </div>
</section>

<section class="newsletter">

    <h1 class="newsletter__heading">
        Sign up to Siri's newsletter and
        get updates about my latest <strong>"visitors language travels proposals"</strong>.
    </h1>
    <!-- [wpforms id="586" title="false"] -->
   <?php 
        if(shortcode_exists('wpforms')) {
            echo do_shortcode('[wpforms id=48 title="false"]');
        }
   ?>
<!--     <form class="form" action="https://raddy.us20.list-manage.com/subscribe/post?u=c12aafb941c4276911b0d5cd3&amp;id=839b42c955" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
        <input class="form__email" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required="">
        real people should not fill this in and expect good things - do not remove this or risk form bot signups
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c12aafb941c4276911b0d5cd3_839b42c955" tabindex="-1" value=""></div>
        <input class="form__submit button" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
    </form> -->

</section>

<?php get_footer(); ?>