<?php 

/* Container */

if (!isset($content_width)) $content_width = 538;

/* base function */


function programmez_theme_support(){
	add_theme_support('custom-logo'); // Logo Custom
	add_theme_support('custom-background'); // Fond d'écran
	add_theme_support('editor-color-palette'); // Palette Header + background
	add_theme_support('post-thumbnails'); // Miniatures
	add_theme_support('title-tag'); // Titre du site
	add_theme_support('automatic-feed-links'); // RSS

	/* Liste entière des fonctions existantes */
	/*
	add_theme_support('admin-bar');
	add_theme_support('align-wide');
	
	add_theme_support('core-block-patterns');
	add_theme_support('custom-line-height');
	add_theme_support('customize-selective-refresh-widgets');
	add_theme_support('custom-header');
	add_theme_support('custom-spacing');
	add_theme_support('custom-units');
	add_theme_support('dark-editor-style');
	add_theme_support('disable-custom-colors');
	add_theme_support('disable-custom-font-sizes');
	add_theme_support('editor-gradient-presets');
	add_theme_support('editor-font-sizes');
	add_theme_support('editor-styles');
	add_theme_support('featured-content');
	add_theme_support('html5');
	add_theme_support('menus');
	add_theme_support('post-formats');
	add_theme_support('responsive-embeds');
	add_theme_support('starter-content');
	add_theme_support('wp-block-styles');
	add_theme_support('widgets');*/
}

add_action('after_setup_theme','programmez_theme_support');


/* Styles */

function programmez_register_styles(){
	wp_enqueue_style('programmez-fontawesome', get_template_directory_uri() . "/assets/css/all.min.css" , '5.13', 'all');
}

add_action('wp_enqueue_scripts', 'programmez_register_styles');


/* Menus */

function programmez_menus(){
	$location = array(
		'primary' => "Desktop primary left sidebar",
		'footer' => "footer Menu Items"
	);
	register_nav_menus( $location );
}

add_action('init','programmez_menus');




/* Widgets */


function programmez_widget_area(){

	register_sidebar(
		array(
			'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
			'after_widget' => '</ul>',
			'name' => 'Sidebar 1',
			'id' => 'sidebar-1',
			'description'   => 'Add widgets here to appear in your region.',
		)
	);

	register_sidebar(
		array(
			'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
			'after_widget' => '</ul>',
			'name' => 'Footer Area',
			'id' => 'footerbar-1',
			'description'   => 'Add widgets here to appear in your region.',
		)
	);
}

add_action('widgets_init', 'programmez_widget_area');

?>