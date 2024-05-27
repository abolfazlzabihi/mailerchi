<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mailerchi
 */
get_header();
?>

<main id="primary" class="container-xxl Site-content">

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title mt-4">
صفحه مورد نظر یافت نشد			</h1>
		</header><!-- .page-header -->

		<div class="my-5 container ">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.jpg'" class="img-fluid" alt="">

		</div>
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();