<?php get_header(); ?>
<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_post_thumbnail(); ?>
                <p class="post-metas"><?php printf(__('Posted on %s by %s', 'vkb-theme'), get_the_date(), get_the_author()); ?></p>
                <?php the_content(); ?>
            </article>
    <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'vkb-theme'); ?></p>
    <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>