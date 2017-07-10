<?php
/* nav menu global */
function my_menus() {
	register_nav_menus(
		array(
			'navegation' => __('Menu de navegacion')
		)
	);
}
add_action('init','my_menus');

/*
	widgets
*/
// barra principal sidebar
function my_widgets(){
	register_sidebar(
		array(
			'name' => __('Sidebar'),
			'id' => 'sidebar',
			'before_widget' => '<aside class="widget">',
			'after_widget' => '</aside>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'
			)
			);
}
add_action('init','my_widgets');

// Barra lateral secundaria
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