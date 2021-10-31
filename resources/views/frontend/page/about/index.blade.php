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
@endsection