{{-- @extends('layouts.app') --}}
@section('content')
<!-- ============================
            Slider
============================== -->
<section class="slider">
    <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
        <div class="bg-img"><img src="{{asset('frontend/assets/images/sliders/1.jpg')}}" alt="slide img"></div>
        <div class="container">
            <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                <span class="slide__subtitle">Provides Consultative Approach On Emerging Technology.</span>
                <h2 class="slide__title">Help Challenge Critical Activities</h2>
                <p class="slide__desc">We are experienced professionals who understand that It services is changing,
                    and are true partners who care about your success. </p>
                <div class="d-flex flex-wrap align-items-center">
                    <a href="about-us.html" class="btn btn__primary btn__primary-style2 mr-30">
                    <i class="icon-arrow-right"></i>
                    <span>More About Us</span>
                    </a>
                    <a href="it-solutions.html" class="btn btn__white">Our Services</a>
                </div>
                </div><!-- /.slide-content -->
            </div><!-- /.col-xl-7 -->
            <div class="col-xl-5 d-none d-xl-flex justify-content-end">
                <div class="cta-banner">
                <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": false, "dots": true}'>
                    <div>
                    <div class="cta__icon">
                        <i class="icon-file"></i>
                    </div>
                    <h4 class="cta__title mb-0">Thinking insights, verified research, and make right decisions!</h4>
                    </div>
                    <div>
                    <div class="cta__icon">
                        <i class="icon-network"></i>
                    </div>
                    <h4 class="cta__title mb-0">Utilising the latest processing solutions & decades of experience.
                    </h4>
                    </div>
                </div>
                </div><!-- /.cta-banner -->
            </div><!-- /.col-xl-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
        <div class="bg-img"><img src="{{asset('frontend/assets/images/sliders/2.jpg')}}" alt="slide img"></div>
        <div class="container">
            <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                <span class="slide__subtitle">Provides Consultative Approach On Emerging Technology.</span>
                <h2 class="slide__title">Help Challenge Critical Activities</h2>
                <p class="slide__desc">We are experienced professionals who understand that It services is changing,
                    and are true partners who care about your success. </p>
                <div class="d-flex flex-wrap align-items-center">
                    <a href="about-us.html" class="btn btn__primary btn__primary-style2 mr-30">
                    <i class="icon-arrow-right"></i>
                    <span>More About Us</span>
                    </a>
                    <a href="it-solutions.html" class="btn btn__white">Our Services</a>
                </div>
                </div><!-- /.slide-content -->
            </div><!-- /.col-xl-7 -->
            <div class="col-xl-5 d-none d-xl-flex justify-content-end">
                <div class="cta-banner">
                <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": false, "dots": true}'>
                    <div>
                    <div class="cta__icon">
                        <i class="icon-network"></i>
                    </div>
                    <h4 class="cta__title mb-0">Utilising the latest processing solutions & decades of experience.
                    </h4>
                    </div>
                    <div>
                    <div class="cta__icon">
                        <i class="icon-file"></i>
                    </div>
                    <h4 class="cta__title mb-0">Thinking insights, verified research, and make right decisions!</h4>
                    </div>
                </div>
                </div><!-- /.cta-banner -->
            </div><!-- /.col-xl-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        </div><!-- /.slide-item -->
    </div><!-- /.carousel -->
