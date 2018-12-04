<?php get_header(); ?>

<div class="container content">
    <div class="main block">
        <h1 class="page-header">
            Search Results
        </h1>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="archive-post">
                    <h4>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>

                    <p>Posted On: <?php the_time('F j, Y g:i a'); ?></p>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <?php echo apautop('Soory, no posts ware found'); ?>
        <?php endif; ?>
    </div>
    <div class="side">
        <div class="block">
            <h3>Sidebar Head</h3>

            <p>Etizzle fo shizzle funky fresh sed augue hendrerit accumsizzle. I'm in the shizzle izzle fo shizzle.
                Vivamizzle rizzle dolizzle, viverra vitae, sizzle izzle, ultrices izzle, sizzle.</p>
            <a href="" class="button">More</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>


