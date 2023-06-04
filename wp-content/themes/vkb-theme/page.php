
<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-header">
        <h1><?php the_title() ?></h1>
    </div>

    <div class="entry-content">

        <div class="left-column">
            <?php get_sidebar(); ?>
        </div>

        <p>test</p>

        <div class="right-column">
            <?php the_content(); ?>
        </div>

        <?php wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'vkb-theme'),
            'after' => '</div>',
        )); ?>
    </div>

</article>

<?php get_footer(); ?>