@extends('frontend.layouts.app')
@section('content')
<!-- ========================
       page title 
=========================== -->
    <section class="page-title page-title-layout12 bg-overlay bg-overlay-gradient bg-parallax text-center">
        <div class="bg-img"><img src="{{asset('frontend/assets/images/page-titles/13.jpg')}}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pagetitle__heading">Informasi Kewirausahaan</h1>
              <nav>
                <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Informasi Kewirausahaan</li>
                </ol>
              </nav>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->
  
      <!-- =========================== 
        portfolio layout 2
      ============================= -->
      <section class="portfolio-layout2">
        <div class="container">
          <div id="filtered-items-wrap" class="row">
            <!-- portfolio item #1 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Support">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <a href="case-studies-single.html"><img src="{{asset('frontend/assets/images/berita/news.jpg')}}"
                      alt="portfolio img"></a>
                </div><!-- /.portfolio-img -->
                <div class="portfolio__icon">
                  <img src="{{asset('frontend/assets/images/icons/database.png')}}" alt="icon">
                </div><!-- ')}}/.portfolio__icon -->
                <div class="portfolio__content">
                  <h4 class="portfolio__title"><a href="#">Judul Informasi Kewirausahaan</a></h4>
                  <p class="portfolio__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nobis facere vitae cum expedita recusandae porro voluptatibus dolore corrupti. Error voluptatum veritatis eaque voluptatibus et rerum omnis corporis esse nesciunt!</p>
                  <a href="case-studies-single.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.portfolio-content -->
  
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.container -->
      </section><!-- /.portfolio layout 2 -->
@endsection