</section><!-- /.slider -->
<section class="portfolio-layout2">
  <div class="container">
    <nav>
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Berita</li>
        </ol>
        </nav>
    <div id="filtered-items-wrap" class="row">
    <!-- portfolio item #1 -->
    <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Support">
        <div class="portfolio-item">
        <div class="portfolio__img">
            <a href="case-studies-single.html"><img src="{{asset('frontend/assets/images/berita/news.jpg')}}"
                alt="portfolio img"></a>
        </div><!-- /.portfolio-img -->
        <div class="portfolio__icon">
            <img src="{{asset('frontend/assets/images/icons/1.png')}}" alt="icon">
        </div><!-- ')}}/.portfolio__icon -->
        <div class="portfolio__content">
            <h4 class="portfolio__title"><a href="#">Judul Berita</a></h4>
            <p class="portfolio__desc">Isi berita.</p>
            <a href="case-studies-single.html" class="btn btn__secondary btn__link">
            <span>Read More</span>
            <i class="icon-arrow-right"></i>
            </a>
        </div><!-- /.portfolio-content -->

        </div><!-- /.portfolio-item -->
    </div><!-- /.col-lg-4 -->
    <!-- portfolio item #2 -->
    <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Consulting">
        <div class="portfolio-item">
        <div class="portfolio__img">
            <a href="case-studies-single.html"><img src="{{asset('frontend/assets/images/berita/news.jpg')}}"
                alt="portfolio img"></a>
        </div><!-- /.portfolio-img -->
        <div class="portfolio__icon">
            <img src="{{asset('frontend/assets/images/icons/2.png')}}" alt="icon">
        </div><!-- /.portfolio__icon -->
        <div class="portfolio__content">
            <h4 class="portfolio__title"><a href="#">Judul Berita</a></h4>
            <p class="portfolio__desc">Isi berita.</p>
            <a href="case-studies-single.html" class="btn btn__secondary btn__link">
            <span>Read More</span>
            <i class="icon-arrow-right"></i>
            </a>
        </div><!-- /.portfolio-content -->
        </div><!-- /.portfolio-item -->
    </div><!-- /.col-lg-4 -->
    <!-- portfolio item #3 -->
    <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Security">
        <div class="portfolio-item">
        <div class="portfolio__img">
            <a href="case-studies-single.html"><img src="{{asset('frontend/assets/images/berita/news.jpg')}}"
                alt="portfolio img"></a>
        </div><!-- /.portfolio-img -->
        <div class="portfolio__icon">
            <img src="{{asset('frontend/assets/images/icons/3.png')}}" alt="icon">
        </div><!-- portfolio__icon -->
        <div class="portfolio__content">
            <h4 class="portfolio__title"><a href="#">Judul Berita</a></h4>
            <p class="portfolio__desc">Isi berita.</p>
            <a href="case-studies-single.html" class="btn btn__secondary btn__link">
            <span>Read More</span>
            <i class="icon-arrow-right"></i>
            </a>
        </div><!-- /.portfolio-content -->
        </div><!-- /.portfolio-item -->
    </div><!-- /.col-lg-4 -->
    <!-- portfolio item #4 -->
    <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Software">
        <div class="portfolio-item">
        <div class="portfolio__img">
            <a href="case-studies-single.html"><img src="{{asset('frontend/assets/images/berita/news.jpg')}}" alt="portfolio img"></a>
        </div><!-- /.portfolio-img -->
        <div class="portfolio__icon">
            <img src="{{asset('frontend/assets/images/icons/4.png')}}" alt="icon">
        </div><!-- /.portfolio__icon -->
        <div class="portfolio__content">
            <h4 class="portfolio__title"><a href="#">Judul Berita</a></h4>
            <p class="portfolio__desc">Isi berita.</p>
            <a href="case-studies-single.html" class="btn btn__secondary btn__link">
            <span>Read More</span>
            <i class="icon-arrow-right"></i>
            </a>
        </div><!-- /.portfolio-content -->
        </div><!-- /.portfolio-item -->
    </div><!-- /.col-lg-4 -->
    <!-- portfolio item #5 -->
    <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Management">
        <div class="portfolio-item">
        <div class="portfolio__img">
            <a href="case-studies-single.html"><img src="{{asset('frontend/assets/images/berita/news.jpg')}}"
                alt="portfolio img"></a>
        </div><!-- /.portfolio-img -->
        <div class="portfolio__icon">
            <img src="{{asset('frontend/assets/images/icons/5.png')}}" alt="icon">
        </div><!-- /.portfolio__icon -->
        <div class="portfolio__content">
            <h4 class="portfolio__title"><a href="#">Judul Berita</a></h4>
            <p class="portfolio__desc">Isi berita.</p>
            <a href="case-studies-single.html" class="btn btn__secondary btn__link">
            <span>Read More</span>
            <i class="icon-arrow-right"></i>
            </a>
        </div><!-- /.portfolio-content -->
        </div><!-- /.portfolio-item -->
    </div><!-- /.col-lg-4 -->
    <!-- portfolio item #6 -->
    <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Cloud">
        <div class="portfolio-item">
        <div class="portfolio__img">
            <a href="case-studies-single.html"><img src="{{asset('frontend/assets/images/berita/news.jpg')}}"
                alt="portfolio img"></a>
        </div><!-- /.portfolio-img -->
        <div class="portfolio__icon">
            <img src="{{asset('frontend/assets/images/icons/6.png')}}" alt="icon">
        </div><!-- /.portfolio__icon -->
        <div class="portfolio__content">
            <h4 class="portfolio__title"><a href="#">Judul Berita</a></h4>
            <p class="portfolio__desc">Isi berita.</p>
            <a href="case-studies-single.html" class="btn btn__secondary btn__link">
            <span>Read More</span>
            <i class="icon-arrow-right"></i>
            </a>
        </div><!-- /.portfolio-content -->
        </div><!-- /.portfolio-item -->
    </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
        <nav class="pagination-area">
        <ul class="pagination justify-content-center mb-0">
            <li><a class="current" href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#"><i class="icon-arrow-right"></i></a></li>
        </ul>
        </nav><!-- .pagination-area -->
    </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.portfolio layout 2 -->
