<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mailerchi
 */

?>

<div id="contact-us">
	<div class="container-xxl">
		<div class="row">

			<div
				class="block-right col-12 col-md-6  d-flex justify-content-center justify-content-md-start align-items-center px-xl-5 ">
				<div class=" d-flex flex-column align-items-center align-items-md-start p-5 mx-xl-5">

					<h6 class="title-above  fw-700 "> دریافت مشاوره </h6>
					<h2 class="title  fw-700 text-white" style="text-align:justify;">
						در کنار شما هستیم تا ایمیل سرور با کیفیتی برای شما فراهم کنیم </h2>
					<p class="subtitle text-white" style="text-align:justify;">
						نصب، پشتیبانی ایمیل سرور با IP خصوصی در محل فیزیکی یا دیتاسنتر مورد نظر شما
					</p>
					<!-- <div class="d-flex flex-column flex-md-row mt-md-4 w-100 px-4 px-md-0">
						<a href="" class="more-1 me-md-2 mb-2 mb-md-0 text-center">قرار ملاقات</a>
						<a href="<?php echo site_url() ?>/contact-us" class="more-2  text-center">تماس با ما</a>

					</div> -->

				</div>
			</div>
			<div class=" block-left col-12 col-md-6  d-flex justify-content-center py-5">
				<?php echo do_shortcode('[contact-form-7 id="5b3668a" title="فرم تماس 1"]') ?>
			</div>
		</div>
	</div>
</div>
<footer class=" py-5 position-relative" id="footer">

	<div class="section1">
		<div class="container-xxl position-relative">

			<div class="row">
				<div class="col-12 col-md-8 d-flex align-items-center justify-content-center justify-content-md-start">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu-1',
							'menu_class' => 'ps-0 d-flex footer-1 m-0 align-items-center',
							'container_class' => '',
						)
					);
					?>
				</div>
				<div class="col-12 col-md-4 d-flex align-items-center justify-content-center justify-content-md-end">
					<!-- <a href="#" class="footer-icon">
						<i class="bi bi-telegram fs-5 me-3"></i> </a> -->
					<div class="d-none d-md-flex align-items-center">
						<div class=" d-flex position-relative">
							<span class="footer-icon  me-2 position-relative">
								<i class="bi bi-telephone-inbound fs-2 "></i>
							</span>
							<div class="d-flex flex-column ms-2">
								<p class="footer-contact-text mb-1">تماس با ما</p>
								<a class="footer-contact-number mb-0" href="tel:+982191017768 ">
									02191017768
								</a>
							</div>
						</div>


					</div>
				</div>
				<div class="footer-line my-4" style="width:100%; height:1px;"></div>

				<div class="col-12 col-md-8">

					<p class="d-none d-md-block footer-subtitle mb-0 text-center text-md-start d-flex">
						<span class=" footer-link me-2">طراحی سایت توسط</span><a
							href="http://webine.ir" target="_blank" class=" footer-link">وبینه</a></p>
				</div>
				<div
					class="col-12 col-md-4 d-flex align-items-center justify-content-center justify-content-md-end mt-3 mt-md-0">
					<a href="<?php echo site_url() ?>/our-services" class="footer-more me-3">
						خدمات ما
					</a>
					<a href="<?php echo site_url() ?>/contact-us" class="footer-more">
						تماس با 
					</a>

				</div>
			</div>
			<div class="text-center mt-4" style="font-size:14px;color:#677486;">
				کلیه حقوق این سایت برای شرکت سپهر گستر فرتاک پارس محفوظ می باشد </div>
				<p class=" d-md-none footer-subtitle mb-0 text-center ">
						<span class=" footer-link me-2">طراحی سایت توسط</span><a
							href="http://webine.ir" target="_blank" class=" footer-link">وبینه</a></p>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</div>
</body>

</html>