<?php
/**
 * Theme: Arcano Theme
 *
 * Template Name: Page - Nuevo Expediente
 *
 * Page with no sidebar, but still contained within the page margins
 *
 * This is the template that displays full width pages with no sidebar.
 *
 * @package arcano-theme
 */
// archivo global head 
get_header();
/*
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
*/
?>
<!-- contenido de la pagina -->
<div id="my-content">
<?php if( have_posts() ): the_post(); ?>
	<section>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
			<hr />
			<form method="post" enctype="multipart/form-data" action="<?php echo get_home_url(); ?>/expediente-agregado">

			<label>Paciente</label></br>
			<input type="text" name="txtNombre" id="txtNombre" placeholder="nombre" />
			<input type="text" name="txtApellido" id="txtApellido" placeholder="apellidos" />
			</br>
			<label>Telefono</label></br>
			<input type="text" name="intTelefono" id="intTelefono" placeholder="646-145-78-92" />
			</br>
			<label>Email</label></br>
			<input type="text" name="txtEmail" id="txtEmail" placeholder="ejemplo@correo.com" />
			</br>
			<label>Referencia</label></br>
			<input type="text" name="txtReferencia" id="txtReferencia" placeholder="quien nos recomendo?" />
			</br></br>
			<input type="submit" value="Agregar" />
			</form>
			</br></br>
		
	</section>
<?php endif; ?>
<!-- archivo sidebar -->
<?php get_sidebar(); ?>
</div>
<!-- archivo global footer -->
<?php get_footer(); ?>