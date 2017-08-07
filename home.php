<!-- archivo global header -->
<?php get_header(); ?>
<div id="my-content">
	<div class="row">
	<!-- archivo sidebar -->
		<?php get_sidebar('2'); ?>
	</div>
	<!-- desplegando posts -->
	<?php if(have_posts()): ?>
			<table>
			<thead>
				<tr>
					<th>Titulo</th>
					<th>Tipo</th>
					<th>Fecha</th>
				</tr>
			</thead>
			<tbody>
				<?php while(have_posts()):the_post(); ?>
				<tr>
					<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
					<td><?php echo get_post_type(); ?></td>
					<td datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></td>
				</tr>
				<?php endwhile; ?>
			</tbody>
			<tfoot>
				<tr>
					<th>Titulo</th>
					<th>Tipo</th>
					<th>Fecha</th>
				</tr>
			</tfoot>
			</table>
			<div class="pagination">
				<span class="in-left"><?php next_posts_link('<< Anteriores'); ?></span>
				<span class="in-right"><?php previous_posts_link('Recientes >>'); ?></span>
			</div>
	<?php else: ?>
		<p><?php _e('Ups!, no hay entradas.'); ?></p>
	<?php endif; ?>
</div>
<!-- archivo global footer -->
<?php get_footer(); ?>