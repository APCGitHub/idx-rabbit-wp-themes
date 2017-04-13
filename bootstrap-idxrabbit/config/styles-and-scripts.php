<?php

function frontend_scripts_and_styles()
{
	wp_enqueue_script('bootstrap-idxrabbit-theme-scripts', BOOTSTRAP_IDXRABBIT_CHILD_BASE_DIRECTORY_URI . '/public/js/app.js', null, null, true);

	wp_enqueue_style('bootstrap-idxrabbit-theme-styles', BOOTSTRAP_IDXRABBIT_CHILD_BASE_DIRECTORY_URI . '/public/css/app.css');
}

add_action('wp_enqueue_scripts', 'frontend_scripts_and_styles', 20);