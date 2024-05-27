<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mailerchi
 */

get_header();
?>
<div class="d-flex d-lg-none align-items-center" style="position:fixed;bottom:20px; left:20px;z-index: 10000;">
						<div class=" d-flex align-items-center justify-content-center degital-intro"style="width: 55px;height: 55px;border-radius: 50%;background-color: #dd9405;">
							<a class="footer-icon mb-0" href="tel:+982191017768 "style="z-index: 1000000;">
								<i class="bi bi-telephone-inbound fs-1 text-white" style="width: 29px;height: 29px;display: inline-block;"></i>
							</a>
						</div>


					</div>
<main id="primary" class="site-main Site-content">
    <div class=" pb-5 d-flex align-items-center  py-xxl-5" id="hero">
        <div class="container-xxl py-xxl-5">

            <div class="row">
                <div
                    class="col-12 d-flex justify-content-center justify-content-md-start align-items-center  mt-4 pt-lg-5 mt-lg-5 mt-xxl-0 pt-xxl-0">
                    <div class="col-12 col-md-5 col-lg-6 d-flex flex-column align-items-center align-items-md-start">

                        <h6 class="title-above  fw-700 ">میلرچی</h6>
                        <h1 class="title text-center text-md-start  fw-700 text-white">
                        میلرچی، راهکار تخصصی ایمیل سرور اختصاصی شرکتی                        </h1>
                        <p class="subtitle text-white" style="text-align:justify;">
                        تیم متخصص و با تجربه میلرچی همه نیازهای شما از یک ایمیل سرور شرکتی یا سازمانی را به شکل نصب در محل شرکت یا سرور مجازی با شرط حداکثر کیفیت ارسال و دریافت ایمیل شرکتی به همه سرویس های ایمیلی مانند Gmail, Yahoo و .. فراهم میکند.
                        </p>
                        <div class="d-flex flex-column flex-md-row mt-md-4 w-100 px-4 px-md-0">
                            <a href="https://mailerchi.ir/wp-content/uploads/2023/10/sepehr-gostar-email-server.pdf" class="more-1 me-md-2 mb-2 mb-md-0 text-center" target="_blank">دانلود کاتالوگ</a>
                            <a href="<?php echo site_url('/contact-us') ?>" class="more-2  text-center">تماس با ما</a>

                        </div>

                    </div>
                </div>


            </div>

        </div>
    </div>
    <div class="container-xxl my-5" id="projeh">
        <h6 class="title-above text-center text-md-start">

        مزیت ها و ارزش ها
        </h6>
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
            <h2 class="title">
            ویژگی های برتری که میلرچی به شما میدهد
            </h2>
            <a href="<?php echo site_url('/our-services') ?>" class="more">
                بیشتر بدانید
            </a>
        </div>
        <div class="row g-3 my-5">
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.jpg"  class="" alt="" style="width: 30px;height: 30px;">
                  <div class="d-flex flex-column ms-3">
                        <span class="box-title">ارسال ایمیل های رسمی</span>
                        <span class="box-subtitle">دریافت متن و تصویر</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/harddrive.jpg"  class="" alt="" style="width: 40px;height: 40px;">
                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">ظرفیت ایمیل های نامحدود</span>
                        <span class="box-subtitle">با افزایش فضای هارد دیسک سرور</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">    
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/antivirus.jpg"  class="" alt="" style="width: 40px;height:40px;">

                    <div class="d-flex flex-column ms-3">

                    
                        <span class="box-title">دارای آنتی ویروس ClamAv</span>
                        <span class="box-subtitle">اسکن فایل های پیوستی به ایمیل</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/outlook.jpg"  class="" alt="" style="width: 35px;height: 35px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">مدیریت ایمیل ها با  Outlook</span>
                        <span class="box-subtitle">امکان دسترسی با موبایل و دسکتاپ </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                    <div>
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ssl.jpg"  class="" alt="" style="width: 40px;height: 40px;">
   
                    </div>

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">ارسال ایمیل از پورت های SSL</span>
                        <span class="box-subtitle">نصب بودن SSL در پورت های ارسال و دریافت</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/firewall.jpg"  class="" alt="" style="width: 40px;height: 35px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">دارای فایروال نرم افزاری Fail2Ban </span>
                        <span class="box-subtitle">مسدود سازی IP با تلاش های ناموفق</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/firewall-1.jpg"  class="" alt="" style="width: 40px;height: 35px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">امکان استفاده از فایروال سخت افزاری</span>
                        <span class="box-subtitle">بدون محدودیت در پیکربندی شبکه WAF</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pannel.jpg"  class="" alt="" style="width: 40px;height: 40px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">
