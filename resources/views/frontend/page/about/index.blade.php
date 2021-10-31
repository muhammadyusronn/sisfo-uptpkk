@extends('frontend.layouts.app')
@section('content')
<section class="page-title-detail" style="background-color: #091d3e">
</section><!-- /.page-title -->
<!-- ========================
      About Layout 2
=========================== -->
<section class="about-layout2 pt-130 pb-90" >
    <div class="container">
        @foreach ($data_struktur as $i)
        <img src=""><?= $i->struktur_foto ?>
        @endforeach
    </div>
    <div class="container">
        <div class="row">
            @foreach ($data_visimisi as $i)
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                <div class="heading-layout2 mb-40">
                    <h2 class="heading__subtitle">Visi dan Misi UPTPKK</h2>
                    <h3 class="heading__title">Visi</h3>
                </div><!-- /heading -->
                <div class="about-text-wrapper">
                    <div class="about__Text">
                        <p class="font-weight-bold mb-30"><?= $i->visi_konten ?></p>
                    </div>
                </div>
                <div class="heading-layout2 mb-40">
                    <h3 class="heading__title">Misi</h3>
                    </div><!-- /heading -->
                    <div class="about-text-wrapper">
                        <div class="about__Text">
                            <p class="font-weight-bold mb-30"><?= $i->misi_konten ?></p>
                        </div>
                    </div>
            </div><!-- /.col-xl-7 -->
            @endforeach
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-5  offset-xl-1">
                <div class="about__img mb-40">
                    <h4 class="blockquote__title">Tujuan Pokok UPTPKK
                    </h4>
                    <span class="blockquote__author"><?= $i->tujuan_konten ?></span>
                </div><!-- /.about-img -->
                </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.About Layout 2 -->

<!-- ======================
    History Timeline
========================= -->
<section class="history-timeline pt-130 pb-100 mb-100">
    <div class="bg-img"><img src="{{asset('frontend/assets/images/backgrounds/2.jpg')}}" alt="background"></div>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <h2 class="heading__subtitle color-primary">Eksplor sejarah kami!!</h2>
            <h3 class="heading__title color-white">Kami membantu perjalanan karir kamu</h3>
        </div><!-- /.col-lg-6 -->
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div>
            <!-- timeline Item #1 -->
            <div class="timeline-item d-flex">
                <h4 class="timeline__year">2005</h4>
                <p class="timeline__desc">We partner with you to enable your technology so that you can focus on your
                organization’s mission leverage our talent, and creativity to help your business succeed above all
                your
                business competitors.
                </p>
            </div><!-- /.timeline-item -->
            <!-- timeline Item #2 -->
            <div class="timeline-item d-flex">
                <h4 class="timeline__year">2010</h4>
                <p class="timeline__desc">Our support works around the clock to ensure your work is secure and monitored
                safely. You have access to over 99 IT professionals working together to provide you with the most
                efficient IT solutions.</p>
            </div><!-- /.timeline-item -->
            <!-- timeline Item #3 -->
            <div class="timeline-item d-flex">
                <h4 class="timeline__year">2015</h4>
                <p class="timeline__desc">Our people are held to the highest level accountability to ensure you are
                always
                satisfied with your results. We believe that honesty, integrity, and a commitment to ethical business
                practices.</p>
            </div><!-- /.timeline-item -->
            <!-- timeline Item #4 -->
            <div class="timeline-item d-flex">
                <h4 class="timeline__year">2017</h4>
                <p class="timeline__desc">We cross industries and provide services to almost every business. You can
                leverage Dataprise either as a co-managed or supplemental asset, or as a completely outsourced IT
                partner. </p>
            </div><!-- /.timeline-item -->
            <!-- timeline Item #4 -->
            <div class="timeline-item d-flex">
                <h4 class="timeline__year">2020</h4>
                <p class="timeline__desc">Whether providing consulting expertise on a specific vendor technology,
                strategizing on IT budget, providing a security assessment, or managing IT infrastructure, we can
                provide it all.
                </p>
            </div><!-- /.timeline-item -->
            </div>
            <div class="cta-banner mt-70">
            <h4 class="cta__title">Provide users with appropriate view and access permissions to requests,
                problems, changes, contracts, assets, solutions, and reports with our experienced professionals.</h4>
            <div class="d-flex flex-wrap">
                <a href="#" class="btn btn__primary btn__primary-style2 btn__xl mr-20">
                <i class="far fa-file-alt"></i>
                <span>Download Brochure</span>
                </a>
                <a href="#" class="btn btn__white btn__outlined">Get Started</a>
            </div>
            </div><!-- /.cta-banner -->
        </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.History Timeline -->
@endsection