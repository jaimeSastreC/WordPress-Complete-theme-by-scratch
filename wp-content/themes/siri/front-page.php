<?php get_header(); ?>

<header class="hero">
    <a href="#" class="hero__wrapper">
        <div class="wrapper">
            <div class="wrapper__heading">
                <!-- todo: change title and subtitle to WP title -->
                <span><?php bloginfo('description');?></span>
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>

                <div class="button button-white">COURSES</div>
            </div>
        </div>
    </a>
</header>

<section class="standard-promo">
    <!-- todo: css promo-card change name - make dynamic -->
    <a href="#" class="promo-card promo-card--gray promo-card--women">
        <h2 class="promo-card__heading">Course</h2>
        <p class="promo-card__body">Short description of course.</p>
    </a>
    <!-- todo: css promo-card change name -->
    <a href="#" class="promo-card promo-card--gray promo-card--men">
        <h2 class="promo-card__heading">Visitor Course</h2>
        <p class="promo-card__body">Short desciption of the course.</p>
    </a>

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

    <form class="form" action="https://raddy.us20.list-manage.com/subscribe/post?u=c12aafb941c4276911b0d5cd3&amp;id=839b42c955" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
        <input class="form__email" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required="">
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c12aafb941c4276911b0d5cd3_839b42c955" tabindex="-1" value=""></div>
        <input class="form__submit button" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
    </form>

</section>

<?php get_footer(); ?>