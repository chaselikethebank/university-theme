<?php
get_header();
while (have_posts()) {
    the_post();?>
<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/backyard.jpg') ?>)"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">🐅 <?php the_title()?></h1>
        <div class=" page-banner__intro">
            <p>replace this later.</p>
        </div>
    </div>
</div>
<div class="container container--narrow page-section">
    <?php
$parent_ID = wp_get_post_parent_id(get_the_ID());
    if ($parent_ID) {?>
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
            <a class="metabox__blog-home-link" href="<?php echo get_permalink($parent_ID) ?>"><i class="fa fa-home"
                    aria-hidden="true"></i> Back to
                <?php echo get_the_title($parent_ID) ?></a>
            <span class="metabox__main">
                <?php echo the_title() ?>
            </span>
        </p>
    </div>
    <?php }?>
    <?php
$isAParent = get_pages(array(
        'child of' => get_the_ID(),
    ));
    if ($parent_ID or $isAParent) {?>
    <div class="page-links">
        <h2 class="page-links__title"><a href="
            <?php echo get_permalink($parent_ID); ?>">
                <?php echo get_the_title($parent_ID) ?></a>
        </h2>
        <ul class="min-list">
            <?php
if ($parent_ID) {
        $findChildrenOf = $parent_ID;
    } else {
        $findChildrenOf = get_the_ID();
    }
        wp_list_pages(array(
            'title_li' => null,
            'child_of' => $findChildrenOf,
            'sort_column' => 'menu_order',
        ));
        ?>
        </ul>
    </div>
    <?php }?>
    <div class="generic-content">
        <?php the_content();?>
    </div>
</div>
<?php }
get_footer();
?>