@extends('frontend.layouts.app')
@section('content')
<section class="page-title page-title-layout12 bg-overlay bg-overlay-gradient bg-parallax text-center">
    <div class="bg-img"><img src="{{asset('frontend/assets/images/pengumuman/background-pengumuman.png')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="pagetitle__heading">Pengumuman Terbaru</h1>
          <nav>
            <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
            </ol>
          </nav>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->
<section class="features-layout2 pt-130">
    <div class="container">
        <div class="row">
        <!-- Feature item #1 -->
        @foreach ($data_pengumuman as $item)
        <div class="col-lg-6 col-lg-6 col-lg-3">
            <div class="feature-item">
            <div class="feature__icon">
                <i class="icon-statistic"></i>
            </div>
            <h4 class="feature__title"><?= $item->pengumuman_judul ?></h4>
            <p class="feature__desc"><?= substr_replace($item->pengumuman_konten, "...", 150) ?></p>
            <a href="{{route('detail-pengumuman')}}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
                <span>Read More</span>
            </a>
          </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Features Layout 2 -->
@endsection