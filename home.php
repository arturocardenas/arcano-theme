<!-- archivo global header -->
<?php get_header(); ?>
<div id="my-content">
<!-- desplegando posts -->
<?php if(have_posts()): ?>
	<section>
		<h1>Ultimos Movimientos</h1>
		<?php while(have_posts()):the_post(); ?>
			<article>
				<div>
					<header>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<ol class="breadcrumb">
							<li datatime="<?php the_time('Y-m-j'); ?>">
								<?php the_time('j F, Y'); ?>
							</li>
							<li>Por <?php the_author_posts_link(); ?></li>
						</ol>
						<!--
						<time datatime="<?php //the_time('Y-m-j'); ?>"><?php //the_time('j F, Y'); ?></time>
						<address>Por <?php //the_author_posts_link(); ?></address>
						-->
					</header>
					<p><?php the_excerpt(); ?></p>
					<footer>
						<?php the_category(); ?>
						<?php //the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
					</footer>
				</div>
			</article>
		<?php endwhile; ?>
		<div class="pagination">
			<span class="in-left"><?php next_posts_link('<< Entradas antiguas'); ?></span>
			<span class="in-right"><?php previous_posts_link('Entradas mas recientes >>'); ?></span>
		</div>
	</section>
<?php else: ?>
	<p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>
<!-- archivo sidebar -->
<?php get_sidebar(); ?>
</div>
<!-- archivo global footer -->
<?php get_footer(); ?>