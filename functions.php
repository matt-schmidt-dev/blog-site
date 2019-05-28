<?php

// STOP WORDPRESS REMOVING TAGS
function tags_tinymce_fix( $init )
{
  // html elements being stripped
  $init['extended_valid_elements'] = 'div[*],article[*]';
  // don't remove line breaks
  $init['remove_linebreaks'] = false;
  // convert newline characters to BR
  $init['convert_newlines_to_brs'] = true;
  // don't remove redundant BR
  $init['remove_redundant_brs'] = false;
  // pass back to wordpress
  return $init;
}
add_filter('tiny_mce_before_init', 'tags_tinymce_fix');



function additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'greensluggstyles', get_template_directory_uri() . '/style.css' ); 
}
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );


function additional_custom_scripts() {
	wp_enqueue_script( 'coolstuff', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '6.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'additional_custom_scripts' );


add_theme_support('menus');

function ab2w_register_theme_menus () {

	register_nav_menus(

	array(

		'top-menu' => __('Top Menu', 'theme'),
		'footer-menu' => __('Footer Menu', 'theme'),
)
);
	
}

add_action('init', 'ab2w_register_theme_menus');
	
	
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1920, 1080, true ); // default Image dimensions (cropped)

add_image_size( 'xlarge-thumbnail-size', 700, 0, true );
add_image_size( 'large-thumbnail-size', 600, 0, true );
add_image_size( 'large-medium-thumbnail-size', 450, 0, true );
add_image_size( 'medium-large-thumbnail-size', 300, 0, true );
add_image_size( 'medium-thumbnail-size', 175, 0, true );
add_image_size( 'small-thumbnail-size', 100, 0, true );


add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
	
}

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'primary-sidebar',
    'before_widget' => '<div class = "primary-sidebar-widget-area">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class = "sidebar-widget-title">',
    'after_title' => '</h3>',
  )
);


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'primary-sidebar-two',
    'before_widget' => '<div class = "primary-sidebar-widget-area-two">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class = "sidebar-widget-title">',
    'after_title' => '</h3>',
  )
);


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'pages-widget-area',
    'before_widget' => '<div class = "pages-widget-area">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class = "pages-widget-title">',
    'after_title' => '</h3>',
  )
);



if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'front-page-widget-area-one',
    'before_widget' => '<div class = "front-page-widget-area-one">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class = "front-page-widget-one-title">',
    'after_title' => '</h3>',
  )
);



?>
