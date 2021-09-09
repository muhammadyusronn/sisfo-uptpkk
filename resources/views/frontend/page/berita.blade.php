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
                  <h4 class="portfolio__title"><a href="#">Financial’s Need For
                      Strategic Advisor</a></h4>
                  <p class="portfolio__desc">We delivered solutions at every step, and moved seamlessly into a more
                    proactive role as a strategic advisor, providing support and guidance across all IT topics.</p>
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
                  <h4 class="portfolio__title"><a href="#">24x7 System Monitoring
                      and Alert Response</a></h4>
                  <p class="portfolio__desc">This single, unified platform integrates all operational phases of
                    selling and activation of their wireless services and devices, and serves as the backbone .</p>
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
                  <h4 class="portfolio__title"><a href="#">Nonprofit Organization
                      Utilized Security</a></h4>
                  <p class="portfolio__desc">Servers going down on a weekly basis had become the organization’s
                    “normal.” We came on board with the objective of stabilizing the environment,</p>
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
                  <h4 class="portfolio__title"><a href="#">Powerful IT Upgrade Aligns
                      With Your Objectives</a></h4>
                  <p class="portfolio__desc">They needed a robust management solution to organize archive critical
                    documents for client cases, and wanted to determine solutions at every step.</p>
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
                  <h4 class="portfolio__title"><a href="#">The Best IT Practices in
                      Cloud and Security</a></h4>
                  <p class="portfolio__desc">A standardized set of practices, we produce an extensive report
                    recommendations, and health ratings for each technolog phases of selling .</p>
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
                  <h4 class="portfolio__title"><a href="#">Helping Companies With
                      Healthcare Inustry</a></h4>
                  <p class="portfolio__desc">The client was not satisfied with the level of responsiveness and the
                    lack of support provided by their previous service with the objective of stabilizing.</p>
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
@endsection