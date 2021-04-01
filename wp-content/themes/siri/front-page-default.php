<?php get_header(); ?>

<header class="hero">
    <div id="wrapper__heading">
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
                        <a href="<?php echo site_url()."/?post_type=product"; ?>">
                            <div class="button button-white">DEFAULT</div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </a>
</header>

<section class="shop-section shop-section-1">
    <h2 class="shop-section__heading"><?php the_field('shop-section__title'); ?></h2>
    <p class="shop-section__body">
        <?php 
            $shop_description = get_field('shop-section__description');
            echo nl2br($shop_description); 
        ?></p>
    <div class="items">
    <?php echo do_shortcode('[products limit="3" orderbyid="id" order="DESC"]'); ?>
    </div>
</section>

<!-- <section class="shop-section shop-section-1">
    <header>
        <h2 class="shop-section__heading"> Best Courses</h2>
        <p class="shop-section__body">My best Courses. They have most success<br /> with happy results.</p>
    </header>
        <div class="items">
        <?php /* echo do_shortcode('[best_selling_products category = "Language Level I" limit = "4"]'); */ ?>
        <?php //echo do_shortcode('[best_selling_products limit="4"]'); ?>
    </div>
</section> -->

<section class="about-section shop-section-1">
    <div class="section__wrapper">
        <div class="split">
            <div>
                <!-- IMG_1571-300x300.jpg -->
                <!-- <img src="<?php //echo get_template_directory_uri().'/images/IMG_1571.jpg';?>" alt="me, a spanish teacher"> -->
                <?php 
                    $image = get_field('about-me__picture');
                    //var_dump($image);
                    $aboutMe__picture = $image['sizes']['medium_large'];
                ?>
                <img src="<?php echo $aboutMe__picture; ?>" alt="me, a spanish teacher">
            </div>
            <div class="text__wrapper">
                <header>
                    <h2 class="about__heading"><?php the_field('about-me__title'); ?></h2>
                </header>
                
                <p><?php 
                    $aboutMe__text = get_field('about-me__text');
                    echo nl2br($aboutMe__text);        
                ?></p>
            </div>
        </div>
    </div>
</section>

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




<section class="newsletter">

    <h1 class="newsletter__heading">
        <?php the_field('newsletter__title'); ?>
    </h1>

   <?php 
        if(shortcode_exists('wpforms')) {
            echo do_shortcode('[wpforms id=49 title="false"]'); //49 prod 48 local
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