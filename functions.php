<?php
/**
 * agregar search al navbar primary solamente
 *//*
function wpgood_nav_search($items, $args) {
    // If this isn't the primary menu, do nothing
    if( !($args->theme_location == 'primary') ) 
    return $items;
    // Otherwise, add search form
    return $items . '<li>' . get_search_form(false) . '</li>';
}
add_filter('wp_nav_menu_items', 'wpgood_nav_search', 10, 2);*/

/**
 * Add search box to nav menu's
 */
function wpgood_nav_search( $items, $args ) {
    $items .= '<li>' . get_search_form( false ) . '</li>';
    return $items;
}
add_filter( 'wp_nav_menu_items','wpgood_nav_search', 10, 2 );

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);
 
/* Deshabilitar wordpress admin bar para todos los usuarios excepto admins *//*
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}
add_action('after_setup_theme', 'remove_admin_bar');*/

/* Bootstrap js */
function bootstrap_scripts() {
	wp_enqueue_script('emb-theme-bootstrapjs', get_template_directory_uri().'/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'bootstrap_scripts');

/* navbar navigation walker */
require_once('wp-bootstrap-navwalker.php');
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
		
/* nav menu global default */
/*
function my_menus() {
	register_nav_menus(
		array(
			'navegation' => __('Menu de navegacion')
		)
	);
}
add_action('init','my_menus');
*/

/* widgets */
// barra principal sidebar
function my_widgets(){
	register_sidebar(
		array(
			'name' => __('Sidebar'),
			'id' => 'sidebar',
			'before_widget' => '<aside class="widget">',
			'after_widget' => '</aside>',
			'before_title' => '<h1>',
			'after_title' => '</h1>'
			)
			);
}
add_action('init','my_widgets');

// Barra secundaria sidebar 2
function registrar_sidebar(){  
  register_sidebar(array(  
   'name' => 'Sidebar de ejemplo',  
   'id' => 'sidebar-ejemplo',  
   'description' => 'Descripción de ejemplo',  
   'class' => 'sidebar',  
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => '</aside>',  
   'before_title' => '</br></br></br></br></br><!-- <h2 class="widget-title">',  
   'after_title' => '</h2> -->',  
  ));  
}  
add_action( 'widgets_init', 'registrar_sidebar');