<?php

    function loadStyleSheets()
    {
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('customStyle', get_template_directory_uri() . '/style.css', array(), false, 'all');
        wp_enqueue_style('customStyle');
    }

    add_action('wp_enqueue_scripts', 'loadStyleSheets');

    function loadJavaScripts()
    {
        wp_register_script('customJs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
        wp_enqueue_script('customJs');
    }

    add_action('wp_enqueue_scripts', 'loadJavaScripts');

    function loadJQuery()
    {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', true);
        add_action('wp_enqueue_scripts', 'jquery');
    }

    add_action('wp_enqueue_scripts', 'loadJQuery');

    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'top-menu' => __('Top Menu', 'theme'),
            'footer-menu' => __('Footer Menu', 'theme'),
        )
    );

    add_image_size('smallest', 300, 300, true);
    add_image_size('largest', 800, 800, true);

?>