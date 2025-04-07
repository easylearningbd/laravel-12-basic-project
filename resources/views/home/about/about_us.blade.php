@extends('home.home_master')
@section('home')

<div class="breadcrumb-wrapper light-bg">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title pb-0">About Us</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><img src="{{ asset('frontend/assets/images/blog/right-arrow.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">About Us</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End breadcrumb -->

 @php
   
   $about = App\Models\About::find(1);
 @endphp

  <div class="lonyo-section-padding3">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="lonyo-about-us-thumb2 pr-51" data-aos="fade-up" data-aos-duration="700">
            <img src="{{ asset($about->image) }}" alt="">
          </div>
        </div>
        <div class="col-lg-7 d-flex align-items-center">
          <div class="lonyo-default-content pl-32" data-aos="fade-up" data-aos-duration="900">
            <h2>{{ $about->title }}</h2>
            <p>{!! $about->description !!}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->

  <section class="lonyo-section-padding3 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="lonyo-default-content pr-50 feature-wrap">
            <h2>Our core values ​​serve as our driving force</h2>
            <p class="max-w616">Our core values ​​are at the core of everything we do. Ensuring the integrity, security and privacy of your data. Innovation, providing cutting-edge tools to simplify financial management. </p>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="lonyo-about-us-feature-wrap one" data-aos="fade-up" data-aos-duration="500">
            <div class="lonyo-about-us-feature-icon">
              <img src="assets/images/about-us/icon1.svg" alt="">
            </div>
            <div class="lonyo-about-us-feature-content">
              <h4>User-Centric Innovation</h4>
              <p>We design our apps and software with our users in mind, constantly evolving to meet their financial needs and solutions.</p>
            </div>
          </div>
          <div class="lonyo-about-us-feature-wrap two" data-aos="fade-up" data-aos-duration="700">
            <div class="lonyo-about-us-feature-icon">
              <img src="assets/images/about-us/icon2.svg" alt="">
            </div>
            <div class="lonyo-about-us-feature-content">
              <h4>Transparency</h4>
              <p>We believe in clear communication and full transparency in all our practices, providing users with accurate financial insights.</p>
            </div>
          </div>
          <div class="lonyo-about-us-feature-wrap three" data-aos="fade-up" data-aos-duration="900">
            <div class="lonyo-about-us-feature-icon">
              <img src="assets/images/about-us/icon3.svg" alt="">
            </div>
            <div class="lonyo-about-us-feature-content">
              <h4>Integrity & Trust</h4>
              <p>We build lasting relationships with our users by consistently delivering reliable, ethical, and also trustworthy services.</p>
            </div>
          </div>
          <div class="lonyo-about-us-feature-wrap mb-0 four" data-aos="fade-up" data-aos-duration="1100">
            <div class="lonyo-about-us-feature-icon">
              <img src="assets/images/about-us/icon4.svg" alt="">
            </div>
            <div class="lonyo-about-us-feature-content">
              <h4>Security You Can Trust</h4>
              <p>Your financial data is protected with top-level encryption and security protocols to ensure your information is always secure.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="lonyo-feature-shape shape2"></div>
  </section>
  <!-- end feature -->

  <div class="lonyo-section-padding10 team-section">
    <div class="shape">
      <img src="assets/images/about-us/shape1.svg" alt="">
    </div>
    <div class="container">
      <div class="lonyo-section-title center max-width-750">
        <h2>We always believe in the strength of our team</h2>
      </div>

      @php
    $team = App\Models\Team::latest()->get();
     @endphp

      <div class="row">
       
       @foreach ($team as $item)  
        <div class="col-lg-3 col-md-6">
          <div class="lonyo-team-wrap" data-aos="fade-up" data-aos-duration="500">
            <div class="lonyo-team-thumb">
              <a href="single-team.html"><img src="{{ asset($item->image ) }}" alt=""></a>
            </div>
            <div class="lonyo-team-content">
              <a href="single-team.html">
                <h6>{{ $item->name }}</h6>
              </a>
              <p>{{ $item->position }}</p>
            </div>
          </div>
        </div>
        @endforeach

      
      </div>
    </div>
  </div>
  <!-- end team -->

   @include('home.homelayout.answers')
  <!-- end faq -->

  <div class="lonyo-content-shape">
    <img src="{{ asset('frontend/assets/images/shape/shape2.svg') }}" alt="">
  </div>

  @include('home.homelayout.apps')
  <!-- end cta -->







@endsection