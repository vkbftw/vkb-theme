<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry_header">
        <?php the_title('h1 class="entry-title">', '</h1>'); ?>

        <div class="entry-meta">
            <?php vkb_meta_function();
            ?>
        </div>
    </header>

    <div class="entry-content">
    <?php the_content(); ?>
    <?php wp_link_pages(array(
        'before' => '<div class="page-links">' . esc_html__('Pages:', 'vkb-theme'),
        'after' => '</div>',
    )); ?>
    </div>

    <p>
        <a href="<?php the_permalink() ?>">Read more</a>
    </p>

    <footer class="entry-footer"> 
        <?php vkb_footer_function();
        ?>
    </footer>
</article> <!--#post-<?php the_ID(); ?> -->