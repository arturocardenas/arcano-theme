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