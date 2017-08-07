<?php
/*
	Template Name: Archive Expediente
*/
?>
<!-- archivo global header -->
<?php get_header(); ?>
<div id="my-content">
<section>
<?php
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('post_type=expediente');
if ( $wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
the_title();
the_content();
endwhile;
endif;
?>
</section>
<!-- archivo sidebar -->
<?php get_sidebar(); ?>
</div>
<!-- archivo global footer -->
<?php get_footer(); ?>