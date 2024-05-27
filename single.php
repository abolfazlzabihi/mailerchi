<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mailerchi
 */

get_header();
?>

<main id="single-blog" class="site-main" style="background-color:white;">
	<div class="container page-top-image">
		<section class="intro-video-area index overlay section p-5 rounded-5" style="
	  background-image: url('<?php echo get_the_post_thumbnail_url() ?>');
	  background-size: cover;
	  background-position:center;
	  position: relative;
	  background-repeat:no-repeat;
	  z-index: 10;
	">

			<div class=" position-relative py-5" style="z-index:1000;">
				<h1 class="text-center title d-flex justify-content-center" style="color:white">
					<?php echo the_title(); ?>

				</h1>
			</div>
	</div>
	<?php
	while (have_posts()):
		the_post();
		?>
		<div class="container  mt-4 ">
			<div class="d-flex flex-column flex-md-row single-meta align-items-md-center py-2 px-3 px-xl-5">
				<div class="d-flex align-items-center  mb-2 mb-md-0">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.jpg" alt=""
						class="admin-avatar">
					<span class="ms-2 admin">
						<?php the_author(); ?>
					</span>
				</div>
				<div class="d-flex align-items-center ms-md-4 mb-2 mb-md-0">
					<i class="bi bi-calendar2 fs-6 me-2" style="color:#478a0d"></i>
					<span class="blog-calendar">
						<?php echo get_the_date(); ?>
					</span>
				</div>
				<div class="d-flex  ms-md-4 align-items-center">
					<i class="bi bi-chat-right fs-6 me-2 pt-2" style="color:gray"></i>
					<?php echo get_comments_number(); ?>
					<span class="ms-2">دیدگاه</span>
				</div>
			</div>
		</div>
		<div class="my-4 container " id="news">
			<div class="row p-3 ps-md-3 py-lg-0">
				<div class="col-12 col-lg-8 single-meta p-4 p-xl-5">




					<?php echo the_content(); ?>



					<ol class="comment-list px-0" id="comments">
						<?php
						//Gather comments for a specific page/post 
						$comments = get_comments(
							array(
								'post_id' => get_the_ID(),
								'status' => 'approve' //Change this to the type of comments to be displayed
							)
						);

						//Display the list of comments
						wp_list_comments(
							array(
								'style' => 'ol',
								'max_depth' => 5,
								'callback' => 'wp_learn_list_comments',
								'per_page' => 10,
								//Allow comment pagination
								'reverse_top_level' => false //Show the oldest comments at the top of the list
							),
							$comments
						);

						?>

					</ol>
					<div class="comments-pagination">
						<div class="previous-comments">
							<?php previous_comments_link('نظرات قدیمی تر'); ?>
						</div>
						<div class="next-comments">
							<?php next_comments_link('نظرات جدیدتر'); ?>
						</div>
					</div>

					<div class="add-comment">
						<?php

						comment_form();

						?>
					</div>

				</div>
				<div class="col-12 col-lg-4 ps-lg-4 px-0 mt-5 mt-lg-0">
					<div class="px-3  py-4 rounded-4 single-meta" id="custom-sidebar">
						<aside id="secondary" class="widget-area">
							<?php dynamic_sidebar('sidebar-2'); ?>

						</aside>
						<!-- #secondary -->
					</div>
				</div>
			</div>
		</div>
		<?php

	endwhile; // End of the loop.
	?>
	<div class="container pt-4 mb-5" id="weblog">
		<div class="row">
			<div class="col-12 col-lg-8">
				<h3 class="mb-4">مطالب مرتبط</h3>
				<?php

				global $post;
				$orig_post = $post;
				$tags = wp_get_post_tags($post->ID);

				if ($tags) {
					$tag_ids = array();
					foreach ($tags as $individual_tag)
						$tag_ids[] = $individual_tag->term_id;
					$args = array(
						'tag__in' => $tag_ids,
						'post__not_in' => array($post->ID),
						'posts_per_page' => 4,
						// Number of related posts to display.
						'caller_get_posts' => 1
					);

					$my_query = new wp_query($args);
					?>
						<div class="wrapper z-index-100 position-relative padding">
							<section class="splide splide-3" aria-labelledby="carousel-heading" id="splide-3">
								<div class="splide__track">
									<ul class="splide__list">

										<?php
										while ($my_query->have_posts()) {
											$my_query->the_post();
											?>
											<li class="splide__slide py-3">
												<div class=" weblog-box p-3 mx-2">
													<a rel="external" href="<? the_permalink() ?>"> <img
															src="<?php echo get_the_post_thumbnail_url() ?>" alt=""
															class="rounded-3">
													</a>
													<a href="<?php the_permalink(); ?>" class="weblog-title my-3">
														<?php the_title(); ?>
													</a>
													<div class="d-flex justify-content-between mt-3">
														<div class="d-flex align-items-center ">
															<i class="bi bi-calendar2 fs-6 me-2" style="color:#478a0d"></i>
															<span class="blog-calendar">
																<?php echo get_the_date(); ?>
															</span>
														</div>
													</div>

												</div>

											</li>
											<?php }
				}
				$post = $orig_post;
				wp_reset_query();
				?>
										</ul>
									</div>
								</section>
							</div>




				
			</div>
		</div>

	</div>

</main><!-- #main -->


<?php
get_footer();