<?php
// Post Featured Image
add_theme_support( 'post-thumbnails' );

// Register Menu
register_nav_menus(array(
    'primary'=>__('Primary Menu')
));

// Activate Widgets
function init_widgets($id){
    register_sidebar(array(
        'name'=>'Sidebar',
        'id'=>'sidebar',
        'before_widget'=>'<div class="side-widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3>',
        'after_title'=>'</h3>'
    ));
}
add_action( 'widgets_init', 'init_widgets' );

// Custom Exceprt Function
function custom_excerpt_length(){
    return 30;
}
add_filter('excerpt_length','custom_excerpt_length'); 