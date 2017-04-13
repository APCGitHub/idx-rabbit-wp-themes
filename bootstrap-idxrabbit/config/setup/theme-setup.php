<?php

add_action('after_setup_theme', 'bootstrap_idxrabbit_theme_setup');
add_filter('nav_menu_css_class' , 'bootstrap_idxrabbit_special_nav_class' , 10 , 2);

function bootstrap_idxrabbit_theme_setup()
{
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Main Navigation', 'idxrabbit' ),
			'mobile' => esc_html__( 'Mobile Navigation', 'idxrabbit' ),
			'footer' => esc_html__( 'Footer Links', 'idxrabbit' )
		)
	);
}

function bootstrap_idxrabbit_special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}