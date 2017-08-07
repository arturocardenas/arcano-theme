<?php
// Mostrando custom posts en pagina de entradas
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
	function add_my_post_types_to_query( $query ) {
	    if ( is_home() && $query->is_main_query() )
	        $query->set( 'post_type', array( 'post', 'expediente', 'datos-personales' ) );
	    return $query;
	}
	
/* ------------------------------------- /*
 *    	BOOTSTRAP & NAVWALKER    *
 * -------------------------------------- */
function bootstrap_scripts() {
	wp_enqueue_script('emb-theme-bootstrapjs', get_template_directory_uri().'/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'bootstrap_scripts');
// navbar navigation walker
require_once('wp-bootstrap-navwalker.php');
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
    function wpt_setup() {  
        register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
    } 
endif;
	
/* ----------------------- /*
 *    WIDGET'S AREA    *
 * ------------------------ */
// barra lateral principal
function my_widgets(){
	register_sidebar(
		array(
			'name' => __('Sidebar'),
			'id' => 'sidebar',
			'before_widget' => '<aside class="widget">',
			'after_widget' => '</aside>',
			'before_title' => '<!--<h1>',
			'after_title' => '</h1>-->'
			)
			);
}
add_action('init','my_widgets');

// Barra secundaria 2
function registrar_sidebar(){  
  register_sidebar(array(  
   'name' => 'Widget Buscador',  
   'id' => 'sidebar-ejemplo',  
   'description' => 'Widget dirigido a insertar un buscador.',  
   'class' => 'sidebar',  
   'before_widget' => '<div id="%1$s" class="col col-sm-4 widget %2$s">',
   'after_widget' => '</div>',  
   'before_title' => '<!-- <h2 class="widget-title">',  
   'after_title' => '</h2> -->',  
  ));  
}  
add_action( 'widgets_init', 'registrar_sidebar');
?>