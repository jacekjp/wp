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

//Widget Locations
function init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar'
    ));
}

add_action('widgets_init', 'init_widgets');

//Register widgets