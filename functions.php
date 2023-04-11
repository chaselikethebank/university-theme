<?php 


    function uni_files() {
        wp_enqueue_script('main-js', get_theme_file_uri('build/index.js'), array('jquery'), '1.0', true);
        wp_enqueue_style('uni_main_styles', get_theme_file_uri('/build/style-index.css'));
        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('uni_extra_styles', get_theme_file_uri('/build/index.css'));
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');


    }

    add_action('wp_enqueue_scripts', 'uni_files');

    function uni_features() {
        // register_nav_menu('headerMenu', 'Header Menu');
        // register_nav_menu('footerMenuOne', 'Footer Menu One');
        // register_nav_menu('footerMenuTwo', 'Footer Menu Two');

        add_theme_support('title-tag');
    }
    
    add_action('after_setup_theme', 'uni_features');

    

?>