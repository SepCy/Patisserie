<?php

declare(strict_types=1);

// function load_stylesheets()
// {
//     wp_register_style('css', get_template_directory_uri() . '/css/main.css', array(), 1, 'all');
//     wp_enqueue_style('css');

//     wp_register_style('icons', get_template_directory_uri() . '/icons/fontawesome/css/all.css', array(), 1, 'all');
//     wp_enqueue_style('icons');
// }

// add_action('wp_enqueue_scripts', 'load_stylesheets');



add_action('wp_enqueue_scripts', function () {
    //wp_deregister_script('jquery');

    wp_enqueue_style('Emma', mix('styles/app.css'));

    wp_register_style('icons', get_template_directory_uri() . '/icons/fontawesome/css/all.css', array(), 1, 'all');
    wp_enqueue_style('icons');

    wp_register_script('Emma', mix('scripts/app.js'), '', '', true);
    wp_enqueue_script('Emma');
});


add_theme_support('menus');

//Register menus

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
    )
);
