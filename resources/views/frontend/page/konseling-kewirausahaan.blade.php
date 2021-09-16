@extends('frontend.app')
@section('content')
<!-- ========================
    Services Layout 1
=========================== -->
<section class="services-layout1 services-carousel pb-100">
    <div class="bg-img"><img src="{{asset('frontend/assets/images/backgrounds/5.png')}}" alt="backgrounds"></div>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
            <h2 class="heading__subtitle">Kewirausahaan</h2>
            <h3 class="heading__title">Konseling Kewirausahaan</h3>
            </div><!-- /.heading -->
        </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
        <div class="col-12">
            <div class="slick-carousel"
            data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
            <!-- service item #1 -->
            <div class="service-item">
                {{-- <div class="service__icon">
                <i class="icon-server"></i>
                </div><!-- /.service__icon --> --}}
                <h4 class="service__title">Judul Konseling Kewirausahaan</h4>
                <div class="service__content">
                <p class="service__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, ex nihil totam nesciunt doloribus nisi quod eius eum cupiditate laudantium quidem qui deserunt impedit neque deleniti eaque rerum harum eveniet.
                </p>
                <a href="it-solutions-single.html" class="btn btn__primary">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                </a>
                </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <!-- service item #2 -->
            <div class="service-item">
                {{-- <div class="service__icon">
                <i class="icon-cloud"></i>
                </div><!-- /.service__icon --> --}}
                <h4 class="service__title">Judul Konseling Kewirausahaan</h4>
                <div class="service__content">
                <p class="service__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, ex nihil totam nesciunt doloribus nisi quod eius eum cupiditate laudantium quidem qui deserunt impedit neque deleniti eaque rerum harum eveniet.</p>
                <a href="it-solutions-single.html" class="btn btn__primary">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                </a>
                </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <!-- service item #3 -->
            <div class="service-item">
                {{-- <div class="service__icon">
                <i class="icon-hosting"></i>
                </div><!-- /.service__icon --> --}}
                <h4 class="service__title">Judul Konseling Kewirausahaan</h4>
                <div class="service__content">
                <p class="service__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, ex nihil totam nesciunt doloribus nisi quod eius eum cupiditate laudantium quidem qui deserunt impedit neque deleniti eaque rerum harum eveniet.
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
@endsection