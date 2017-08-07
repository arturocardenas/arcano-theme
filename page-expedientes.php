<?php
/**
 * Theme: Arcano Theme
 *
 * Template Name: Page - Expedientes
 *
 * Page with no sidebar, but still contained within the page margins
 *
 * This is the template that displays full width pages with no sidebar.
 *
 * @package arcano-theme
 */
// archivo global head 
get_header();
?>
<div id="my-content">
	<?php
	$temp = $wp_query;
	$wp_query = null;
	$wp_query = new WP_Query();
	$wp_query->query('post_type=expediente');
	if ( $wp_query->have_posts()) : 
		while ($wp_query->have_posts()) : $wp_query->the_post();
	?>
		<div class="row">
			 <h2><?php the_title(); ?></h2>
		 </div>
	<?php
	endwhile;
	wp_reset_postdata();
	else : ?>
		<!-- show 404 error here -->
		<p>No se han encontrado archivos.</p>
	<?php
	endif;
	?>
</div>
<!-- archivo global footer -->
<?php get_footer(); ?>