<!-- archivo global head -->
<?php get_header(); ?>
<!-- contenido de la pagina -->
<?php if( have_posts() ): the_post(); ?>
	<section>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</section>
<?php endif; ?>
<!-- archivo sidebar -->
<?php get_sidebar(); ?>
<!-- archivo global footer -->
<?php get_footer(); ?>