<section class="features-layout2 bg-overlay bg-overlay-secondary-gradient pt-130">
    <div class="bg-img"><img src="{{asset('frontend/assets/images/banners/4.jpg')}}" alt="background"></div>
    <div class="container">
        <div class="row mb-40">
        <div class="col-sm-12 col-md-12 col-lg-5">
            <h2 class="heading__subtitle color-primary">Pengumuman Terbaru</h2>
            <h3 class="heading__title color-white">Pengumuman Terbaru
            </h3>
        </div><!-- /col-lg-5 -->
        {{-- <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
            <p class="heading__desc color-gray">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere maxime velit earum explicabo ex quidem eum accusantium eos nostrum adipisci recusandae, esse quia corporis nulla error ab. Officiis, id molestias?
            </p>
            <div class="d-flex flex-wrap mt-40 mb-30">
            <a href="#" class="btn btn__primary btn__primary-style2 mr-30">
                <i class="icon-arrow-right"></i>
                <span>Get Started</span>
            </a>
            <a href="#" class="btn btn__white btn__outlined">Request A Demo</a>
            </div>
        </div><!-- /.col-lg-6 --> --}}
        </div><!-- /.row -->
        <div class="row">
        <!-- Feature item #1 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
            <div class="feature__icon">
                <i class="icon-statistic"></i>
            </div>
            <h4 class="feature__title">Judul Pengumuman</h4>
            <p class="feature__desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora incidunt itaque, eligendi iure aut doloribus nisi perspiciatis. Eligendi deserunt molestiae sint exercitationem, cum quam voluptate reprehenderit modi possimus? Cumque, possimus.</p>
            <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>Read More</span>
            </a>
            </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        <!-- Feature item #2 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
            <div class="feature__icon">
                <i class="icon-software"></i>
            </div>
            <h4 class="feature__title">Judul Pengumuman</h4>
            <p class="feature__desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora incidunt itaque, eligendi iure aut doloribus nisi perspiciatis. Eligendi deserunt molestiae sint exercitationem, cum quam voluptate reprehenderit modi possimus? Cumque, possimus.</p>
            <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>Read More</span>
            </a>
            </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        <!-- Feature item #3 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
            <div class="feature__icon">
                <i class="icon-website"></i>
            </div>
            <h4 class="feature__title">Judul Pengumuman</h4>
            <p class="feature__desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora incidunt itaque, eligendi iure aut doloribus nisi perspiciatis. Eligendi deserunt molestiae sint exercitationem, cum quam voluptate reprehenderit modi possimus? Cumque, possimus.</p>
            <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>Read More</span>
            </a>
            </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        <!-- Feature item #4 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
            <div class="feature__icon">
                <i class="icon-management"></i>
            </div>
            <h4 class="feature__title">Judul Pengumuman</h4>
            <p class="feature__desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora incidunt itaque, eligendi iure aut doloribus nisi perspiciatis. Eligendi deserunt molestiae sint exercitationem, cum quam voluptate reprehenderit modi possimus? Cumque, possimus.</p>
            <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>Read More</span>
            </a>
            </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
        <div class="row">
        <div class="col-12 text-center mt-40">
            <p class="font-weight-bold color-white mb-0">Feel free to contact us, or you can call us any time
            <a href="tel:(002) 01061245741" class="color-white-hover">(002) 01061245741</a>
            </p>
        </div>
        </div>
    </div><!-- /.container -->
