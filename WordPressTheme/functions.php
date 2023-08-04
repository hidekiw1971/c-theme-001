<?php

function my_script_init()
{
	wp_deregister_script('jquery');
	wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/styles.css', array(), '0.0.0');
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "0.0.0", true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '0.0.0', true);
	// wp_enqueue_script('polyfill', '//polyfill.io/v3/polyfill.min.js?features=es6', "", "0.0.0", true);
	// wp_enqueue_script('micromodal', '//unpkg.com/micromodal/dist/micromodal.min.js', "", "0.0.0", true);
}
add_action('wp_enqueue_scripts', 'my_script_init');
