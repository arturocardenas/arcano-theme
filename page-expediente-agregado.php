<?php
/**
 * Theme: Arcano Theme
 *
 * Template Name: Page - Expediente Agregado
 *
 * Page with no sidebar, but still contained within the page margins
 *
 * This is the template that displays full width pages with no sidebar.
 *
 * @package arcano-theme
 */

get_header();

//Guardando variables de formulario
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$telefono = $_POST['intTelefono'];
$email = $_POST['txtEmail'];
$referencia = $_POST['txtReferencia'];

//Insertar valores en la base de datos
$sql = "INSERT INTO tbldatospersonales (strNombre,strApellidos,intTelefono,strCorreo,strReferencia) VALUES ('".$nombre."','".$apellido."',".$telefono.",'".$email."','".$referencia."');";

//enviando consulta
$wpdb->query($sql);
?>

<?php get_template_part( 'content', 'header' ); ?>

<?php get_sidebar( 'home' ); ?>

<div class="container">
<div id="main-grid" class="row">

	<div id="primary" class="content-area-wide col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
				?>
				<div class="comments-wrap">
				<?php comments_template(); ?>
				</div><!-- .comments-wrap" -->
				<?php endif; ?>

			<?php endwhile; // end of the loop. ?>




		</br></br>
			<hr /><hr />
			</br></br>
			<h5>El nuevo expediente para el/la paciente <strong><?php echo $nombre.' '.$apellido; ?></strong> fue registrado correctamente.</h5>
		</br>
			<h5><a href="<?php echo get_home_url(); ?>/?page_id=53">Ver Expediente</a> | <a href="<?php echo get_home_url(); ?>/wp-admin/post-new.php?post_type=ai1ec_event">Agendar Cita</a> | <a href="<?php echo get_home_url(); ?>/?page_id=89">Registrar Otro</a></h5>
			</br></br>
			<hr /><hr />
			</br></br>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php //get_sidebar(); ?>

</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
