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
                  <p class="portfolio__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, beatae assumenda. Similique, atque magnam. Architecto omnis qui nulla. Voluptatem illo sed dolores quas, quisquam dolorum eius odio? Possimus, rerum voluptatum?</p>
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
                  <p class="portfolio__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, beatae assumenda. Similique, atque magnam. Architecto omnis qui nulla. Voluptatem illo sed dolores quas, quisquam dolorum eius odio? Possimus, rerum voluptatum?</p>
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
                  <p class="portfolio__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, beatae assumenda. Similique, atque magnam. Architecto omnis qui nulla. Voluptatem illo sed dolores quas, quisquam dolorum eius odio? Possimus, rerum voluptatum?,</p>
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
                  <p class="portfolio__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, beatae assumenda. Similique, atque magnam. Architecto omnis qui nulla. Voluptatem illo sed dolores quas, quisquam dolorum eius odio? Possimus, rerum voluptatum?</p>
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
                  <p class="portfolio__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, beatae assumenda. Similique, atque magnam. Architecto omnis qui nulla. Voluptatem illo sed dolores quas, quisquam dolorum eius odio? Possimus, rerum voluptatum?</p>
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
                  <p class="portfolio__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, beatae assumenda. Similique, atque magnam. Architecto omnis qui nulla. Voluptatem illo sed dolores quas, quisquam dolorum eius odio? Possimus, rerum voluptatum?</p>
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
      </section><!-- /.portfolio layout 2 -->
@endsection