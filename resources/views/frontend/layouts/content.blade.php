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
            <a href="{{route('detail-berita')}}" class="btn btn__secondary btn__link">
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
            <a href="{{route('detail-berita')}}" class="btn btn__secondary btn__link">
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
            <a href="{{route('detail-berita')}}" class="btn btn__secondary btn__link">
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
            <a href="{{route('detail-berita')}}" class="btn btn__secondary btn__link">
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
            <a href="{{route('detail-berita')}}" class="btn btn__secondary btn__link">
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
            <a href="{{route('detail-berita')}}" class="btn btn__secondary btn__link">
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
</section><!-- /.berita terbaru layout 2 -->
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
            <a href="{{route('detail-pengumuman')}}" class="btn__link">
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
            <a href="{{route('detail-pengumuman')}}" class="btn__link">
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
            <a href="{{route('detail-pengumuman')}}" class="btn__link">
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
            <a href="{{route('detail-pengumuman')}}" class="btn__link">
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
</section><!-- /.Pengumuman terbaru Layout 2 -->

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

<!-- ==========================
        contact layout 2
=========================== -->
{{-- <section class="contact-layout2 py-0">
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
</section><!-- /.contact layout 2 --> --}}

  

@endsection