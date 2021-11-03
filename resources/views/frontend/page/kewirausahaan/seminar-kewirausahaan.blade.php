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
           <h1 class="pagetitle__heading">Seminar, Training dan Workshop</h1>
           <nav>
             <ol class="breadcrumb justify-content-center mb-0">
               <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
               <li class="breadcrumb-item active" aria-current="page">Seminar, Training dan Workshop</li>
             </ol>
           </nav>
         </div><!-- /.col-lg-12 -->
       </div><!-- /.row -->
   </div><!-- /.container -->
 </section><!-- /.page-title -->
<!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pb-50">
        <div class="container">
            <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-40">
                <h2 class="heading__subtitle">Kewirausahaan</h2>
                <h3 class="heading__title">Seminar, Training dan Workshop</h3>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
            <!-- Blog Item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                <div class="post__img">
                    <a href="{{route('detail-seminar-kewirausahaan')}}">
                    <img src="{{asset('frontend/assets/images/blog/grid/1.jpg')}}" alt="blog image">
                    </a>
                </div><!-- /.blog-img -->
                @foreach ($data_seminar as $i)
                <div class="post__body">
                    <h4 class="post__title"><a href="#"><?= $i->seminar_judul ?></a>
                    </h4>
                    <div class="post__meta">
                        <span class="post__meta-date"><?= $i->seminar_tanggal ?></span>
                    </div>
                    <p class="post__desc"><?= substr_replace($i->seminar_konten, "...", 150) ?></p>
                    <a href="{{route('detail-seminar-kewirausahaan')}}" class="btn btn__secondary btn__link">
                        <span>Read More</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
            @endforeach
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog Grid -->
    @endsection