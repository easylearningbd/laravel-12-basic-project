@php
  $slider = App\Models\Slider::find(1);
@endphp

<div class="lonyo-hero-section light-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex align-items-center">
          <div class="lonyo-hero-content" data-aos="fade-up" data-aos-duration="700">
            <h1 class="hero-title">{{ $slider->title }}</h1>
            <p class="text">{{ $slider->description }}</p>
            <div class="mt-50" data-aos="fade-up" data-aos-duration="900">
              <a href="{{ $slider->link }}" class="lonyo-default-btn hero-btn">Contact With Us</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="lonyo-hero-thumb" data-aos="fade-left" data-aos-duration="700">
            <img src="{{ asset($slider->image ) }}" alt="">

            <div class="lonyo-hero-shape">
              <img src="{{ asset('frontend/assets/images/shape/hero-shape1.svg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>