<?php
/**
 * The Template Name:our-services
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mailerchi
 */

get_header();
?>

<main id="primary" class="site-main Site-content" >
    <div id="about-us">
    <div class=" pb-5 d-flex align-items-center ai">
        <div class="container-xxl">

            <div class="row align-items-center">
                <div
                    class="col-12 col-md-6 col-lg-7 col-xl-6 d-flex justify-content-center justify-content-md-start align-items-center  mt-4 pt-lg-5 mt-lg-5 ">
                    <div class=" col-12 d-flex flex-column align-items-center align-items-md-start">

                        <h6 class="title-above  fw-700 ">
                        میلرچی                        </h6>
                        <h1 class="title text-center text-md-start  fw-700 text-white">
                        خدمت ایمیل سرور سازمانی و شرکتی به شکل نصب روی سرور اختصاصی                        </h1>
                        <p class="subtitle text-white" style="text-align:justify;">ما در میلرچی با استفاده از فناوری های به روز و مدرن ایمیل سرور با کیفیت و ایمیل با تضمین ۱۰۰ درصد ارسال به اینباکس را برای شرکت و سازمان شما فراهم میکنیم. </p>
                        <div class="d-flex flex-column flex-md-row mt-md-4 w-100 px-4 px-md-0">
                            <a href="<?php echo site_url('/contact-us') ?>" class="more-1 me-md-2 mb-2 mb-md-0 text-center">مشاوره رایگان</a>
                            <a href="https://mailerchi.ir/wp-content/uploads/2023/10/sepehr-gostar-email-server.pdf" class="more-2  text-center" target="_blank" >دانلود کاتالوگ</a>

                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 col-xl-6 d-flex justify-content-md-end">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iran.png" alt=""
                        class="img-fluid">
                </div>

            </div>

        </div>
    </div>
    <div class="container-xxl my-5 " >
        <!-- <h6 class="title-above text-center text-md-start">

            خدماتی که میلرچی ارائه می دهد

        </h6>
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
            <h2 class="title">
                پوشش کامل نیازهای شما برای راه اندازی وب سایت
            </h2>
            <a href="" class="more">
                امتحان کنید </a>
        </div> -->
        <div class="about-us-box mt-5">
  
        <?php    echo the_content(); ?>
        </div>
    </div>
</div>
</main><!-- #main -->

<?php
get_footer();
?>