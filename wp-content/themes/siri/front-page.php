<?php get_header(); ?>

<header class="hero">
    <div id="siri__wrapper">
        <h1 id="siri-back">SIRI</h1>
    </div>
    <a href="#" class="hero__wrapper">
        <div class="wrapper">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <div class="wrapper__heading">
                        <span><?php bloginfo('description');?></span>
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="wrapper__body hero_text">
                        <?php the_content(); ?>
                        <div class="button button-white">COURSES</div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </a>

<!--     <div class="round">
        <svg  xmlns="http://www.w3.org/2000/svg" version="1.1" id="wrapper__circle" width="450" height="900" >
            <title>round for background design</title>
            Instructions
            <circle id="circle" r="450" cx="480" cy="380" stroke="null" />
        </svg>
    </div> -->

</header>



<!-- <section class="standard-promo">
    
    <a href="#" class="promo-card promo-card--gray promo-card--classic">
        <h2 class="promo-card__heading">Course</h2>
        <p class="promo-card__body">Short description of the course.</p>
    </a>

    <a href="#" class="promo-card promo-card--gray promo-card--extra">
        <h2 class="promo-card__heading">Visitor Course</h2>
        <p class="promo-card__body">Short desciption of the course.</p>
    </a>

</section> -->

<section class="shop-section shop-section-1">
    <h2 class="shop-section__heading"> Best Courses</h2>
    <p class="shop-section__body">My best Courses. They have most success<br /> with happy results.</p>
    <div class="items">
        <?php /* echo do_shortcode('[best_selling_products category = "Language Level I" limit = "4"]'); */ ?>
        <?php echo do_shortcode('[best_selling_products limit="4"]'); ?>
    </div>
</section>

<section class="shop-section">
    <h2 class="shop-section__heading">New Proposals</h2>
    <p class="shop-section__body">New arrivals. Updated regularly.<br />It's time to explore!</p>
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