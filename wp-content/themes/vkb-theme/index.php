<?php get_header(); ?>

<main id="main" class="site-main">

    <?php
    while (have_posts()) : the_post();
    get_template_part('template-parts/content', get_post_type());
    endwhile;

    the_posts_pagination(array(
        'prev_text' => __('Previous page', 'vkb-theme'),
        'next_text' => __('Next page', 'vkb-theme'),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'vkb-theme') . '</span>',
    ));
    ?>

    <p>test</p>
    
    </main>

    <?php get_footer(); ?>
