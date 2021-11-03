 
 <!-- =========================
        Header
    =========================== -->
    <header class="header header-transparent header-full">
        <nav class="navbar navbar-expand-lg sticky-navbar">
          <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
              <img src="{{asset('frontend/assets/images/logo/mini_uptpkk_light.png')}}" class="logo-light" alt="logo">
              <img src="{{asset('frontend/assets/images/logo/logo_uptpkk.png')}}" class="logo-dark" alt="logo">
            </a>
            <button class="navbar-toggler" type="button">
              <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
              <ul class="navbar-nav ml-auto">
                <li class="nav__item has-dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Beranda</a>
                  <ul class="dropdown-menu">
                    {{-- <li class="nav__item">
                      <a href="https://jcdc.polsri.ac.id/" target="_blank" class="nav__item-link">Lowongan Terbaru</a>
                    </li><!-- /.nav-item --> --}}
                    <li class="nav__item">
                      <a href="#berita" class="nav__item-link">Berita Terbaru</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                      <a href="#pengumuman" class="nav__item-link">Pengumuman Terbaru</a>
                    </li><!-- /.nav-item -->
                  </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <li class="nav__item has-dropdown">
                  <a href="#profile" class="nav__item-link">Profile</a>
                </li><!-- /.nav-item -->
                <li class="nav__item has-dropdown">
                  <a href="https://uptpkk.polsri.ac.id/" target="_blank" class="dropdown-toggle nav__item-link">Tracer Study</a>
                </li><!-- /.nav-item -->
                <li class="nav__item has-dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Karir</a>
                  <ul class="dropdown-menu">
                    <li class="nav__item">
                      <a href="https://jcdc.polsri.ac.id/" target="_blank" class="nav__item-link">Lowongan Kerja</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                      <a href="#seminar-karir" class="nav__item-link">Seminar, Training & Workshop</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                      <a href="#konseling-karir" class="nav__item-link">Konseling Karir</a>
                    </li><!-- /.nav-item -->
                  </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <li class="nav__item has-dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Kewirausahaan</a>
                  <ul class="dropdown-menu">
                    <li class="nav__item">
                      <a href="{{route('informasi')}}" class="nav__item-link">Informasi Kewirausahaan</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                      <a href="{{route('seminar')}}" class="nav__item-link">Seminar, Training & Workshop</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                      <a href="{{route('konseling')}}" class="nav__item-link">Konseling Kewirausahaan</a>
                    </li><!-- /.nav-item -->
                  </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <li class="nav__item">
                  <a href="#footer" class="nav__item-link">Kontak</a>
                </li><!-- /.nav-item -->
              </ul><!-- /.navbar-nav -->
              <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div><!-- /.navbar-collapse -->
            <div class="d-flex align-items-center">
              <a href="#" class="action__btn action__btn-search ml-30"><i class="icon-search"></i></a>
            </div>
          </div><!-- /.container -->
        </nav><!-- /.navabr -->
      </header><!-- /.Header -->