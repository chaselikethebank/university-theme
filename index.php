<?php 

get_header();
?>
<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/backyard.jpg') ?>)"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"> 🌐 Blogosphere</h1>
        <div class=" page-banner__intro">
            <p>Breaking!</p>
        </div>
    </div>
</div>


<div class="container container--narrow page-section">
    <?php 
        while(have_posts()) {
            the_post(); ?>
    <div class="container container--narrow page-section">

        <div class="post-item">
            <h2><a class="headline headline--medium headline--post-title" href=" <?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a></h2>
            <div class="metabox">
                <P> Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y');?> in
                    <?php echo get_the_category_list(', '); ?>


            </div>
            </p>
            <div class="generic-content">
                <?php the_excerpt(); ?>

            </div>
            <p>
            </p>
            <p>
                <a class="btn btn--blue" href="<?php get_permalink()?>">Deep Dive 🤿 </a>

            </p>

        </div>
        <?php     echo paginate_links();
 ?>
    </div>

</div>
<?php }
    ?>

</div>


<?php
get_footer();
?>