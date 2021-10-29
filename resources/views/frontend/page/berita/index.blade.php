@extends('frontend.app')
@section('content')
<!-- ========================
       page title 
=========================== -->
    <section class="page-title page-title-layout12 bg-overlay bg-overlay-gradient bg-parallax text-center">
        <div class="bg-img"><img src="{{asset('frontend/assets/images/page-titles/13.jpg')}}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pagetitle__heading">Berita Terbaru</h1>
              <nav>
                <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Berita</li>
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
            @foreach ($data_berita as $item)
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Support">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <a href="case-studies-single.html"><img src="{{asset('frontend/assets/images/berita/news.jpg')}}"
                    alt="portfolio img"></a>
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__icon">
                    <img src="{{asset('frontend/assets/images/icons/news.png')}}" alt="icon">
                  </div><!-- ')}}/.portfolio__icon -->
                  <div class="portfolio__content">
                    <h4 class="portfolio__title"><a href="#"><?= $item->berita_judul?></a></h4>
                    <p class="portfolio__desc"><?= substr_replace($item->berita_konten, "...", 150) ?></p>
                    <a href="{{route('detail-berita')}}" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.portfolio-content -->
                
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            @endforeach
            <!-- portfolio item #2 -->
        </div><!-- /.container -->
      </section><!-- /.portfolio layout 2 -->
@endsection