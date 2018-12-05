<?php

// Theme Support
function jjp_gallery_theme_support(){
    //Featured Image Support
    add_theme_support('post-thumbnails');

    set_post_thumbnail_size(900, 600);

    //Post Format Support
    add_theme_support('post-formats', array('gallery'));
}

add_action('after_setup_theme', 'jjp_gallery_theme_support');