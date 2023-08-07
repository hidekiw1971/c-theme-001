<?php

wp_enqueue_style('style-css', get_stylesheet_directory_uri() . '/assets/css/styles.css', array(), '1.0.0');

// WordPressに含まれているjquery.jsを読み込まない
wp_deregister_script('jquery');

wp_enqueue_script(
	'jquery-min',
	'//code.jquery.com/jquery-3.7.0.min.js',
	array(),
	'3.7.0'
);

wp_enqueue_script(
	'main_script',
	get_template_directory_uri() . '/assets/js/script.js',
	array('jquery'),
	'1.0'
);
