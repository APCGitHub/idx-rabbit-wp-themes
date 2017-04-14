<?php

add_action('wp_enqueue_scripts', 'bootstrap_idxrabbit_frontend_scripts_and_styles');

function bootstrap_idxrabbit_frontend_scripts_and_styles()
{
	wp_register_script('bootstrap-idxrabbit-theme-scripts', BOOTSTRAP_IDXRABBIT_BASE_DIRECTORY_URI . '/public/js/app.js', array('jquery'), '110', true);

	wp_register_style('bootstrap-idxrabbit-theme-styles', BOOTSTRAP_IDXRABBIT_BASE_DIRECTORY_URI . '/public/css/app.css');

	wp_enqueue_script('bootstrap-idxrabbit-theme-scripts');
	wp_enqueue_style('bootstrap-idxrabbit-theme-styles');
}