عدم وابستگی به کنترل پنل</span>
                        <span class="box-subtitle">مانند DirectAdmin , Capnel</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/database.jpg"  class="" alt="" style="width: 35px;height: 35px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">بدون دیتابیس</span>
                        <span class="box-subtitle">بدون دیتابیس ایمیل ها مدیریت میشوند</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui.jpg"  class="" alt="" style="width: 35px;height: 40px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">عدم وابستگی به رابط کاربری وب</span>
                        <span class="box-subtitle">حفظ امنیت در دسترسی به ایمیلها</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/open-source.jpg"  class="" alt="" style="width: 50px;height: 45px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">سرویس کاملا متن باز</span>
                        <span class="box-subtitle">مبتنی بر لینوکس و داکر</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/update.jpg"  class="" alt="" style="width: 40px;height: 40px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">امکان به روزرسانی خودکار</span>
                        <span class="box-subtitle">به روزرسانی خودکار و دریافت آپدیت ها</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ip.jpg"  class="" alt="" style="width: 45px;height: 45px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">قابلیت تغییر IP </span>
                        <span class="box-subtitle">به سادگی IP سرور قابل تغییر است</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/switch-host.jpg"  class="" alt="" style="width: 35px;height: 40px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">قابل اجرا در ماشین مجازی</span>
                        <span class="box-subtitle">نصب در سرور واقعی و VPS</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/file-transfer.jpg"  class="" alt="" style="width: 35px;height: 40px;">
                
                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">ماگریشن و انتقال داده</span>
                        <span class="box-subtitle">امکان انتقال ایمیل ها به سرور جدید </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/open-source-1.jpg"  class="" alt="" style="width: 40px;height: 40px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">ضد تحریم </span>
                        <span class="box-subtitle">نرم افزار متن باز قابل تحریم نیست</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/license.jpg"  class="" alt="" style="width: 40px;height: 40px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">بدون نیاز به لایسنس </span>
                        <span class="box-subtitle">نیازی به خرید و تمدید لایسنس ندارد</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speed.jpg"  class="" alt="" style="width: 40px;height: 40px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">بهینه و سبک</span>
                        <span class="box-subtitle">حداقل وابستگی به منابع سخت افزاری</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/domain.jpg"  class="" alt="" style="width: 40px;height: 40px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">قابل نصب روی دامنه</span>
                        <span class="box-subtitle">روی دامنه شرکتی و سازمانی نصب میشود </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div   class="box d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/support.jpg"  class="" alt="" style="width: 50px;height: 50px;">

                    <div class="d-flex flex-column ms-3">
                        <span class="box-title">امکان پشتیبانی از چند دامنه</span>
                        <span class="box-subtitle">دامنه های متفاوت در یک سرور ایمیل</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-xxl my-5">
        <!-- <video class="w-100"
            poster="<?php echo get_template_directory_uri(); ?>/assets/images/blogvideo.png" controls>
            <source src="" type="video/mp4">
            <source src="" type="video/ogg"> 
           
            Your browser does not support the video tag.
        </video> -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/middle-banner.jpg" class="img-fluid" alt="">
    </div>
    <div class="container-xxl my-5" id="projeh-1">
        <h6 class="title-above text-center text-md-start">
        مشتریان ما        </h6>
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
            <h2 class="title text-center text-md-start">شرکت ها و سازمان هایی که به ما اعتماد کرده اند</h2>
         
        </div>
        <div class="row g-4 my-5">
            <div class="col-12 col-md-6 col-lg-3">
                <div  class="box d-flex align-items-center">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/saraf.jpg" alt="" class=""
                        style="width: 40px;
  height: 40px;">  
                    <div class="d-flex flex-column ms-3 w-100">
                        <span class="box-title">صرافخانه </span>
                        <span class="box-subtitle text-end">www.sarrafkhaneh.com</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div  class="box d-flex align-items-center">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/farhang.jpg" alt="" class=""
                        style="width: 40px;
  height: 40px;">  
                    <div class="d-flex flex-column ms-3 w-100">
                        <span class="box-title">گسترش فرهنگ و مطالعات</span>
                        <span class="box-subtitle text-end">www.gbook.ir</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div  class="box d-flex align-items-center">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sepehr1.png" alt="" class=""
                        style="width: 40px;
  height: 40px;">  
                    <div class="d-flex flex-column ms-3 w-100">
                        <span class="box-title">شرکت سپهر گستر</span>
                        <span class="box-subtitle text-end">www.sepehrgostar.com</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div  class="box d-flex align-items-center">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vata.jpg" alt="" class=""
                        style="width: 50px;
  ">  
                    <div class="d-flex flex-column ms-3 w-100">
                        <span class="box-title">شرکت واتا</span>
                        <span class="box-subtitle text-end">www.vata.ir</span>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <div style="background-color: #00BABA;background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/ai-banner-both.svg');
  background-position: center center;
  background-repeat: no-repeat;">
        <div class="container" id="customer" style="padding: 130px 25px 130px 25px;">
            <h2 class="title text-center mb-4">آنچه مشتریان ما می گویند</h2>
            <div class="position-relative">
                <div class="d-none button d-lg-flex justify-content-between my-4">
                    <span class="prev me-2" id="slider-btn-prev"><i class="bi bi-chevron-right fs-4 pt-1 text-light"
                            style="cursor: pointer;"></i></span>
                    <span class="next" id="slider-btn-next"><i class="bi bi-chevron-left fs-4 pt-1 text-light"
                            style="cursor: pointer;"></i></span>
                </div>
                <div class="wrapper z-index-100 position-relative padding">
                    <section class="splide splide-2" aria-labelledby="carousel-heading" id="splide-2">
                        <div class="splide__track">
                            <ul class="splide__list">

                                <li class="splide__slide py-3 px-xl-5">
                                    <div class="item mx-xl-5 d-flex flex-column">
                                        <div class="d-flex flex-column flex-md-row align-items-center" style="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-1.jpg"
                                                alt="" class="rounded-5">
                                            <p class="mb-0 mx-md-4">با استفاده از سرویس ایمیل میلرچی مشکلات ارسال ایمیل های کاری و رسمی ما به بانک مرکزی برطرف شد و همچنین محدودیتی در ارسال و دریافت ایمیل ها نداریم و سرور به طور کامل در اختیار خودمان است. با تشکر </p>
                                        </div>
                                     
                                        <div class="d-flex align-items-center justify-content-between">
                                            
                                            <!-- <div class="dash"></div> -->
                                            <span class="name">آقای ملکی از مجموعه صرافخانه</span>
                                            <i class="bi bi-chat-quote-fill fs-1"></i>
                                        </div>
                                    </div>

                                </li>
                                <li class="splide__slide py-3 px-xl-5">
                                    <div class="item mx-xl-5 d-flex flex-column">
                                        <div class="d-flex flex-column flex-md-row align-items-center" style="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-1.jpg"
                                                alt="" class="rounded-5">
                                            <p class="mb-0 mx-md-4">ما به عنوان یک استارتاپ نیاز به ارسال ایمیل های تراکنشی زیادی داشتیم و بر بررسی های زیادی را برای انتخاب یک ایمیل سرور پایدار و مقرون به صرفه داشتیم تا اینکه به میلرچی رسیدیم با انتخاب میلرچی توانستیم صرفا با یکبار پرداخت به صورت نامحدود و با کیفیت ایمیل های تراکنشی بسیار زیادی را ارسال کنیم و مشکل ایمیل های ما کاملا حل شد.</p>
                                        </div>
                                     
                                        <div class="d-flex align-items-center justify-content-between">
                                            
                                            <!-- <div class="dash"></div> -->
                                            <span class="name">آقای وحید باقری از مجموعه سپهر گستر</span>
                                            <i class="bi bi-chat-quote-fill fs-1"></i>
                                        </div>
                                    </div>

                                </li>
                                <li class="splide__slide py-3 px-xl-5">
                                    <div class="item mx-xl-5 d-flex flex-column">
                                        <div class="d-flex flex-column flex-md-row align-items-center" style="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-1.jpg"
                                                alt="" class="rounded-5">
                                            <p class="mb-0 mx-md-4">بعد از بررسی فراوان و صحبت با گروهای نرم افزاری به این نتیجه رسیدیم سرویس ایمیل را به صورت درون سازمانی راه اندازی کنیم و در نتیجه تصمیم گرفتیم از راهکار میلرچی استفاده کنیم و خوشبختانه نتیجه رضایت بخشی برای ما هم از لحاظ پشتیبانی و هم از لحاظ مدت زمان اجرای پروژه بوده بعد از اجرای این سرویس و از انتخابمون راضی هستیم</p>
                                        </div>
                                     
                                        <div class="d-flex align-items-center justify-content-between">
                                            
                                            <!-- <div class="dash"></div> -->
                                            <span class="name">  آقای آدینه از گسترش فرهنگ و مطالعات</span>
                                            <i class="bi bi-chat-quote-fill fs-1"></i>
                                        </div>
                                    </div>

                                </li>
                            

                            </ul>
                        </div>
                    </section>
                </div>


            </div>
        </div>
    </div>
    <div class=" pb-5 d-flex align-items-center mt-5" id="ai">
        <div class="container-xxl">

            <div class="row align-items-center">
                <div
                    class="col-12 col-md-6 col-lg-7 col-xl-6 d-flex justify-content-center justify-content-md-start align-items-center  mt-4 pt-lg-5 mt-lg-5 mt-xxl-0 pt-xxl-0">
                    <div class=" col-12 d-flex flex-column align-items-center align-items-md-start">

                        <h6 class="title-above  fw-700 ">چرا ایمیل سرور شرکتی</h6>
                        <h2 class="title text-center text-md-start  fw-700 text-white"> ایمیل سرور اختصاصی روی یک IP ثابت که صرفا متعلق به شماست</h2>
                        <p class="subtitle text-white" style="text-align:justify;">به کار گیری سرویس های متن باز و بسیار بهینه و امن این شرایط را فراهم میکنند که ایمیل سرور شما به خوبی کارش را انجام دهد و هیچ مشکلی از بابت ارسال به اسپم و خطرات امنیتی و استفاده اشتراکی ندارد.</p>
                        <div class="d-flex flex-column flex-md-row mt-md-4 w-100 px-4 px-md-0">
                            <!-- <a href="" class="more-1 me-md-2 mb-2 mb-md-0 text-center">امتحان کنید</a> -->
                            <a href="" class="more-2  text-center">بیشتر بدانید....</a>

                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 col-xl-6 d-flex justify-content-md-end">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/infrastructure-and-public-works-illustration-image_0-1.png"
                        alt="" class="img-fluid">
                </div>

            </div>

        </div>
    </div>
    <div class=" pb-5 d-flex align-items-center mt-5" id="association">
        <div class="container rounded-5 p-5" style="background-color: #00BABA;
  background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/association.svg');
  background-position: bottom left;
  background-repeat: no-repeat;
  background-size: auto;">

            <div class="row">
                <div class="col-12  d-flex justify-content-center  align-items-center">
                    <div class="col-12 col-md-10 d-flex flex-column align-items-center ">

                        <h2 class="title text-center w-100  fw-700 text-white">ایمیل سرور راهکار ایمیل و رسمی در مکاتبات اداری</h2>
                        <p class="subtitle text-white" style="text-align:center;">
                        استفاده از ایمیل های تجاری و رسمی که روی دامنه سازمان یا شرکت شما که دارای اعتماد و اینماد است میتواند یک ارتباط کاملا رسمی و اداری باشد که با بکار گیری سرور ایمیل خصوصی می توان استفاده بدون محدودیت و با کیفیتی را ایجاد کرد.  </p>

                    </div>
                </div>
           

            </div>
            <!-- <div class="row">
                <div class="col-12 col-md-8 col-xl-9 d-flex justify-content-center justify-content-md-start align-items-center">
                    <div class="col-12 col-md-10 col-xl-8 d-flex flex-column align-items-center align-items-md-start">

                        <h1 class="title text-center text-md-start  fw-700 text-white">ایمیل سرور راهکار ایمیل و رسمی در مکاتبات اداری</h1>
                        <p class="subtitle text-white" style="text-align:justify;">
                        استفاده از ایمیل های تجاری و رسمی که روی دامنه سازمان یا شرکت شما که دارای اعتماد و اینماد است میتواند یک ارتباط کاملا رسمی و اداری باشد که با بکار گیری سرور ایمیل خصوصی می توان استفاده بدون محدودیت و با کیفیتی را ایجاد کرد.  </p>

                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-3 d-flex justify-content-center align-items-center px-xl-4">
                    <div class="d-flex flex-column  w-100 ">
                        <a href="" class="more-1 mb-3 text-center">امتحان کنید</a>
                        <a href="" class="more-2  text-center">بیشتر بدانید....</a>

                    </div>

                </div>

            </div> -->

        </div>
    </div>
    
    <div class="container-xxl my-5 pb-md-5" id="weblog">
        <!-- <p class="title-above text-center">
            وبلاگ میلرچی
        </p>
        <h3 class="title text-center">
            گزیده ای از آخرین مقالات میلرچی
        </h3> -->
        <h6 class="title-above text-center text-md-start">
            وبلاگ میلرچی

