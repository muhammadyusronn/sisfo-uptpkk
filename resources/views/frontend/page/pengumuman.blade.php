@extends('frontend.app')
@section('content')
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
@endsection