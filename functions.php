<?php

function my_styles() {
	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/style.css', array(), '09.21.04' );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '09.21.01', true );
}
add_action( 'wp_enqueue_scripts', 'my_styles' );


function swiper_scripts() {
	wp_enqueue_style( 'swiper-style' , get_template_directory_uri() . '/css/swiper.css', array(), '09.21.01');
	wp_enqueue_script('swiper-style', get_template_directory_uri() . '/js/swiper.min.js', array(), '09.21.01');
}
add_action('wp_enqueue_scripts', 'swiper_scripts');
