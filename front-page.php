<!-- archivo global head -->
<?php get_header(); ?>
<div class="container">
<!-- contenido de la pagina -->
<?php if( have_posts() ): the_post(); ?>
	<section class="container">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</section>
<?php endif; ?>
<!-- archivo sidebar -->
<?php get_sidebar(); ?>
</div>
<!-- archivo global footer -->
<?php get_footer(); ?>