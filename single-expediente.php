<?php
/*
	Template Name: Single Expediente
*/
get_header(); 
?>
<h1>POST</h1>
<div id="my-content">
<!-- contenido del post -->
<?php if(have_posts()):the_post(); ?>
	<section>
		<h1><?php the_title(); ?></h1>
		<time datetime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
		<?php the_content(); ?>
		<?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
		<address>Por <?php the_author_posts_link() ?></address>
		<?php the_category(); ?>
		<?php $key_1_value = get_post_meta( get_the_ID(), 'expediente_telefono', true );
			// Check if the custom field has a value.
			if ( ! empty( $key_1_value ) ) {
				echo $key_1_value;
			}
		?>
	</section>
<?php else: ?>
	<p><?php _e('Ups!, esta entrada no existe.'); ?></p>
<?php endif; ?>
<!-- archivo sidebar -->
<?php get_sidebar(); ?>
</div>
<!-- archivo footer -->
<?php get_footer(); ?>