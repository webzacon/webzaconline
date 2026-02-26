<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Webzac is a digital agency offering website development, software development, mobile app development, SEO, and digital marketing in Tiruppur, Tamil Nadu.">
    <meta name="keywords" content="Webzac, webzac software company, website development Tiruppur, software development, mobile app development, SEO services, digital marketing, ecommerce website development, web design Tamil Nadu">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('invena-main/assets/images/fav.png') }}">
    <title>Webzac | Website, Software, Mobile Apps, SEO & Digital Marketing</title>
    <link rel="stylesheet preload" href="{{ asset('invena-main/assets/css/plugins/fontawesome.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('invena-main/assets/css/plugins/swiper.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('invena-main/assets/css/plugins/metismenu.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('invena-main/assets/css/plugins/magnifying-popup.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('invena-main/assets/css/plugins/odometer.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('invena-main/assets/css/vendor/bootstrap.min.css') }}" as="style">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet preload" as="style">
    <link rel="preload" as="image" href="{{ asset('invena-main/assets/images/banner/21.webp') }}" />
    <link rel="stylesheet preload" href="{{ asset('invena-main/assets/css/style.css') }}" as="style">
</head>

<body>

    <header class="header-one header--sticky">
    <div class="header-top-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-one-wrapper">
                        <div class="left">
                            <div class="mail">
                                <a href="mailto:info@webzac.online"><i class="fal fa-envelope"></i>
                                    info@webzac.online</a>
                            </div>
                            <div class="working-time">
                                <p><i class="fal fa-clock"></i> Working: 8.00am - 5.00pm</p>
                            </div>
                        </div>
                        <div class="right">
                            <ul class="top-nav">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('services') }}">Services</a></li>
    <li><a href="{{ route('pricing') }}">Pricing</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
</ul>
                            <ul class="social-wrapper-one">
                                <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="mr--0" href="#" aria-label="linkedin"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-main-one-wrapper">
                        <div class="thumbnail">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('images/logo.jpg') }}" alt="finbiz-logo" style="max-width: 150px; width: 100%; height: auto;">
                            </a>
                        </div>
                        <div class="main-header">
                            <div class="nav-area">
    <ul class="">
        <li class="main-nav"><a href="{{ route('home') }}">Home</a></li>
        <li class="main-nav"><a href="{{ route('about') }}">About</a></li>
        <li class="main-nav"><a href="{{ route('services') }}">Services</a></li>
        <li class="main-nav"><a href="{{ route('pricing') }}">Pricing</a></li>
        <li class="main-nav"><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</div>

