@extends('layout.layout')
@section('sp-css')

@endsection
@section('sp-script')

@endsection

@section('content')

<!-- ======= Hero Section ======= -->
    <section id="hero" class="hero-achievements">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <h1>OUR ACHIEVEMENTS</h1>
            <h2>Only those who attempt the absurd can achieve the impossible.</h2>
            {{-- <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>  
            </div> --}}
        </div>
    </section>
    <!-- End Hero -->

<main id="main">

<section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos='fade-up'>
                <div class="section-title">
                    <h2>Achievers</h2>
                    <p>Our Achievements</p>
                </div>
                    <div class="col-lg-12">
                        <div class="portfolio-details-slider swiper-container">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="{{  asset('src/img/Achievements/certie1.jpg') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{  asset('src/img/Achievements/certie2.jpg') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{  asset('src/img/Achievements/certie3.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- End Portfolio Details Section -->
                
        <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes">
      <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Achievements</h2>
                    <p>Our Achievers</p>
                </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="{{  asset('src/img/Achievements/01.jpeg') }}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="{{  asset('src/img/Achievements/02.jpeg') }}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="{{  asset('src/img/Achievements/03.jpeg') }}" class="card-img-top" alt="...">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="{{  asset('src/img/Achievements/04.jpeg') }}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="{{  asset('src/img/Achievements/05.jpeg') }}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="{{  asset('src/img/Achievements/06.jpeg') }}" class="card-img-top" alt="...">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="{{  asset('src/img/Achievements/07.jpeg') }}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="{{  asset('src/img/Achievements/08.jpeg') }}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="{{  asset('src/img/Achievements/09.jpeg') }}" class="card-img-top" alt="...">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="{{  asset('src/img/Achievements/10.jpeg') }}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="{{  asset('src/img/Achievements/11.jpeg') }}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="{{  asset('src/img/Achievements/12.jpeg') }}" class="card-img-top" alt="...">
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Boxes Section -->

{{-- 
<div class="container" data-aos="fade-up" style="background: #000">
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{  asset('src/img/Achievements/certie1.jpg') }}" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{  asset('src/img/Achievements/certie2.jpg') }}" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{  asset('src/img/Achievements/certie3.jpg') }}" alt="New York" width="1100" height="500">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div> --}}
</main>

@endsection