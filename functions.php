<?php


//ウィジェット
register_sidebar(
array(
	'id' => 'sidebar-1' ,
)
);

add_theme_support( 'automatic-feed-links' );

register_nav_menu( 'navigation' , 'ナビゲーション' );

add_theme_support( 'custom-header' , array(
	'width' => 1500,
	'height' => 250,
	'default-image' => '%s/header-1500x250.jpg',
        'header-text' => false
) );

function my_length($length) {
    return 70;
}   
add_filter('excerpt_mblength','my_length');

function my_more($more) {
    return '…';
}

add_filter( 'excerpt_more', 'my_more' );

add_theme_support( 'post-thumbnails' );