<?php

function basic_theme_setup(){
    //Featured Image Support
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'basic_theme_setup');

//Excerpt Length
function set_excerpt_length(){
    return 50;
}

add_filter('excerpt_length', 'set_excerpt_length');