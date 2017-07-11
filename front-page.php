<!-- archivo global head -->
<?php get_header(); ?>
	<!-- contenido de la pagina -->
	<div class="container">
		<?php if( have_posts() ): the_post(); ?>
			<section>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</section>
		<?php endif; ?>
		<!-- archivo sidebar -->
		<?php get_sidebar(); ?>
	</div>
<!-- archivo global footer -->
<?php get_footer(); ?>