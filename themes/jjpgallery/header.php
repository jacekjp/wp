<!DOCTYPE html>
<html>
<head>
    <title>PhotoGallery</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="w3-container w3-teal">
    <div class="w3-row">
        <div class="w3-col m9 l9">
            <h1><?php bloginfo('name'); ?></h1>
        </div>
        <div class="w3-col m3 l3">
            <input class="w3-input" type="text" placeholder="Search">
        </div>
    </div>
</header>

<div class="w3-row">
    <div class="w3-col m3 l3">
        <?php if(is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
    </div>
    <div class="w3-col m9 l9">
        <div class="w3-row">