</section><!-- /.Features Layout 2 -->
<!-- ========================
About Layout 2
=========================== -->
<section class="about-layout2 pt-130 pb-90">
<div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
        <div class="about__img mb-40">
        <img src="{{asset('frontend/assets/images/about/1.jpg')}}" alt="about">
        <blockquote class="blockquote mb-0">
            <h4 class="blockquote__title">You are helping to lead the charge; we can help you build on your
            past successes and prepare for your great future.
            </h4>
            <span class="blockquote__author">John Peter, Founder</span>
        </blockquote>
        </div><!-- /.about-img -->
    </div><!-- /.col-xl-5 -->
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-1">
        <div class="heading-layout2 mb-40">
        <h2 class="heading__subtitle">Improve Efficiency and Provide Better Experiences!</h2>
        <h3 class="heading__title">Keep Your Business Safe & Ensure High Availability.</h3>
        </div><!-- /heading -->
        <div class="about-text-wrapper">
        <div class="about__Text">
            <p class="font-weight-bold mb-30">As one of the world's largest ITService Providers, our deep pool of
            over
            130 certified engineers and IT
            support staff are ready to help.</p>
            <p>Provide users with appropriate view and access permissions to requests, problems, changes, contracts,
            assets, solutions, and reports with our experienced professionals.</p>
        </div>
        <a href="#" class="btn btn__primary btn__icon mt-30">
            <span>Schedule An Appointment</span><i class="icon-arrow-right"></i>
        </a>
        <ul class="list-items list-items-layout2 list-unstyled mb-0 mt-60">
            <li>Delivered in more than 450,000 client’s interactions </li>
            <li>Provided by experts to help challenge critical activities</li>
            <li>Complemented with peer perspectives and advice</li>
        </ul>
        </div>
    </div><!-- /.col-xl-7 -->
    </div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.About Layout 2 -->

 <!-- ========================
        Services Layout 1
    =========================== -->
<section class="services-layout1 services-carousel pb-100">
    <div class="bg-img"><img src="{{asset('frontend/assets/images/backgrounds/5.png')}}" alt="backgrounds"></div>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
            <h2 class="heading__subtitle">Nationwide Service, Local Expertise</h2>
            <h3 class="heading__title">Offer The Latest Software And Solutions To Our customers! </h3>
            </div><!-- /.heading -->
        </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
        <div class="col-12">
            <div class="slick-carousel"
            data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
            <!-- service item #1 -->
            <div class="service-item">
                <div class="service__icon">
                <i class="icon-server"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">IT Management <br> Services</h4>
                <div class="service__content">
                <p class="service__desc">IT management service that manages and oversees the IT of organization
                    responsible for network and operations which includes data communication.
                </p>
                <a href="it-solutions-single.html" class="btn btn__primary">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                </a>
                </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <!-- service item #2 -->
            <div class="service-item">
                <div class="service__icon">
                <i class="icon-cloud"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Cyber Security<br> Services</h4>
                <div class="service__content">
                <p class="service__desc">Drive your business and manage risk with a global industry leader in
                    cybersecurity, cloud, and managed security services and extend your team with leading experts.</p>
                <a href="it-solutions-single.html" class="btn btn__primary">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                </a>
                </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <!-- service item #3 -->
            <div class="service-item">
                <div class="service__icon">
                <i class="icon-hosting"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Cloud Computing<br> Services</h4>
                <div class="service__content">
                <p class="service__desc">Cloud computing is the on-demand availability of computer system
                    resources, especially data storage and computing power, without direct active management .
                </p>
                <a href="it-solutions-single.html" class="btn btn__primary">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                </a>
                </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <!-- service item #4 -->
            <div class="service-item">
                <div class="service__icon">
                <i class="icon-technician"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">IT Consulting <br> Services</h4>
                <div class="service__content">
                <p class="service__desc">Trying to solve all your IT challenges internally can become costly and a
                    major distraction, Leveraging knowledgeable IT consulting firms like ushelps your business.</p>
                <a href="it-solutions-single.html" class="btn btn__primary">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                </a>
                </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <!-- service item #5 -->
            <div class="service-item">
                <div class="service__icon">
                <i class="icon-programming"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Software Dev<br> Services</h4>
                <div class="service__content">
                <p class="service__desc">With shorter product cycles, rapid innovation, and mergers contributing to
                    constant change, you are faced with making business decisions every day to advance your mission.
                </p>
                <a href="it-solutions-single.html" class="btn btn__primary">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                </a>
                </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <!-- service item #6 -->
            <div class="service-item">
                <div class="service__icon">
                <i class="icon-programming"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Backup & Recovery<br> Services</h4>
                <div class="service__content">
                <p class="service__desc">While you can’t predict unexpected events, we’ll ensure the right
                    precautions
                    are in place to minimize downtime and keep you moving in the right direction.</p>
                <a href="it-solutions-single.html" class="btn btn__primary">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                </a>
                </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            </div><!-- /.carousel -->
        </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
        <div class="col-12 text-center">
            <p class="text__link mt-20 mb-0">Working hard to earn our customers’ trust.
            <a href="industries.html" class="btn btn__secondary btn__link mx-1">
                <span>Explore All Services</span> <i class="icon-arrow-right icon-outlined"></i>
            </a>
            </p>
        </div><!-- /.col-lg-6 -->
        </div>
    </div><!-- /.container -->
