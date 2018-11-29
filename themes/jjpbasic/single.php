<?php get_header(); ?>

<div class="main">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()): the_post(); ?>
                <article class="post">
                    <h3>
                            <?php the_title(); ?>
                    </h3>
                    <div class="meta">
                        Created By <?php the_author(); ?> on <?php the_time(get_option('date_format')); ?>
                    </div>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <?php echo wpautop('No posts ware found'); ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
