<?php
/**
 * The template for displaying category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mailerchi
 */

get_header();
?>

<main id="primary" class="site-main" style="background-color:white;">
	<header class="page-header container">
		<?php
		the_archive_title('<h1 class="page-title h3">', '</h1>');
		the_archive_description('<div class="archive-description">', '</div>');
		?>
	</header><!-- .page-header -->
	<div class="my-5 container " id="single-blog">

		<div class="row mt-4">

			<div class="col-12 col-lg-8">
				<div class="row ps-lg-3">
					<?php
					if (have_posts()) {
						while (have_posts()) {
							the_post();

							get_template_part('template-parts/box');

						}
					} else {
						get_template_part('template-parts/content', 'none');

					}
					?>
				</div>
				<?php
				if (paginate_links() !== null) {
					?>
					<div class="row ps-lg-3">
						<div class="col-12 d-flex justify-content-start mb-4 single-meta w-100 p-3" id="blog-pagination">
							<div class="d-flex" style="overflow:hidden;">
								<?php
								$args = array(
									'show_all' => false,
									'prev_text' => __('&laquo;'),
									'next_text' => __('&raquo;'),
									'end_size' => 1,
									'mid_size' => 1,
								);
								echo paginate_links($args);
								?>
							</div>
						</div>
					</div>
					<?php

				} else {
					echo '';
				}
				?>

			</div>
			<div class="col-12 col-lg-4  mt-5 mt-lg-0">
				<div class="px-3  py-4 rounded-4 single-meta" id="custom-sidebar">
					<aside id="secondary" class="widget-area">
						<?php dynamic_sidebar('sidebar-2'); ?>

					</aside>
					<!-- #secondary -->
				</div>
			</div>

		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();