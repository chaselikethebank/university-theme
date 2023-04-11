<?php

get_header();
?>
<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/dinoEvent.jpeg') ?>)"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">🌐

        <?php the_archive_title();?>
<!--
            <?php if (is_category()) {
    single_cat_title();
}if (is_author()) {
    echo "Posts by: ";
    the_author();}?> -->
</h1>
        <div class=" page-banner__intro">
            <p><?php the_archive_description();?></p>
        </div>
    </div>
</div>
<div class="container container--narrow page-section">
    <?php
while (have_posts()) {
    the_post();?>
    <div class="container container--narrow page-section">

    <div class="event-summary">
                <a class="event-summary__date t-center" href="#">
                    <span class="event-summary__month">Apr</span>
                    <span class="event-summary__day">02</span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h5>
                    <p><?php echo wp_trim_words(get_the_content(), 18) ?> <a href="<?php the_permalink(); ?>"
                            class="nu gray">Meet Up 🪃 </a></p>
                </div>
            </div>
        <?php echo paginate_links();
    ?>
    </div>

</div>
<?php }
?>

</div>


<?php
get_footer();
?>