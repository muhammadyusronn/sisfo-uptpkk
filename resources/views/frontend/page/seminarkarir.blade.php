@extends('frontend.app')
@section('content')
<!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pb-50">
        <div class="container">
            <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-40">
                <h2 class="heading__subtitle">Karir</h2>
                <h3 class="heading__title">Seminar, Training dan Workshop</h3>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
            <!-- Blog Item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                <div class="post__img">
                    <a href="blog-single-post.html">
                    <img src="{{asset('frontend/assets/images/blog/grid/1.jpg')}}" alt="blog image">
                    </a>
                </div><!-- /.blog-img -->
                <div class="post__body">
                    <div class="post__meta-cat">
                    <a href="#">Keyword</a><a href="#">Keyword</a>
                    </div><!-- /.blog-meta-cat -->
                    <h4 class="post__title"><a href="#">Judul Seminar</a>
                    </h4>
                    <div class="post__meta">
                    <span class="post__meta-date">Tanggal Seminar</span>
                    </div>
                    <p class="post__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet in, quam exercitationem enim dolorum sed quis repudiandae reprehenderit quo unde libero, dolores, possimus aut officiis laudantium? Unde facilis perspiciatis inventore ...
                    </p>
                    <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.blog-content -->
                </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Blog Item #2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                <div class="post__img">
                    <a href="blog-single-post.html">
                    <img src="{{asset('frontend/assets/images/blog/grid/2.jpg')}}" alt="blog image">
                    </a>
                </div><!-- /.blog-img -->
                <div class="post__body">
                    <div class="post__meta-cat">
                    <a href="#">Keyword</a><a href="#">Keyword</a>
                    </div><!-- /.blog-meta-cat -->
                    <h4 class="post__title"><a href="#">Judul Seminar</a>
                    </h4>
                    <div class="post__meta">
                    <span class="post__meta-date">Tanggal Seminar</span>
                    </div>
                    <p class="post__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet in, quam exercitationem enim dolorum sed quis repudiandae reprehenderit quo unde libero, dolores, possimus aut officiis laudantium? Unde facilis perspiciatis inventore ...
                    </p>
                    <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.blog-content -->
                </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Blog Item #3 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                <div class="post__img">
                    <a href="blog-single-post.html">
                    <img src="{{asset('frontend/assets/images/blog/grid/3.jpg')}}" alt="blog image">
                    </a>
                </div><!-- /.blog-img -->
                <div class="post__body">
                    <div class="post__meta-cat">
                    <a href="#">Keyword</a><a href="#">Keyword</a>
                    </div><!-- /.blog-meta-cat -->
                    <h4 class="post__title"><a href="#">Judul Seminar</a>
                    </h4>
                    <div class="post__meta">
                    <span class="post__meta-date">Tanggal Seminar</span>
                    </div>
                    <p class="post__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet in, quam exercitationem enim dolorum sed quis repudiandae reprehenderit quo unde libero, dolores, possimus aut officiis laudantium? Unde facilis perspiciatis inventore ...
                    </p>
                    <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.blog-content -->
                </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog Grid -->
    @endsection