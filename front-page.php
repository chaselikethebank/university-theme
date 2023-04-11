<?php get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/heroes.jpeg')?>)">
    </div>
    <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">Let's get 1% Better Everyday</h2>
        <h3 class="headline headline--small">Browse our <strong>Community</strong></h3>
        <a href="#" class="btn btn--large btn--blue">🏆</a>
    </div>
</div>

<div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
            <?php 
                $eventList = new WP_Query(array(
                    'posts_per_page' => 2,
                    'post_type' => 'event',
                ));

                while($eventList->have_posts()) {
                    $eventList->the_post(); ?>
                    <div class="event-summary">
                <a class="event-summary__date t-center" href="#">
                    <span class="event-summary__month">
                        <?php 
                       $eventDate = new DateTime(get_field('event_date'));
                        echo $eventDate->format('M');
                        
                        ?>
                    </span>
                    <span class="event-summary__day">02</span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h5>
                    <p><?php if (has_excerpt()) {
                        echo get_the_excerpt(); 
                    } else {
                        echo wp_trim_words(get_the_content(),10);
                    }
                    
                    ?> <a href="<?php the_permalink(); ?>"
                            class="nu gray">Meet Up 🪃 </a></p>
                </div>
            </div>
                    <?php

                }
            ?>
            

            <p class="t-center no-margin"><a href="<?php echo site_url('/events'); ?>" class="btn btn--blue">View All Events</a></p>
        </div>
    </div>
    <div class="full-width-split__two">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
          <?php 
            $blogList = new WP_Query(array(
                'posts_per_page' => 2,
            )); 

            while ($blogList->have_posts()) {
                $blogList->the_post(); ?>
                <div class="event-summary">
                <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink();  ?>">
                    <span class="event-summary__month"><?php the_time('M'); ?></span>
                    <span class="event-summary__day"><?php the_time('d'); ?></span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a>
                    </h5>
                    <p><?php if (has_excerpt()) {
                        echo get_the_excerpt(); 
                    } else {
                        echo wp_trim_words(get_the_content(),10);
                    } ?> <a href="<?php the_permalink();  ?>" class="nu gray">Deep Dive 🤿</a></p>
                </div>
            </div>
            </li>
                <?php 
            } wp_reset_postdata();
          ?>

            

            <p class="t-center no-margin"><a href="<?php echo site_url('/blog') ?>" class="btn btn--yellow">View All Blog Posts</a></p>
        </div>
    </div>
</div>

<div class="hero-slider">
    <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
            <div class="hero-slider__slide"
                style="background-image: url(<?php echo get_theme_file_uri('images/vavles_and_bf.jpg')?>)">
                <div class="hero-slider__interior container">
                    <div class="hero-slider__overlay">
                        <h2 class="headline headline--medium t-center">Irrigation Technician</h2>
                        <p class="t-center">The fundamentals of Irrigation</p>
                        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="hero-slider__slide"
                style="background-image: url(<?php echo get_theme_file_uri('images/bf.jpg') ?>)">
                <div class="hero-slider__interior container">
                    <div class="hero-slider__overlay">
                        <h2 class="headline headline--medium t-center">BPAT</h2>
                        <p class="t-center">Take our Backflow Prevention Assembly Tester Course</p>
                        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="hero-slider__slide"
                style="background-image: url(<?php echo get_theme_file_uri('images/rotors.jpg') ?>)">
                <div class="hero-slider__interior container">
                    <div class="hero-slider__overlay">
                        <h2 class="headline headline--medium t-center">Texas Landscape Irrigator</h2>
                        <p class="t-center">Take our full Landscape Irrigator course</p>
                        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
    </div>
</div>


<?php
get_footer();
?>