<?php

function  vkb_theme_setup()
{
    //Add support for post thumbnails
    add_theme_support('post-thumbnails');

    //Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'vkb-theme'),
        'secondary' => __('Secondary Menu', 'vkb-theme'),
    ));

    //add custom image sizes
    add_image_size('featured-image', 640, 360, true);

}

add_action('after_setup_theme', 'vkb_theme_setup');

function vkb_theme_scripts()
{
    //Enqueue styles
    wp_enqueue_style('vkb-theme-style', get_stylesheet_uri());

    //Enqueue scripts
    wp_enqueue_scripts('vkb-theme-script', get_template_directory_uri() . '/js/main.js', [], '1.0', true);

}

add_action('wp_enqueue_scripts', 'vkb_theme_scripts');

function vkb_theme_widgets_init()
{

    //Register widget areas
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'vkb-theme'),
        'id' => 'primary-sidebar',
        'description' => __('Add widgets here to appear in the primary sidebar.', 'vkb-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget Area', 'vkb-theme'),
        'id' => 'footer-widget-area',
        'description' => __('Add widgets here to appear in the footer.', 'vkb-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'vkb_theme_widgets_init');

function vkb_meta_function()
{
    echo '<span class="meta-date">' . get_the_date() . '</span>';
    echo '<span class="meta-author">' . __('By', 'vkb-theme') . ' ' . get_the_author() . '</span>';
    echo '<span class="meta-categories">' . __('Filed under:', 'vkb-theme') . ' ' . get_the_category_list(', ') . '</span>';
    echo '<span class="meta-tags">' . __('Tagged:', 'vkb-theme') . ' ' . get_the_tag_list('', '. ') . '</span>';
}

function vkb_footer_function()
{ 
    $comments_count = get_comments_number();
    if ($comments_count == 1) {
        $comments_text = __('1 Comment', 'vkb-theme');
    } else {
        $comments_text = sprintf(__('%s Comments', 'vkb-theme'), $comments_count);
    }

    echo '<div class="footer-meta">';
    echo '<span class="meta-comments">' . $comments_text . '</span>';
    echo '<span class="meta-edit">' . get_edit_post_link(__('Edit', 'vkb-theme')) . '</span>';
    echo '</div>';
}

