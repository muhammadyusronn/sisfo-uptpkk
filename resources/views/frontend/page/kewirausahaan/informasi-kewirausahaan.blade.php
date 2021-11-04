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
    @foreach ($data_informasi as $i)
    <!-- portfolio item #1 -->
    <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Support">
      <div class="portfolio-item">
        <div class="portfolio__img">
          @if($i->informasi_foto)
          <a href="#"><img src="{{asset('storage/informasi_kewirausahaan/'.$i->informasi_foto)}}"alt="portfolio img"></a>
          @else
          <a href="#"><img src="{{asset('frontend/assets/images/berita/news.jpg')}}"alt="portfolio img"></a>
          @endif
        </div><!-- /.portfolio-img -->
        <div class="portfolio__icon">
          <img src="{{asset('frontend/assets/images/icons/database.png')}}" alt="icon">
        </div><!-- ')}}/.portfolio__icon -->
        <div class="portfolio__content">
          <h4 class="portfolio__title"><a href="#"><?= $i->informasi_judul ?></a></h4>
          <p class="portfolio__desc"><?= substr_replace($i->informasi_konten, "...", 150) ?></p>
          <a href="#" class="btn btn__secondary btn__link">
            <span>Read More</span>
            <i class="icon-arrow-right"></i>
          </a>
        </div><!-- /.portfolio-content -->
        
      </div><!-- /.portfolio-item -->
    </div><!-- /.col-lg-4 -->
    @endforeach
  </div><!-- /.container -->
</div>
</section><!-- /.portfolio layout 2 -->
@endsection