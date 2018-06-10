<?php

function blog_files() {
	wp_enqueue_script('main-bundle-js', get_theme_file_uri('/js/scripts-bundled.js'), null, 1.0, true);
	wp_enqueue_style('styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'blog_files');

function university_features() {
	register_nav_menu('header_menu_location', 'Header Menu Location');
	register_nav_menu('footer_location_one', 'Footer Location One');
	register_nav_menu('footer_location_two', 'Footer Location Two');
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');

?>