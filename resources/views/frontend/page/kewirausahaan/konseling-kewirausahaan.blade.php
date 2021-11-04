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
           <h1 class="pagetitle__heading">Konseling Kewirausahaan</h1>
           <nav>
             <ol class="breadcrumb justify-content-center mb-0">
               <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
               <li class="breadcrumb-item active" aria-current="page">Konseling Kewirausahaan</li>
             </ol>
           </nav>
         </div><!-- /.col-lg-12 -->
       </div><!-- /.row -->
   </div><!-- /.container -->
 </section><!-- /.page-title -->>
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
            @foreach ($data_konseling as $i)
            <div class="service-item">
                {{-- <div class="service__icon">
                    <i class="icon-server"></i>
                </div><!-- /.service__icon --> --}}
                <h4 class="service__title"><?= $i->konseling_judul ?></h4>
                <div class="service__content">
                    <p class="service__desc"><?= substr_replace($i->konseling_konten, "...", 150) ?>
                    </p>
                    <a href="{{url('detail-konseling-kewirausahaan'.$i->konseling_id)}}" class="btn btn__primary">
                        <span>Read More</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            @endforeach
            </div><!-- /.carousel -->
        </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Services Layout 1 -->
@endsection