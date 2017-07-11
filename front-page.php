<!-- archivo global head -->
<?php get_header(); ?>
<div class="container">
<!-- contenido de la pagina -->
<?php if( have_posts() ): the_post(); ?>
	<section>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</section>
<?php endif; ?>
<!-- archivo sidebar -->
<section>
<?php get_sidebar(); ?>
</section>
</div>
<!-- archivo global footer -->
<?php get_footer(); ?>