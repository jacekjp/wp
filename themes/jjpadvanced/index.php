<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <h1>
            <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            <small><?php bloginfo('description'); ?></small>
        </h1>

        <div class="h_right">
            <form method="get" action="<?php esc_url(home_url('/')); ?>">
                <input type="text" name="s" placeholder="Search..."/>
            </form>
        </div>
    </div>
</header>

<nav class="nav main-nav">
    <div class="container">
        <?php $args = array('theme_location' => 'primary'); ?>
        <?php wp_nav_menu($args); ?>
    </div>
</nav>

<div class="container content">
    <div class="main block">
        <?php if(have_posts()) : ?>
            <?php whie(have_posts()) : the_post(); ?>
        <article class="post">
            <h2>Blog Post 1</h2>

            <p class="meta">Posted at 15:44 on December 1 by admin</p>

            <p>
                Lorizzle ipsizzle get down get down sizzle amizzle, shit adipiscing that's the shizzle. Nullizzle dizzle
            </p>
            <a href="#" class="button">Read More</a>
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
<footer class="main-footer">
    <div class="container">
        <div class="f_left">
            <p>&copy; 2018 - JJP</p>
        </div>
        <div class="f_right">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Services</a></li>
            </ul>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>



