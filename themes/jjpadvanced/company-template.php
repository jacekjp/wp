<?php
/*
    Template Name: Company Layout
  */
?>
<?php get_header(); ?>

<div class="container content">
    <div class="main block">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="page">
                    <h2><?php the_title(); ?></h2>
                    <p class="phone">Phone: 444-445-5445</p>
                    <?php the_content(); ?>
                </article>
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

<?php get_footer();?>


