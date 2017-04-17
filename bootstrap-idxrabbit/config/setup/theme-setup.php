<?php

add_action('after_setup_theme', 'bootstrap_idxrabbit_theme_setup');
add_filter('nav_menu_css_class' , 'bootstrap_idxrabbit_special_nav_class' , 10 , 2);
add_filter('query_vars', 'bootstrap_idxrabbit_query_vars_filter');
add_rewrite_rule('^property-details/([^/]+)/?$','index.php?pagename=property-details&listing_id=$matches[1]','top');

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

function bootstrap_idxrabbit_special_nav_class ($classes, $item) 
{
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

function bootstrap_idxrabbit_query_vars_filter($vars)
{
	$vars[] = 'do';
	$vars[] = 'per_page';
	$vars[] = 'skip';
	$vars[] = 'orderby';

	return $vars;
}