</section><!-- /.Services Layout 1 -->
<!-- ======================
    Features Layout 2
    ========================= -->
<section class="features-layout2 bg-overlay bg-overlay-secondary-gradient pt-130">
    <div class="bg-img"><img src="{{asset('frontend/assets/images/banners/4.jpg')}}" alt="background"></div>
    <div class="container">
        <div class="row mb-40">
        <div class="col-sm-12 col-md-12 col-lg-5">
            <h2 class="heading__subtitle color-primary">Ensure High Availability of Your Services</h2>
            <h3 class="heading__title color-white">Improve Efficiency And Provide Better Experience By Our IT
            Solutions!
            </h3>
        </div><!-- /col-lg-5 -->
        <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
            <p class="heading__desc color-gray">Trusted by the world's best organizations, for 15 years and running,
            it has been delivering smiles to hundreds of IT advisors, developers, users, and business owners. Easy
            solutions for
            all difficult IT problems to ensure high availability.
            </p>
            <div class="d-flex flex-wrap mt-40 mb-30">
            <a href="#" class="btn btn__primary btn__primary-style2 mr-30">
                <i class="icon-arrow-right"></i>
                <span>Get Started</span>
            </a>
            <a href="#" class="btn btn__white btn__outlined">Request A Demo</a>
            </div>
        </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
        <!-- Feature item #1 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
            <div class="feature__icon">
                <i class="icon-statistic"></i>
            </div>
            <h4 class="feature__title">Software Asset Management</h4>
            <p class="feature__desc">Extend proven Tech best practices to HR, finance, and other service delivery
                areas.</p>
            <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>Read More</span>
            </a>
            </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        <!-- Feature item #2 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
            <div class="feature__icon">
                <i class="icon-software"></i>
            </div>
            <h4 class="feature__title">Software License Management</h4>
            <p class="feature__desc">Build dynamic request templates with associated workflows, and tasks.</p>
            <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>Read More</span>
            </a>
            </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        <!-- Feature item #3 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
            <div class="feature__icon">
                <i class="icon-website"></i>
            </div>
            <h4 class="feature__title">Knowledge Base & Live Chat</h4>
            <p class="feature__desc">Build dynamic request templates with associated workflows, and tasks.</p>
            <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>Read More</span>
            </a>
            </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        <!-- Feature item #4 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
            <div class="feature__icon">
                <i class="icon-management"></i>
            </div>
            <h4 class="feature__title">Privileged Access Management</h4>
            <p class="feature__desc">Extend proven Tech best practices to HR, finance, and other service delivery
                areas.</p>
            <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>Read More</span>
            </a>
            </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
        <div class="row">
        <div class="col-12 text-center mt-40">
            <p class="font-weight-bold color-white mb-0">Feel free to contact us, or you can call us any time
            <a href="tel:(002) 01061245741" class="color-white-hover">(002) 01061245741</a>
            </p>
        </div>
        </div>
    </div><!-- /.container -->
</section><!-- /.Features Layout 2 -->
<!-- ==========================
        contact layout 2