</h6>
<div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
    <h2 class="title">
    گزیده ای از آخرین مقالات میلرچی
    </h2>
    <a href="<?php echo site_url('/blog') ?>" class="more">
        بیشتر بدانید
    </a>
</div>
        <div class="row g-3 g-md-4 my-5">
            <?php
            $posts = new WP_Query(
                array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                )
            );

            if ($posts->have_posts()) {
                while ($posts->have_posts()) {
                    $posts->the_post();
                    ?>
                    <div class="col-12 col-lg-7 h-100">
                        <div class="row p-4  align-items-center weblog-box">
                            <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="rounded-3 w-100">
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="blog-p">

<div class="d-flex justify-content-center justify-content-lg-start my-2">
        <a href="<?php the_permalink(); ?>" class="blog-title-1  ">
                                        <?php the_title(); ?>
                                    </a>
</div>
                                
                                    <p>
                                        <?php
                                        echo the_excerpt();
                                        ?>
                                    </p>
                                    <!-- 
                                    <div class="d-flex align-items-center mt-2">
                                       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.jpg" alt=""
                                           class="admin-avatar">
                                       <span class="ms-2 admin">
                                           <?php the_author(); ?>
                                       </span>
                                   </div>  -->
                                    <div class="d-flex justify-content-between mt-4">
                                        <div class="d-flex align-items-center ">
                                            <i class="bi bi-calendar2 fs-6 me-2" style="color:#478a0d"></i>
                                            <span class="blog-calendar">
                                                <?php echo get_the_date(); ?>
                                            </span>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="more-1">بیشتر بخوانید</a>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>


                    <?php
                }
                wp_reset_postdata();

            }
            ?>
            <?php
            $args = new WP_Query(
                array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'offset' => 1,
                )
            );
            ?>
