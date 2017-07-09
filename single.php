<!-- archivo global header -->
<?php get_header(); ?>
<!-- contenido del post -->
<?php if(have_posts()):the_post(); ?>
	<section>
		<h1><?php the_title(); ?></h1>
		<time datetime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
		<?php the_content(); ?>
		<address>Por <?php the_author_posts_link() ?></address>
	</section>
<?php else: ?>
	<p><?php _e('Ups!, esta entrada no existe.'); ?></p>
<?php endif; ?>
<!-- archivo sidebar -->
<?php get_sidebar(); ?>
<!-- archivo footer -->
<?php get_footer(); ?>