=========================== -->
<section class="contact-layout2 py-0">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="contact-panel d-flex flex-wrap">
            <div class="stats-banner contact-panel__info d-flex flex-column justify-content-between">
                <div class="bg-img"><img src="{{asset('frontend/assets/images/backgrounds/1.jpg')}}" alt="banner"></div>
                <div class="slick-carousel carousel-dots-light counters-light mb-40"
                data-slick='{"slidesToShow": 1, "arrows": false, "dots": true, "speed": 700}'>
                <div class="counter-item">
                    <h4 class="counter color-white">6,154</h4>
                    <p class="counter__desc">Projects And Software Developed in 2021</p>
                </div><!-- /.counter-item -->
                <div class="counter-item">
                    <h4 class="counter color-white">6,154</h4>
                    <p class="counter__desc">Projects And Software Developed in 2021</p>
                </div><!-- /.counter-item -->
                </div><!-- /.slick-carousel -->
                <div>
                <h4 class="stats-banner__ttile mb-20">As one of the world's largest IT Service Providers, our
                    deep pool of certified engineers and IT staff are ready to help you to keep business safe & ensure
                    high availability.
                </h4>
                <a href="industries.html" class="btn btn__white btn__link">
                    <span>Customers’ Stories</span> <i class="icon-arrow-right icon-outlined"></i>
                </a>
                </div>
            </div><!-- /.stats-banner-->
            <form class="contact-panel__form" method="post" action="https://7oroof.com/demos/datasoft/assets/php/contact.php" id="contactForm">
                <div class="row">
                <div class="col-sm-12">
                    <h4 class="contact-panel__title">Request A Quote</h4>
                    <p class="contact-panel__desc mb-20">Our deep pool of certified engineers and IT staff are ready to
                    help you to keep your IT business safe & ensure high availability.</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                        required>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" id="contact-email"
                        name="contact-email" required>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                    <select class="form-control">
                        <option value="1">Inquiry</option>
                        <option value="2">case study</option>
                    </select>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                        name="contact-phone" required>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-12">
                    <div class="form-group">
                    <textarea class="form-control" placeholder="Describe your inquirey!" id="contact-message"
                        name="contact-message"></textarea>
                    </div>
                    <button type="submit" class="btn btn__secondary btn__icon btn__xhight mt-10">
                    <span>Submit Request</span> <i class="icon-arrow-right"></i>
                    </button>
                    <div class="contact-result"></div>
                </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </form><!-- /.contact-panel__form -->
            </div>
        </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact layout 2 -->

<!-- ======================
      Blog Grid
    ========================= -->
<section class="blog-grid pb-50">
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
            <h2 class="heading__subtitle">Resource Library</h2>
            <h3 class="heading__title">Recent Articles</h3>
            </div><!-- /.heading -->
        </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
        <!-- Blog Item #1 -->
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
            <div class="post__img">
                <a href="blog-single-post.html">
                <img src="{{asset('frontend/assets/images/blog/grid/1.jpg')}}" alt="blog image">
                </a>
            </div><!-- /.blog-img -->
            <div class="post__body">
                <div class="post__meta-cat">
                <a href="#">Consulting</a><a href="#">Sales</a>
                </div><!-- /.blog-meta-cat -->
                <h4 class="post__title"><a href="#">Five Ways to Develop a World Class Sales Operations
                    Function</a>
                </h4>
                <div class="post__meta">
                <span class="post__meta-date">Jan 30, 2020</span>
                </div>
                <p class="post__desc">Outsourcing IT infrastructure is a concept that has been around for a while.
                Characterized in terms of technicians and engineers, workstations and servers, the idea of outsourcing
                ...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
                </a>
            </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
        </div><!-- /.col-lg-4 -->
        <!-- Blog Item #2 -->
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
            <div class="post__img">
                <a href="blog-single-post.html">
                <img src="{{asset('frontend/assets/images/blog/grid/2.jpg')}}" alt="blog image">
                </a>
            </div><!-- /.blog-img -->
            <div class="post__body">
                <div class="post__meta-cat">
                <a href="#">Tech</a><a href="#">Communications</a>
                </div><!-- /.blog-meta-cat -->
                <h4 class="post__title"><a href="#">Succession Risks That Threaten Your Leadership Strategy</a>
                </h4>
                <div class="post__meta">
                <span class="post__meta-date">Jan 30, 2020</span>
                </div>
                <p class="post__desc">Today’s organizations need a quality bench of leaders to drive business
                outcomes and satisfy employees, customers and investors who now demand more transparency and
                accountability...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
                </a>
            </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
        </div><!-- /.col-lg-4 -->
        <!-- Blog Item #3 -->
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
            <div class="post__img">
                <a href="blog-single-post.html">
                <img src="{{asset('frontend/assets/images/blog/grid/3.jpg')}}" alt="blog image">
                </a>
            </div><!-- /.blog-img -->
            <div class="post__body">
                <div class="post__meta-cat">
                <a href="#">Digital Business</a><a href="#">Cloud</a>
                </div><!-- /.blog-meta-cat -->
                <h4 class="post__title"><a href="#">What Do Employee Engagement Surveys Tell You About
                    Employee?</a>
                </h4>
                <div class="post__meta">
                <span class="post__meta-date">Jan 30, 2020</span>
                </div>
                <p class="post__desc">Outsourcing IT infrastructure is a concept that has been around for a while.
                Characterized in terms of technicians and engineers, workstations and servers, the idea of outsourcing
                ...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
                </a>
            </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
        </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Grid -->  

@endsection