<div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
                            <div class="button-area">
                                <button class="search" id="search" aria-label="Search"><i
                                        class="far fa-search"></i></button>
                                <a href="{{ route('contact') }}"
                                    class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Get
                                    Quote</a>
                                <button id="menu-btn" aria-label="Menu" class="menu-btn menu ml--20 ml_sm--5">
                                    <img class="menu-light" src="{{ asset('invena-main/assets/images/icons/01.svg') }}" alt="Menu-icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


    <div class="banner-swiper-two">
        <div class="swiper mySwiper-banner-two">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area-two rts-section-gap bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-inner-two-content">
                                        <p class="pre-title"><span>Welcome to Webzac!</span> Build Your Digital Presence Today</p>
                                        <h1 class="title">Innovative Solutions <br> Tailored for Your Success</h1>
                                        <p class="disc">
                                            Webzac delivers website development, software development, mobile app development, SEO, and digital marketing for growth-focused brands.
                                        </p>
                                        <a href="{{ route('contact') }}" class="rts-btn btn-primary btn-white">Start Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-area-start">
                            <div class="shape shape-one">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/banner/shape/01.webp') }}" alt="shape-area">
                            </div>
                            <div class="shape shape-two">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/banner/shape/02.webp') }}" alt="shape-area">
                            </div>
                            <div class="shape shape-three">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/banner/shape/03.webp') }}" alt="shape-area">
                            </div>
                            <div class="shape shape-four">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/banner/shape/04.webp') }}" alt="shape-area">
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area-two two rts-section-gap bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-inner-two-content">
                                        <p class="pre-title"><span>Welcome to Webzac!</span> Build Your Digital Presence Today</p>
                                        <h1 class="title">Impressive Solutions <br> Crafted for Your Goal</h1>
                                        <p class="disc">
                                            Webzac delivers website development, software development, mobile app development, SEO, and digital marketing for growth-focused brands.
                                        </p>
                                        <a href="{{ route('contact') }}" class="rts-btn btn-primary btn-white">Start Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-area-start">
                            <div class="shape shape-one">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/banner/shape/01.webp') }}" alt="">
                            </div>
                            <div class="shape shape-two">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/banner/shape/02.webp') }}" alt="">
                            </div>
                            <div class="shape shape-three">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/banner/shape/03.webp') }}" alt="">
                            </div>
                            <div class="shape shape-four">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/banner/shape/04.webp') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area-two three rts-section-gap bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-inner-two-content">
                                        <p class="pre-title"><span>Welcome to Webzac!</span> Build Your Digital Presence Today</p>
                                        <h1 class="title">Best Solutions <br> Intro for Your Business</h1>
                                        <p class="disc">
                                            Webzac delivers website development, software development, mobile app development, SEO, and digital marketing for growth-focused brands.
                                        </p>
                                        <a href="{{ route('contact') }}" class="rts-btn btn-primary btn-white">Start Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-area-start">
                            <div class="shape shape-one">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/banner/shape/01.webp') }}" alt="">
                            </div>
                            <div class="shape shape-two">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/banner/shape/02.webp') }}" alt="">
                            </div>
                            <div class="shape shape-three">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/banner/shape/03.webp') }}" alt="">
                            </div>
                            <div class="shape shape-four">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/banner/shape/04.webp') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
            </div>
            <div class="swiper-button-next"><i class="fa-light fa-chevron-right"></i></div>
            <div class="swiper-button-prev"><i class="fa-light fa-chevron-left"></i></div>
        </div>
    </div>



    <!-- rts about area start -->
    <div class="rts-about-area-two rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="left-thumbnail-about-area-two">
                        <img loading="lazy" src="{{ asset('invena-main/assets/images/about/04.webp') }}" alt="about">
                        <div class="small-image">
                            <img loading="lazy" src="{{ asset('invena-main/assets/images/about/05.webp') }}" alt="small">
                        </div>
                        <div class="counter-about-area">
                            <h2 class="counter title"><span class="odometer" data-count="25">00</span>+
                            </h2>
                            <span>Founded in 2026</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--80 mt_md--80">
                    <div class="about-inner-content-two">
                        <div class="title-style-two left">
                            <span class="bg-content">About Us</span>
                            <span class="pre">More About Us</span>
                            <h2 class="title rts-text-anime-style-1">Empowering You to Feel <br> Your Best Every Day
                            </h2>
                        </div>
                        <div class="about-between-wrapper">
                            <p class="disc">
                                Webzac was founded in 2026 by two friends, Sanjaykumar and Ilayabharathi, to build practical digital solutions that help businesses scale.
                            </p>
                            <div class="check-wrapper-area">
                                <div class="single-check">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <p>Fast Delivery and Ongoing Support</p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <p>Experienced Website and App Team</p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <p>SEO and Marketing Execution</p>
                                </div>
                            </div>
                        </div>
                        <div class="call-and-sign-area two">
                            <div class="call-area">
                                <div class="icon">
                                    <i class="fa-sharp fa-regular fa-phone-volume"></i>
                                </div>
                                <div class="information">
                                    <span>Call us anytime</span>
                                    <a href="tel:+919655673754">
                                        <h6 class="title">+91 96556 73754</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="sign-area">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/about/sign.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img loading="lazy" src="{{ asset('invena-main/assets/images/about/shape/01.svg') }}" alt="shape" class="one">
            <img loading="lazy" src="{{ asset('invena-main/assets/images/about/shape/02.svg') }}" alt="shape" class="two">
        </div>
    </div>
    <!-- rts about area end -->


    <!-- rts service area start -->
    <div class="rts-service-area pt--40 pb--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-two center">
                        <span class="bg-content">Services</span>
                        <span class="pre">our Service</span>
                        <h2 class="title rts-text-anime-style-1">High Quality Services
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-2 mt--30">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-bg-style-one-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="service-style-swiper-wrapper-two">
                                    <div class="swiper mySwiper-service-1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                    <div class="icons">
                                                        <img loading="lazy" src="{{ asset('invena-main/assets/images/service/icons/01.svg') }}"
                                                            alt="service">
                                                    </div>
                                                    <div class="information">
                                                        <h5 class="title">Website Development</h5>
                                                        <p class="disc">
                                                            Responsive, conversion-focused solutions designed for real business outcomes and measurable growth.
                                                        </p>
                                                        <a href="{{ route('services') }}" class="arrow-right">
                                                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                            <span>Read More</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                    <div class="icons">
                                                        <img loading="lazy" src="{{ asset('invena-main/assets/images/service/icons/02.svg') }}"
                                                            alt="service">
                                                    </div>
                                                    <div class="information">
                                                        <h5 class="title">Software Development</h5>
                                                        <p class="disc">
                                                            Responsive, conversion-focused solutions designed for real business outcomes and measurable growth.
                                                        </p>
                                                        <a href="{{ route('services') }}" class="arrow-right">
                                                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                            <span>Read More</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                    <div class="icons">
                                                        <img loading="lazy" src="{{ asset('invena-main/assets/images/service/icons/03.svg') }}"
                                                            alt="service">
                                                    </div>
                                                    <div class="information">
                                                        <h5 class="title">Mobile App Development</h5>
                                                        <p class="disc">
                                                            Responsive, conversion-focused solutions designed for real business outcomes and measurable growth.
                                                        </p>
                                                        <a href="{{ route('services') }}" class="arrow-right">
                                                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                            <span>Read More</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                    <div class="icons">
                                                        <img loading="lazy" src="{{ asset('invena-main/assets/images/service/icons/01.svg') }}"
                                                            alt="service">
                                                    </div>
                                                    <div class="information">
                                                        <h5 class="title">SEO & Digital Marketing</h5>
                                                        <p class="disc">
                                                            Responsive, conversion-focused solutions designed for real business outcomes and measurable growth.
                                                        </p>
                                                        <a href="{{ route('services') }}" class="arrow-right">
                                                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                            <span>Read More</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts service area end -->


    <!-- rts call to action area start -->
    <div class="rts-call-to-action-area-two bg_image">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cta-style-two-area">
                                    <h3 class="title rts-text-anime-style-1">
                                        Let’s discuss about how we can help <br>
                                        make your business better
                                    </h3>
                                    <a href="{{ route('contact') }}" class="rts-btn btn-primary btn-white">Let's Work Together</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts call to action area end -->



    <!-- rts business goal area start -->
    <div class="business-goal-area-2 rts-section-gap">
        <div class="container pt--30">
            <div class="row">
                <div class="col-lg-6">
                    <div class="consultancy-style-one">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Why Webzac</span>
                            <span class="pre">YOUR DIGITAL PARTNER</span>
                            <h2 class="title rts-text-anime-style-1">We build scalable digital <br>
                                solutions for modern brands
                            </h2>
                        </div>
                        <div class="signle-consultancy mb--30">
                            <div class="icon">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/about/icons/01.svg') }}" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title">Product-Focused Execution</h4>
                                <p class="disc">
                                    From planning to launch, Webzac provides clear execution, reliable delivery, and long-term support.
                                </p>
                            </div>
                        </div>
                        <div class="signle-consultancy">
                            <div class="icon">
                                <img loading="lazy" src="{{ asset('invena-main/assets/images/about/icons/02.svg') }}" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title">Reliable Support & Maintenance</h4>
                                <p class="disc">
                                    From planning to launch, Webzac provides clear execution, reliable delivery, and long-term support.
                                </p>
                            </div>
                        </div>
                        <div class="button-wrapper mt--40" data-animation="fadeInUp" data-delay="0.4"
                            data-duration="1.2">
                            <a href="{{ route('contact') }}" class="rts-btn btn-primary">Contact Us</a>
                            <div class="vedio-icone">
                                <a class="video-play-button play-video popup-video"
                                    href="https://www.youtube.com/watch?v=vZE0j_WCRvI"
                                    aria-label="Watch promotional video on YouTube">
                                    <span></span>
                                </a>
                                <div class="video-overlay">
                                    <a href="#section1" class="video-overlay-close">×</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-business-area-right-two">
                        <div class="large-thumbnail">
                            <img loading="lazy" src="{{ asset('invena-main/assets/images/business-goal/02.webp') }}" alt="">
                        </div>
                        <div class="small-thumbnail images-r">
                            <img loading="lazy" src="{{ asset('invena-main/assets/images/business-goal/01.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts business goal area end -->
    </div>

    <!-- rts counter up area start -->
    <div class="rts-counter-up-area rts-section-gap counter-bg">
        <div class="container">
            <div class="row g-5">
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <div class="icon">
                            <img loading="lazy" src="{{ asset('invena-main/assets/images/counterup/icon/01.svg') }}" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="199">00</span>+
                            </h2>
                            <p class="disc">Successful Projects</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center two pl--30">
                        <div class="icon">
                            <img loading="lazy" src="{{ asset('invena-main/assets/images/counterup/icon/02.svg') }}" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="300">00</span>+
                            </h2>
                            <p class="disc">Media Activities</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center three pl--50 pl_md--10 pl_sm--0">
                        <div class="icon">
                            <img loading="lazy" src="{{ asset('invena-main/assets/images/counterup/icon/03.svg') }}" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="699">00</span>+
                            </h2>
                            <p class="disc">Skilled Experts</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 four">
                        <div class="icon">
                            <img loading="lazy" src="{{ asset('invena-main/assets/images/counterup/icon/04.svg') }}" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="120">00</span>+
                            </h2>
                            <p class="disc">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
            </div>
        </div>
    </div>
    <!-- rts counter up area end -->

    <!-- start gallery section -->
    <div class="rts-gallery-area rts-section-gap gallery-bg bg_image">
        <div class="container pt--40">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-wrapper-gallery-project">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Projects</span>
                            <span class="pre">Featured Work</span>
                            <h2 class="title rts-text-anime-style-1">Projects
                                Our Completed Projects
                            </h2>
                        </div>

                        <div class="swiper-paginations"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-style-one-wrapper">

                        <div class="swiper mySwiper-project-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="{{ route('services') }}" class="thumbnail">
                                            <img loading="lazy" src="{{ asset('invena-main/assets/images/project/01.webp') }}" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('services') }}">
                                                <h5 class="title">Company Website Launch</h5>
                                            </a>
                                            <span>Webzac Delivery</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="{{ route('services') }}" class="thumbnail">
                                            <img loading="lazy" src="{{ asset('invena-main/assets/images/project/02.webp') }}" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('services') }}">
                                                <h5 class="title">E-Commerce Platform</h5>
                                            </a>
                                            <span>Webzac Delivery</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="{{ route('services') }}" class="thumbnail">
                                            <img loading="lazy" src="{{ asset('invena-main/assets/images/project/01.webp') }}" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('services') }}">
                                                <h5 class="title">Lead Generation Campaign</h5>
                                            </a>
                                            <span>Webzac Delivery</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start gallery section -->


    <!-- appoinment areas tart -->
    <div class="appoinment-area-start rts-section-gapBottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="appoinment-wrapper-one-start">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Hello</span>
                            <span class="pre">Make An Appointment</span>
                            <h2 class="title">Request a free quote</h2>
                        </div>
                        <form action="{{ route('contact') }}" method="get">
                            <div class="single-input-wrapper">
                                <div class="single-input">
                                    <input type="text" placeholder="Your Name">
                                </div>
                                <div class="single-input">
                                    <input type="number" placeholder="Number">
                                </div>
                            </div>
                            <div class="single-input">
                                <input type="email" placeholder="Your Email">
                            </div>
                            <div class="single-input mb--30">
                                <textarea placeholder="Type Your Message"></textarea>
                            </div>
                            <button class="rts-btn btn-primary">Submit Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="appoinment-thumbnail">
                        <img loading="lazy" src="{{ asset('invena-main/assets/images/appoinment/01.webp') }}" alt="appoinment">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- appoinment areas end -->



    <!-- rts blog area start -->
    <div class="rts-blog-area rts-section-gapBottom pt--40 mb--310">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-two center">
                        <span class="bg-content">Blog</span>
                        <span class="pre">Blog & News</span>
                        <h2 class="title">Latest Webzac Insights
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-lg-12">
                    <div class="blog-swiper-style-one">
                        <div class="swiper mySwiper-blog-one">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-blog-area-one">
                                        <p>Webzac Insights / <span>Team Webzac</span></p>
                                        <a href="{{ route('about') }}">
                                            <h4 class="title">Building a Brand That from Market Leaders</h4>
                                        </a>
                                        <div class="bottom-details">
                                            <a href="{{ route('about') }}" class="thumbnail">
                                                <img loading="lazy" src="{{ asset('invena-main/assets/images/blog/01.webp') }}" alt="blog-area">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-blog-area-one">
                                        <p>Webzac Insights / <span>Team Webzac</span></p>
                                        <a href="{{ route('about') }}">
                                            <h4 class="title">Transforming Your Best Of Approach to Business</h4>
                                        </a>
                                        <div class="bottom-details">
                                            <a href="{{ route('about') }}" class="thumbnail">
                                                <img loading="lazy" src="{{ asset('invena-main/assets/images/blog/02.webp') }}" alt="blog-area">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-blog-area-one">
                                        <p>Webzac Insights / <span>Team Webzac</span></p>
                                        <a href="{{ route('about') }}">
                                            <h4 class="title">The quick settle tips of the new ages exist</h4>
                                        </a>
                                        <div class="bottom-details">
                                            <a href="{{ route('about') }}" class="thumbnail">
                                                <img loading="lazy" src="{{ asset('invena-main/assets/images/blog/03.webp') }}" alt="blog-area">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-blog-area-one">
                                        <p>Webzac Insights / <span>Team Webzac</span></p>
                                        <a href="{{ route('about') }}">
                                            <h4 class="title">Building a Brand That from Market Leaders</h4>
                                        </a>
                                        <div class="bottom-details">
                                            <a href="{{ route('about') }}" class="thumbnail">
                                                <img loading="lazy" src="{{ asset('invena-main/assets/images/blog/01.webp') }}" alt="blog-area">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-blog-area-one">
                                        <p>Webzac Insights / <span>Team Webzac</span></p>
                                        <a href="{{ route('about') }}">
                                            <h4 class="title">Transforming Your Best Of Approach to Business</h4>
                                        </a>
                                        <div class="bottom-details">
                                            <a href="{{ route('about') }}" class="thumbnail">
                                                <img loading="lazy" src="{{ asset('invena-main/assets/images/blog/02.webp') }}" alt="blog-area">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-blog-area-one">
                                        <p>Webzac Insights / <span>Team Webzac</span></p>
                                        <a href="{{ route('about') }}">
                                            <h4 class="title">The quick settle tips of the new ages exist</h4>
                                        </a>
                                        <div class="bottom-details">
                                            <a href="{{ route('about') }}" class="thumbnail">
                                                <img loading="lazy" src="{{ asset('invena-main/assets/images/blog/03.webp') }}" alt="blog-area">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog area end -->



    <!-- rts footer two area wrapper -->
    <div class="rts-footer-area footer-two mt-dec-footer-map bg-footer-two bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="map-area-main-wrapper">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="map-area-main-footer-two">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.2411310385787!2d77.29791707402255!3d11.16977395181729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba907fd5efeef6f%3A0x64cd6da788ff70a5!2sTIDEL%20NEO%20-%20TIRUPPUR!5e0!3m2!1sen!2sin!4v1772011894911!5m2!1sen!2sin"
                                        width="625" height="625" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"
                                        title="Company location on Google Maps"></iframe>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="map-information-2-footer">
                                    <h5 class="title-main">Contact Us</h5>
                                    <img loading="lazy" src="{{ asset('invena-main/assets/images/footer/02.svg') }}" alt="line" class="line">
                                    <div class="contact-information-main-wrapper">
                                        <div class="signle-contact-information">
                                            <div class="icon">
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                            <div class="information-wrapper">
                                                <span>Call Us</span>
                                                <a href="tel:+919655673754">
                                                    <h6 class="title">+91 96556 73754 / +91 97917 72740</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="signle-contact-information">
                                            <div class="icon">
                                                <i class="fa-regular fa-envelope"></i>
                                            </div>
                                            <div class="information-wrapper">
                                                <span>Work with us</span>
                                                <a href="mailto:info@webzac.online">
                                                    <h6 class="title">info@webzac.online</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="signle-contact-information">
                                            <div class="icon">
                                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="information-wrapper">
                                                <span>Our Location</span>
                                                <a href="https://maps.google.com/?q=TIDEL+NEO+Tiruppur" target="_blank" rel="noopener">
                                                    <h6 class="title">Near Tidel Neo Tech Park, Poondi Nagar - Poondi, Tiruppur, Tamil Nadu, India</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container bg-shape-f1">
            <!-- rts footer area -->
            <div class="row pt--120 pt_sm--80 pb--80 pb_sm--40">

                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized mid-bg">
                        <div class="wized-title">
                            <h5 class="title">Opening Hours</h5>
                            <img loading="lazy" src="{{ asset('invena-main/assets/images/footer/01.svg') }}" alt="finbiz_footer">
                        </div>
                        <div class="opening-time-inner">
                            <div class="single-opening">
                                <p class="day">Week Days</p>
                                <p class="time">09.00 - 24:00</p>
                            </div>
                            <div class="single-opening">
                                <p class="day">Saturday</p>
                                <p class="time">08:00 - 03.00</p>
                            </div>
                            <div class="single-opening mb--30 mb_sm--10">
                                <p class="day">Sunday</p>
                                <p class="time">Day Off</p>
                            </div>
                            <a href="{{ route('contact') }}" class="rts-btn btn-primary btn-white">Contact</a>
                        </div>
                    </div>
                </div>
                <!-- footer mid area end -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pl--50 pl_sm--15">
                    <div class="footer-one-single-wized">
                        <div class="wized-title">
                            <h5 class="title">Quick Links</h5>
                            <img loading="lazy" src="{{ asset('invena-main/assets/images/footer/01.svg') }}" alt="finbiz_footer">
                        </div>
                        <div class="quick-link-inner">
                            <ul class="links">
                                <li><a href="{{ route('home') }}"><i class="far fa-arrow-right"></i> Home</a></li>
                                <li><a href="{{ route('about') }}"><i class="far fa-arrow-right"></i> About</a></li>
                                <li><a href="{{ route('services') }}"><i class="far fa-arrow-right"></i> Services</a></li>
                                <li><a href="{{ route('pricing') }}"><i class="far fa-arrow-right"></i> Pricing</a></li>
                                <li><a href="{{ route('contact') }}"><i class="far fa-arrow-right"></i> Contact</a></li>
                            </ul>
                            <ul class="links margin-left-70">
                                <li><a href="mailto:info@webzac.online"><i class="far fa-arrow-right"></i> info@webzac.online</a></li>
                                <li><a href="tel:+919655673754"><i class="far fa-arrow-right"></i> +91 96556 73754</a></li>
                                <li><a href="tel:+919791772740"><i class="far fa-arrow-right"></i> +91 97917 72740</a></li>
                                <li><a href="https://wa.me/919791772740" target="_blank" rel="noopener"><i class="far fa-arrow-right"></i> WhatsApp Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer mid area -->

                <!-- footer end area post -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized margin-left-65">
                        <div class="wized-title">
                            <h5 class="title">Get Updates</h5>
                            <img loading="lazy" src="{{ asset('invena-main/assets/images/footer/01.svg') }}" alt="finbiz_footer">
                        </div>
                        <div class="body">
                            <div class="update-wrapper">
                                <p class="disc">Sign up for our latest news &amp; articles. We won’t give you spam
                                    mails.</p>
                                <form class="email-footer-area" action="{{ route('contact') }}" method="get">
                                    <input type="email" placeholder="Enter Email Address" required="">
                                    <button type="submit" title="Close menu"><i
                                            class="fas fa-location-arrow"></i></button>
                                </form>
                                <div class="note-area">
                                    <p><span>Note:</span> We do not publish your email</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer end area post end-->
            </div>
            <!-- rts footer area End -->
        </div>
        <!-- copyright area start -->
        <div class="rts-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <p>Webzac - Copyright
                                <script>
                                    document.write(
                                        new Date().getFullYear()
                                    )
                                </script>. All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area end -->
    </div>
    <!-- rts footer two area wrapper end -->



    <div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu" title="Close menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="{{ route('home') }}"><img class="logo" src="{{ asset('images/logo.jpg') }}" alt="finbiz_logo" style="max-width: 150px; width: 100%; height: auto;"></a>
        <div class="body d-none d-xl-block">
            <p class="disc">
                We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                All seds this mistakens idea denouncing pleasures.
            </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+919655673754">+91 96556 73754</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@webzac.online">info@webzac.online</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="https://www.webzac.online" target="_blank" rel="noopener">www.webzac.online</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="https://maps.google.com/?q=TIDEL+NEO+Tiruppur" target="_blank" rel="noopener">Near Tidel Neo Tech Park, Poondi Nagar - Poondi, Tiruppur</a>
                    </div>
                    <!-- single ENd -->
                </div>
                <div class="social-wrapper-two menu">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu d-block d-xl-none">
    <nav class="nav-main mainmenu-nav mt--30">
        <ul class="mainmenu metismenu" id="mobile-menu-active">
            <li><a href="{{ route('home') }}" class="main">Home</a></li>
            <li><a href="{{ route('about') }}" class="main">About</a></li>
            <li><a href="{{ route('services') }}" class="main">Services</a></li>
            <li><a href="{{ route('pricing') }}" class="main">Pricing</a></li>
            <li><a href="{{ route('contact') }}" class="main">Contact</a></li>
        </ul>
    </nav>

    <div class="social-wrapper-one">
        <ul>
            <li><a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#" aria-label="instagram"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#" aria-label="linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
        </ul>
    </div>
