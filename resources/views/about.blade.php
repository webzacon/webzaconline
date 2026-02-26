<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Webzac was founded in 2026 by Sanjaykumar and Ilayabharathi, two friends building growth-focused digital solutions.">
    <meta name="keywords" content="About Webzac, Webzac founders, Sanjaykumar, Ilayabharathi, founded in 2026, software company Tiruppur, digital agency Tamil Nadu">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('invena-main/assets/images/fav.png') }}">
    <title>About Webzac | Founded by Sanjaykumar and Ilayabharathi</title>
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
    <style>
        @media (min-width: 1200px) {
            .about-header-logo {
                max-width: 190px !important;
            }
        }
    </style>
</head>

<body class="index-five">


    <header class="header-five header--sticky">
    <div class="container">
        <div class="row header-top-three">
            <div class="col-lg-6">
                <p class="top-left">Are you ready to grow up your business? <a href="{{ route('contact') }}">Contact Us <i
                            class="far fa-arrow-right"></i></a></p>
            </div>
            <div class="col-lg-6 right-h-three">
                <div class="header-top-right">
                    <div class="single-right email">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@webzac.online">info@webzac.online</a>
                    </div>
                    <div class="single-right call">
                        <i class="far fa-phone-volume"></i>
                        <span>Hotline:</span>
                        <a href="tel:+919791772740">+91 97917 72740</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row main-header main-header-three">
            <div class="col-lg-3 col-md-4 col-sm-5 col-5">
                <a href="{{ route('home') }}" class="thumbnail-logo">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo_three" class="about-header-logo" style="max-width: 150px; width: 100%; height: auto;">
                </a>
            </div>
            <div class="col-lg-6 d-none d-xl-block">
                <div class="text-center d-flex justify-content-center">
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
                </div>
            </div>
            <div class="col-xl-3 col-lg-9 col-md-8 col-sm-7 col-7">
                <div class="button-area-wrapper">
                    <a href="{{ route('contact') }}" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Get
                        Quote</a>
                    <button id="menu-btn" class="menu-btn rts-btn btn-primary btn-white ml--20 ml_sm--5">
                        <img class="menu-light" src="{{ asset('invena-main/assets/images/icons/01.svg') }}" alt="Menu-icon">
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>


    <!-- rts banner area five -->
    <div class="rts-banner-five-wrapper rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-five-content">
                        <div class="title-area">
                            <p class="pre"><span>Welcome to Webzac!</span> A Journey Started by Two Friends</p>
                            <h1 class="title rts-text-anime-style-1">
                                About <br>
                                <span>Webzac</span>
                            </h1>
                        </div>
                        <div class="description-area">
                            <p class="disc">
                                Webzac was founded in 2026 by Sanjaykumar and Ilayabharathi. What started as a shared dream between two friends has grown into a digital company focused on building websites, software, mobile apps, SEO, and marketing solutions.
                            </p>
                            <a href="{{ route('services') }}" class="rts-btn btn-primary">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt--65">
                <div class="col-lg-9">
                    <div class="banner-image-primary-five">
                        <img class="grow" src="{{ asset('invena-main/assets/images/banner/05.webp') }}" alt="banner">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="banner-contact-form-five">
                        <form action="{{ route('contact') }}" method="get">
                            <h5 class="title">Let's Get Started</h5>
                            <div class="input-single">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="input-single">
                                <input type="text" placeholder="Email" required>
                            </div>
                            <div class="input-single">
                                <textarea placeholder="Type your Message" required></textarea>
                            </div>
                            <button class="rts-btn btn-primary btn-white">Submit Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="{{ asset('invena-main/assets/images/banner/shape/05.png') }}" alt="shape" class="one">
            <img src="{{ asset('invena-main/assets/images/banner/shape/06.png') }}" alt="shape" class="two">
            <img src="{{ asset('invena-main/assets/images/banner/shape/07.png') }}" alt="shape" class="three">
        </div>
    </div>
    <!-- rts banner area five end -->


    <!-- rts service area start -->
    <div class="rts-service-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-five center">
                        <span class="pre">Our Services</span>
                        <h2 class="title">What Webzac Delivers</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.0" data-duration="1.2">
                    <div class="service-single-main-wrapper-five">
                        <div class="icon">
                            <img src="{{ asset('invena-main/assets/images/service/icons/08.svg') }}" alt="service">
                        </div>
                        <div class="inner-content">
                            <a href="{{ route('services') }}">
                                <h5 class="title">Website Development</h5>
                            </a>
                            <p class="disc">
                                Custom web applications and software systems built to simplify operations and improve productivity.
                            </p>
                            <a href="{{ route('services') }}" class="rts-btn btn-primary btn-white">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                    <div class="service-single-main-wrapper-five">
                        <div class="icon">
                            <img src="{{ asset('invena-main/assets/images/service/icons/09.svg') }}" alt="service">
                        </div>
                        <div class="inner-content">
                            <a href="{{ route('services') }}">
                                <h5 class="title">Software Development</h5>
                            </a>
                            <p class="disc">
                                Android and iOS apps combined with SEO and digital marketing strategies to increase visibility and leads.
                            </p>
                            <a href="{{ route('services') }}" class="rts-btn btn-primary btn-white">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                    <div class="service-single-main-wrapper-five">
                        <div class="icon">
                            <img src="{{ asset('invena-main/assets/images/service/icons/10.svg') }}" alt="service">
                        </div>
                        <div class="inner-content">
                            <a href="{{ route('services') }}">
                                <h5 class="title">Mobile Apps, SEO & Marketing</h5>
                            </a>
                            <p class="disc">
                                User-focused, responsive, and SEO-ready websites for startups and growing businesses.
                            </p>
                            <a href="{{ route('services') }}" class="rts-btn btn-primary btn-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts service area end -->



    <!-- rs call to action area three -->
    <div class="rts-call-to-action-area-three bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-main-wrapper-inner">
                        <h2 class="title rts-text-anime-style-1">
                            Talk to Webzac for your next <br> digital project
                            <span>(Fast response from our team)</span>
                        </h2>
                        <div class="call-area">
                            <div class="icon">
                                <i class="fa-solid fa-phone-flip"></i>
                            </div>
                            <a href="+91 9655673754">9655673754</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rs call to action area three end -->

    <!-- rts progress area start -->
    <div class="rts-progress-area-main-wrapper rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="progress-circle-main-wrapper">
                        <div class="single-progress-area">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="76" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35"
                                        style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="50%"
                                        transform="matrix(0, 1, -1, 0, 80, 0)"></text>
                                </svg>
                                <img src="{{ asset('invena-main/assets/images/fun/01.svg') }}" alt="fun">
                            </div>
                            <div class="right-counter">
                                <h2 class="counter title"><span class="odometer" data-count="76">00</span>%
                                </h2>
                                <p>Webzac Growth Focus</p>
                            </div>
                        </div>
                        <div class="single-progress-area">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="89" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35"
                                        style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="50%"
                                        transform="matrix(0, 1, -1, 0, 80, 0)"></text>
                                </svg>
                                <img src="{{ asset('invena-main/assets/images/fun/02.svg') }}" alt="fun">
                            </div>
                            <div class="right-counter">
                                <h2 class="counter title"><span class="odometer" data-count="89">00</span>%
                                </h2>
                                <p>Projects Delivered</p>
                            </div>
                        </div>
                        <div class="single-progress-area">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="70" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35"
                                        style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="50%"
                                        transform="matrix(0, 1, -1, 0, 80, 0)"></text>
                                </svg>
                                <img src="{{ asset('invena-main/assets/images/fun/03.svg') }}" alt="fun">
                            </div>
                            <div class="right-counter">
                                <h2 class="counter title"><span class="odometer" data-count="70">00</span>%
                                </h2>
                                <p>Client Satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts progress area end -->



    <!-- rts about area start -->
    <div class="rts-about-five-area rts-section-gapBottom">
        <div class="container-full">
            <div class="row align-items-center">
                <div class="col-lg-6 pr--70 pr_md--0 pr_sm--0">
                    <div class="thumbnail-about-five">
                        <img src="{{ asset('invena-main/assets/images/about/10.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt_md--30 mt_sm--30">
                    <div class="about-content-inner-five">
                        <div class="title-style-five">
                            <span class="pre">More About Webzac</span>
                            <h2 class="title rts-text-anime-style-1">Founded in 2026 by Sanjaykumar and Ilayabharathi</h2>
                        </div>
                        <div class="inner-about-home-7">
                            <p class="disc">
                                Webzac began as a two-friends journey with one mission: build practical digital solutions that help businesses grow online with confidence and clarity.
                            </p>
                            <!-- ingle about start -->
                            <div class="about-single-home-7">
                                <div class="icon">
                                    <img src="{{ asset('invena-main/assets/images/about/icons/03.svg') }}" alt="">
                                </div>
                                <div class="discription">
                                    <h6 class="title">
                                        Shared Vision
                                    </h6>
                                    <p class="disc">
                                        From planning to launch, Webzac delivers reliable execution across websites, software, and mobile apps.
                                    </p>
                                </div>
                            </div>
                            <!-- ingle about end -->
                            <!-- ingle about start -->
                            <div class="about-single-home-7">
                                <div class="icon">
                                    <img src="{{ asset('invena-main/assets/images/about/icons/04.svg') }}" alt="">
                                </div>
                                <div class="discription">
                                    <h6 class="title">
                                        Strong Execution
                                    </h6>
                                    <p class="disc">
                                        Since 2026, Webzac has focused on continuous improvement, long-term support, and measurable digital growth.
                                    </p>
                                </div>
                            </div>
                            <!-- ingle about end -->
                            <!-- ingle about start -->
                            <div class="about-single-home-7">
                                <div class="icon">
                                    <img src="{{ asset('invena-main/assets/images/about/icons/05.svg') }}" alt="">
                                </div>
                                <div class="discription">
                                    <h6 class="title">
                                        Growth Mindset
                                    </h6>
                                    <p class="disc">
                                        Sanjaykumar and Ilayabharathi started Webzac with a commitment to quality work and strong client relationships.
                                    </p>
                                </div>
                            </div>
                            <!-- ingle about end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about area end -->


    <!-- rts business grotha area start -->
    <div class="rts-business-groth-area rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="business-groth-inner-wrapper-5">
                        <div class="title-style-five">
                            <span class="pre">Business Growth</span>
                            <h2 class="title rts-text-anime-style-1">Contributing To Important <br> Global Initiatives
                            </h2>
                        </div>
                        <div class="progress-wrapper-about-4 mt--50 mb--50">

                            <div class="single-progress">
                                <h6 class="title">Business Solution</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s"
                                        data-wow-delay=".3s" role="progressbar" style="width: 100%" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <span class="progress-number">100%</span>
                                </div>
                            </div>
                            <div class="single-progress">
                                <h6 class="title">Empowering Success</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s"
                                        data-wow-delay=".3s" role="progressbar" style="width: 100%" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <span class="progress-number">100%</span>
                                </div>
                            </div>
                            <div class="single-progress">
                                <h6 class="title">Simplifying Success</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s"
                                        data-wow-delay=".3s" role="progressbar" style="width: 100%" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <span class="progress-number">100%</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('services') }}" class="rts-btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="business-groth-5-thumbnail">
                        <img src="{{ asset('invena-main/assets/images/business/02.webp') }}" alt="business">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts business grotha area ends -->


    <div class="rts-project-area rts-section-gap bg_project-5 bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-five center">
                        <span class="pre">Popular Projects</span>
                        <h2 class="title">Our Completed Projects</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-lg-12">
                    <div class="project-swiper-5-area">
                        <div class="swiper mySwiper-project-five" dir="ltr">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row g-5">
                                        <div class="col-lg-5">
                                            <div class="project-content-left-5">
                                                <div class="icon">
                                                    <img src="{{ asset('invena-main/assets/images/project/01.svg') }}" alt="project">
                                                </div>
                                                <div class="title-area">
                                                    <h6 class="title">Pro Business Solution</h6>
                                                    <span>Case Study, Growth</span>
                                                </div>
                                                <div class="inner">
                                                    <p class="disc">
                                                        Ornare etiam laoreet dictumst nisl quisque scelerisque cras ut
                                                        porta
                                                        interdum purus mattis iaculis litora turpis torquent posuere
                                                        sodales
                                                        himenaeos
                                                    </p>
                                                    <a href="{{ route('services') }}" class="rts-btn btn-primary">View
                                                        Project</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="thumbnail-project-5">
                                                <img src="{{ asset('invena-main/assets/images/project/11.webp') }}" alt="project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row g-5">
                                        <div class="col-lg-5">
                                            <div class="project-content-left-5">
                                                <div class="icon">
                                                    <img src="{{ asset('invena-main/assets/images/project/01.svg') }}" alt="project">
                                                </div>
                                                <div class="title-area">
                                                    <h6 class="title">Best Business Solution</h6>
                                                    <span>Case Study, Growth</span>
                                                </div>
                                                <div class="inner">
                                                    <p class="disc">
                                                        Ornare etiam laoreet dictumst nisl quisque scelerisque cras ut
                                                        porta
                                                        interdum purus mattis iaculis litora turpis torquent posuere
                                                        sodales
                                                        himenaeos
                                                    </p>
                                                    <a href="{{ route('services') }}" class="rts-btn btn-primary">View
                                                        Project</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="thumbnail-project-5">
                                                <img src="{{ asset('invena-main/assets/images/project/11.webp') }}" alt="project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row g-5">
                                        <div class="col-lg-5">
                                            <div class="project-content-left-5">
                                                <div class="icon">
                                                    <img src="{{ asset('invena-main/assets/images/project/01.svg') }}" alt="project">
                                                </div>
                                                <div class="title-area">
                                                    <h6 class="title">Pro Business Solution</h6>
                                                    <span>Case Study, Growth</span>
                                                </div>
                                                <div class="inner">
                                                    <p class="disc">
                                                        Ornare etiam laoreet dictumst nisl quisque scelerisque cras ut
                                                        porta
                                                        interdum purus mattis iaculis litora turpis torquent posuere
                                                        sodales
                                                        himenaeos
                                                    </p>
                                                    <a href="{{ route('services') }}" class="rts-btn btn-primary">View
                                                        Project</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="thumbnail-project-5">
                                                <img src="{{ asset('invena-main/assets/images/project/11.webp') }}" alt="project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination-fraction"></div>
                            <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="rts-blog-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-five center">
                        <span class="pre">Blog & Article</span>
                        <h2 class="title">Recent blog post</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <!-- single Post Start -->
                <div class="col-lg-4 col-md-6" data-animation="fadeInUp" data-delay="0.0" data-duration="1.2">
                    <!-- single Post blog large -->
                    <div class="rts-blog-h-2-wrapper">
                        <a href="{{ route('about') }}" class="thumbnail">
                            <img src="{{ asset('invena-main/assets/images/blog/04.webp') }}" alt="Business_blog">
                        </a>
                        <div class="body">
                            <span>Business Solution / by David Dolean</span>
                            <a href="{{ route('about') }}">
                                <h4 class="title">Building a Brand That from Market Leaders</h4>
                            </a>
                            <a class="rts-read-more btn-primary" href="{{ route('about') }}"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                    <!-- single Post blog large End -->
                </div>
                <!-- single Post End -->
                <!-- single Post Start -->
                <div class="col-lg-4 col-md-6" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                    <!-- single Post blog large -->
                    <div class="rts-blog-h-2-wrapper">
                        <a href="{{ route('about') }}" class="thumbnail">
                            <img src="{{ asset('invena-main/assets/images/blog/05.webp') }}" alt="Business_blog">
                        </a>
                        <div class="body">
                            <span>Business Solution / by David Dolean</span>
                            <a href="{{ route('about') }}">
                                <h4 class="title">Transforming Your Approach to Business</h4>
                            </a>
                            <a class="rts-read-more btn-primary" href="{{ route('about') }}"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                    <!-- single Post blog large End -->
                </div>
                <!-- single Post End -->
                <!-- single Post Start -->
                <div class="col-lg-4 col-md-6" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                    <!-- single Post blog large -->
                    <div class="rts-blog-h-2-wrapper">
                        <a href="{{ route('about') }}" class="thumbnail">
                            <img src="{{ asset('invena-main/assets/images/blog/06.webp') }}" alt="Business_blog">
                        </a>
                        <div class="body">
                            <span>Business Solution / by David Dolean</span>
                            <a href="{{ route('about') }}">
                                <h4 class="title">The quick settle tips of the new ages exist </h4>
                            </a>
                            <a class="rts-read-more btn-primary" href="{{ route('about') }}"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                    <!-- single Post blog large End -->
                </div>
                <!-- single Post End -->
            </div>
        </div>
    </div>



    <div class="rts-cta-area-one rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-main-area-wrapper-one bg_image">
                        <div class="left-areas">
                            <span class="pre">Latest Business Ideas</span>
                            <h3 class="title">Sign Up Newsletter</h3>
                        </div>
                        <div class="right-area">
                            <div class="inpur-area-main">
                                <input type="text" placeholder="Enter Email Address">
                                <a href="{{ route('contact') }}" class="rts-btn btn-primary">Subscribe Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="rts-footer-area ptb--100  footer-two footer-bg-two">
    <div class="container">
        <div class="row">
            <!-- single wized -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="footer-two-single-wized left">
                <div class="footer-about-logo mb--20">
                    <img src="{{ asset('images/logo.jpg') }}" alt="webzac logo" style="max-width: 150px; width: 100%; height: auto;">
                </div>
                    <h3 class="title animated fadeIn">
                        <span>Ready To</span> <br>
                        Work With Us?
                    </h3>
                    <p class="disc">
                        Felis consequat magnis est fames sagittis ultrices placerat sodales porttitor quisque.
                    </p>
                    <a class="rts-btn btn-primary" href="{{ route('contact') }}">Get a Quote</a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--50">
                <div class="footer-two-single-wized two">
                    <div class="wized-title-area">
                        <h5 class="wized-title">Our Services</h5>
                        <img src="{{ asset('invena-main/assets/images/footer/01.png') }}" alt="Invena_Footer">
                    </div>
                    <div class="wized-2-body">
                        <ul>
                            <li><a href="{{ route('services') }}"><i class="fal fa-chevron-double-right"></i>Business
                                    planning</a></li>
                            <li><a href="{{ route('services') }}"><i class="fal fa-chevron-double-right"></i>Tax
                                    strategy</a></li>
                            <li><a href="{{ route('services') }}"><i class="fal fa-chevron-double-right"></i>Financial
                                    advices</a></li>
                            <li><a href="{{ route('services') }}"><i class="fal fa-chevron-double-right"></i>Insurance
                                    strategy</a></li>
                            <li><a href="{{ route('services') }}"><i class="fal fa-chevron-double-right"></i>Manage
                                    investment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- single wized -->
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--30 mt_md--30">
                <div class="footer-two-single-wized">
                    <div class="wized-title-area">
                        <h5 class="wized-title">Contact Us</h5>
                        <img src="{{ asset('invena-main/assets/images/footer/01.png') }}" alt="Invena_Footer">
                    </div>
                    <div class="wized-2-body">
                        <div class="contact-info-1">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="disc">
                                <span>Call Us 24/7</span>
                                <a href="tel:+919655673754">+91 96556 73754</a>
                            </div>
                        </div>
                        <div class="contact-info-1">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="disc">
                                <span>Work with us</span>
                                <a href="mailto:info@webzac.online">info@webzac.online</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single wized -->
            <!-- single wized -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="footer-two-single-wized right">
                    <div class="wized-2-body">
                        <div class="contact-info-1">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="disc">
                                <span>Our Location</span>
                                <a href="https://maps.google.com/?q=TIDEL+NEO+Tiruppur" target="_blank" rel="noopener">Near Tidel Neo Tech Park, Poondi Nagar - Poondi <br> Tiruppur, Tamil Nadu, India</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single wized -->
        </div>
    </div>
</div>
<div class="rts-copy-right-1 ptb--30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-h-2-wrapper">
                    <p class="disc">
                        Webzac - Copyright
                        <script>
                            document.write(
                                new Date().getFullYear()
                            )
                        </script>. All rights reserved.
                    </p>
                    <div class="right">
                        <ul>
                            <li><a href="{{ route('about') }}">Company News</a></li>
                            <li><a href="{{ route('contact') }}">Faq</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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