<div class="col-12 col-lg-5 h-100">
                        <div class="row px-lg-2  align-items-center">

                        <?php
            if ($args->have_posts()) {
                while ($args->have_posts()) {
                    $args->the_post();
                    ?>
  <div class=" d-flex align-items-center p-2 mb-3 mb-md-4 mb-lg-2 weblog-box">
 <div class="me-4 ">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="rounded-3 " style="height:70px; width:100px;">
                            </div>
                            <div class="col-7">
                                <div class="blog-p">


                                    <a href="<?php the_permalink(); ?>" class="blog-title mb-2">
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
                            </div>


  </div>
                           
                      

                <?php
                }
            }
            ?>

</div>
                    </div>

        </div>
    </div>
    <div class=" pb-5 d-flex align-items-center mt-5" id="association-1">
        <div class="container rounded-5 p-5 container-box">

            <div class="row">
                <div
                    class="col-12 col-md-6 col-lg-7 col-xl-8 d-flex justify-content-center justify-content-md-start align-items-center">
                    <div class="col-12 col-md-12 col-xl-8 d-flex flex-column align-items-center align-items-md-start">

                        <h6 class="title-above text-light fw-700 mb-3 ">ما را دنبال کنید!</h6>

                        <p class="subtitle text-white mb-0" style="text-align:justify;">برای دریافت آخرین اعلان ها ما را در شبکه های اجتماعی دنبال کنید.</p>

                    </div>
                </div>
                <div
                    class="col-12 col-md-6 col-lg-5 col-xl-4 d-flex justify-content-center align-items-center px-xl-4 mt-3 mt-md-0">
                    <div class="d-flex flex-column  w-100 ">

                    <div class="icon-boxes d-flex">
                        <a href="#" class="item">
                            <i aria-hidden="true" class="bi bi-telegram fs-1"></i>
                            <h3 class="title">کانال تلگرام ما</h3>
                        </a>
                        <a href="#" class="item">
                            <i aria-hidden="true" class="bi bi-instagram fs-1"></i>
                            <h3 class="title">اینستاگرام ما</h3>
                        </a>
                    </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="container-xxl my-5 py-lg-5" id="question">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h3 class="heading-title text-center text-lg-start">
                    سوالات متداول
                </h3>
                <p class="heading-subtitle mt-4 pb-4">خدمات  ملرچی با بهره گیری از تکنولوژی های متن باز و مبتنی بر لینوکس و داکر است و کاملا مبتنی بر اصول استفاده صحیح از سرور ایمیل است اما با این حال ممکن است شما سوالاتی در خصوص نحوه اجرا، امنیت، به روز رسانی، جابجایی سرور و... داشته باشید. که با ارتباط با ما سوالات بیشتر خود را مطرح کنید.   </p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <!-- <a href="" class="more ">بررسی فایل راهنما</a> -->
                </div>

                <div class="d-flex mt-5 pt-4 justify-content-center">
                    <div class="d-flex flex-column">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="55" height="50" viewBox="0 0 55 50"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.0909 15.9091V15.9091L10.2273 15.9089C18.6494 15.9089 20.4545 17.9146 20.4545 27.2726C20.4545 36.6305 18.6494 38.6362 10.2273 38.6362C1.80511 38.6362 0 36.6305 0 27.2726C0 18.7647 1.49206 16.334 8.09231 15.9626C8.09138 15.9449 8.09091 15.927 8.09091 15.9091C8.09091 10.2795 10.5008 6.54576 14.1814 4.2737C17.7898 2.04619 22.5324 1.2727 27.1972 1.27271C31.8596 1.27271 36.6379 2.0308 40.283 4.24829C44.0017 6.51055 46.4545 10.2445 46.4545 15.9091C46.4545 15.927 46.4541 15.9449 46.4531 15.9626C53.0534 16.334 54.5454 18.7647 54.5454 27.2726C54.5454 36.6305 52.7403 38.6362 44.3182 38.6362C35.896 38.6362 34.0909 36.6305 34.0909 27.2726C34.0909 17.9146 35.896 15.9089 44.3182 15.9089C44.3638 15.9089 44.4093 15.909 44.4545 15.9091C44.4545 15.9091 44.4545 15.9091 44.4545 15.9091C44.4545 10.9382 42.3619 7.85402 39.2435 5.95695C36.0516 4.01511 31.7013 3.27271 27.1972 3.27271C22.6957 3.2727 18.3852 4.02904 15.232 5.97555C12.151 7.8775 10.0909 10.9619 10.0909 15.9091ZM2.3748 32.6038C2.11303 31.295 2 29.5714 2 27.2726C2 24.9737 2.11303 23.2501 2.3748 21.9414C2.63418 20.6446 3.01272 19.8963 3.44191 19.4195C4.29145 18.4755 5.96717 17.9089 10.2273 17.9089C14.4874 17.9089 16.1631 18.4755 17.0126 19.4195C17.4418 19.8963 17.8204 20.6446 18.0797 21.9414C18.3415 23.2501 18.4545 24.9737 18.4545 27.2726C18.4545 29.5714 18.3415 31.295 18.0797 32.6038C17.8204 33.9005 17.4418 34.6488 17.0126 35.1257C16.1631 36.0696 14.4874 36.6362 10.2273 36.6362C5.96717 36.6362 4.29145 36.0696 3.44191 35.1257C3.01272 34.6488 2.63418 33.9005 2.3748 32.6038ZM36.0909 27.2726C36.0909 29.5714 36.2039 31.295 36.4657 32.6038C36.7251 33.9005 37.1036 34.6488 37.5328 35.1257C38.3824 36.0696 40.0581 36.6362 44.3182 36.6362C48.5783 36.6362 50.254 36.0696 51.1035 35.1257C51.5327 34.6488 51.9113 33.9005 52.1706 32.6038C52.4324 31.295 52.5454 29.5714 52.5454 27.2726C52.5454 24.9737 52.4324 23.2501 52.1706 21.9414C51.9113 20.6446 51.5327 19.8963 51.1035 19.4195C50.254 18.4755 48.5783 17.9089 44.3182 17.9089C40.0581 17.9089 38.3824 18.4755 37.5328 19.4195C37.1036 19.8963 36.7251 20.6446 36.4657 21.9414C36.2039 23.2501 36.0909 24.9737 36.0909 27.2726Z"
                                    fill="#212135"></path>
                                <path
                                    d="M20.4545 47.7273C18.2299 47.7273 15.3799 47.7273 13.0906 47.7273C10.8815 47.7273 9.09091 45.9364 9.09091 43.7273V38.6364"
                                    stroke="#212135" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                        <a href="<?php echo site_url('/contact-us') ?>" class="boxtitle">دریافت پشتیبانی</a>
                    </div>
                    <div class="d-flex flex-column ms-5">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                                fill="none">
                                <path
                                    d="M24 47C19.0818 47 15.1979 46.7352 12.129 46.0531C9.07147 45.3736 6.88456 44.2933 5.29561 42.7044C3.70665 41.1154 2.62639 38.9285 1.94687 35.871C1.26483 32.8021 1 28.9182 1 24C1 19.0818 1.26483 15.1979 1.94687 12.129C2.62639 9.07147 3.70665 6.88456 5.29561 5.29561C6.88456 3.70665 9.07147 2.62639 12.129 1.94687C15.1979 1.26483 19.0818 1 24 1C28.9182 1 32.8021 1.26483 35.871 1.94687C38.9285 2.62639 41.1154 3.70665 42.7044 5.29561C44.2933 6.88456 45.3736 9.07147 46.0531 12.129C46.7352 15.1979 47 19.0818 47 24C47 28.9182 46.7352 32.8021 46.0531 35.871C45.3736 38.9285 44.2933 41.1154 42.7044 42.7044C41.1154 44.2933 38.9285 45.3736 35.871 46.0531C32.8021 46.7352 28.9182 47 24 47Z"
                                    stroke="#212135" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path d="M14 14H20" stroke="#212135" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M14 24H34" stroke="#212135" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M28 34L34 34" stroke="#212135" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <a href="<?php echo site_url('/our-services') ?>" class="boxtitle">معرفی خدمات</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-5 mt-lg-0">

                <div class="accordion accordion-flush" id="accordionFlushExample">

                    <div class="accordion-item mb-3">
                        <div class="accordion-header">
                            <div class="d-flex justify-content-between collapsed box-outer" role="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false"
                                aria-controls="flush-collapse4">
                                <div class="d-flex align-items-center w-100 justify-content-between">
                                هزینه نصب و راه اندازی ایمیل سرور شرکتی چقدر است ؟
                                <div class="Number-of-sessions d-flex align-items-center justify-content-center">
                                        <i class="bi bi-chevron-left fs-5 "
                                            style=" padding: 9px 10px 5px 10px;border-radius: 50%;"></i>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div id="flush-collapse4" class="accordion-collapse collapse box-outer"
                            data-bs-parent="#accordionFlushExample" style="">
                            <div class="accordion-body text-justify ">هزینه نصب و راه اندازی ایمیل سرور سازمانی در هر سازمان متفاوت است و بر اساس پارامترهای متععدی از جمله زیرساخت و پشتیبانی و آموزش متفاوت است از این رو برای دریافت قیمت با ما در ارتباط شوید</div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <div class="accordion-header">
                            <div class="d-flex justify-content-between collapsed box-outer" role="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false"
                                aria-controls="flush-collapse3">
                                <div class="d-flex align-items-center w-100 justify-content-between">
                                نیاز به نصب چه سیستم عاملی است ؟
                                <div class="Number-of-sessions d-flex align-items-center justify-content-center">
                                        <i class="bi bi-chevron-left fs-5 "
                                            style=" padding: 9px 10px 5px 10px;border-radius: 50%;"></i>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div id="flush-collapse3" class="accordion-collapse collapse box-outer"
                            data-bs-parent="#accordionFlushExample" style="">
                            <div class="accordion-body text-justify "> برای نصب کافی است نسخه Ubuntu Server 22 را روی یک ماشین مجازی نصب کنید.</div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3">
                        <div class="accordion-header">
                            <div class="d-flex justify-content-between collapsed box-outer" role="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false"
                                aria-controls="flush-collapse2">
                                <div class="d-flex align-items-center w-100 justify-content-between">
                                منابع سخت افزاری مورد نیاز چیست ؟                      
                                              <div class="Number-of-sessions d-flex align-items-center justify-content-center">
                                        <i class="bi bi-chevron-left fs-5 "
                                            style=" padding: 9px 10px 5px 10px;border-radius: 50%;"></i>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div id="flush-collapse2" class="accordion-collapse collapse box-outer"
                            data-bs-parent="#accordionFlushExample" style="">
                            <div class="accordion-body text-justify ">با حداقل ۲ گیگ رم و ۲ هسته پردازنده میتوانید سرعت و کارایی مناسبی را تا ۱۰۰ اکانت ایمیل داشته باشید.</div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3">
                        <div class="accordion-header">
                            <div class="d-flex justify-content-between collapsed box-outer" role="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false"
                                aria-controls="flush-collapse1">
                                <div class="d-flex align-items-center w-100 justify-content-between">
                                آیا این سرویس را میتوان به عنوان ایمیل سرور تبلیغاتی استفاده کرد ؟                     
                                <div class="Number-of-sessions d-flex align-items-center justify-content-center">
                                        <i class="bi bi-chevron-left fs-5 "
                                            style=" padding: 9px 10px 5px 10px;border-radius: 50%;"></i>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div id="flush-collapse1" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample" style="">
                            <div class="accordion-body text-justify ">به دلیل خصوصی بودن این سرویس این امکان مقدور است لذا برای استفاده تبلیغاتی از یک ایمیل سرور باید سازوکاری را مانند Warm Up را فراهم کنید که IP سرور شما از طرف گوگل و یاهو مسدود نشود و در صورتی که مسدود شد با تغییر IP مشکل حل خواهد شد.</div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <div class="accordion-header">
                            <div class="d-flex justify-content-between collapsed box-outer" role="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false"
                                aria-controls="flush-collapse5">
                                <div class="d-flex align-items-center w-100 justify-content-between">
                                آیا امکان مدیریت ایمیل ها با نرم افزار Outlook موبایل و دسکتاپ فراهم است ؟                                <div class="Number-of-sessions d-flex align-items-center justify-content-center">
                                        <i class="bi bi-chevron-left fs-5 "
                                            style=" padding: 9px 10px 5px 10px;border-radius: 50%;"></i>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div id="flush-collapse5" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample" style=""><div class="accordion-body text-justify "> بله ایمیل سرور میلرچی مبتنی بر پورت های استاندارد SSL می باشد که میتواند با همه نرم افزارهای مدیریت ایمیل مخصوصا outlook ارتباط داشته باشند و ارسال و دریافت را به خوبی انجام دهد.
                        </div>
                        </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>

    </div>

  



</main>

<?php
get_footer();
?>