</div>
<!-- mobile menu area end -->
</div>
<!-- inner menu area desktop End -->


<!-- offcanvase search -->
<div class="search-input-area">
    <div class="container">
        <div class="search-input-inner">
            <div class="input-div">
                <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                <button><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>
    <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
</div>
<div id="anywhere-home" class="">
</div>


<!-- progress area start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>
<!-- progress area end -->

<script defer src="{{ asset('invena-main/assets/js/plugins/jquery.js') }}"></script>

<script defer src="{{ asset('invena-main/assets/js/plugins/odometer.js') }}"></script>
<script defer src="{{ asset('invena-main/assets/js/plugins/jquery-appear.js') }}"></script>


<script defer src="{{ asset('invena-main/assets/js/plugins/gsap.js') }}"></script>
<script defer src="{{ asset('invena-main/assets/js/plugins/split-text.js') }}"></script>
<script defer src="{{ asset('invena-main/assets/js/plugins/scroll-trigger.js') }}"></script>
<script defer src="{{ asset('invena-main/assets/js/plugins/smooth-scroll.js') }}"></script>
<script defer src="{{ asset('invena-main/assets/js/plugins/metismenu.js') }}"></script>
<script defer src="{{ asset('invena-main/assets/js/plugins/popup.js') }}"></script>

<script defer src="{{ asset('invena-main/assets/js/vendor/bootstrap.min.js') }}"></script>
<script defer src="{{ asset('invena-main/assets/js/plugins/swiper.js') }}"></script>
<script defer src="{{ asset('invena-main/assets/js/plugins/contact.form.js') }}"></script>

<script defer src="{{ asset('invena-main/assets/js/main.js') }}"></script>
</body>

</html>
