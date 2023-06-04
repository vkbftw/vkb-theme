<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<p>test</p>
    <header>
        <nav>
        <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'primary-menu',
        ));
        ?>
        </nav>
    </header>