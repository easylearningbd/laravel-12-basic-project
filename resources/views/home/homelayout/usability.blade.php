@php 
  $usability = App\Models\Usability::find(1);
@endphp
<div class="lonyo-section-padding bg-heading position-relative sectionn">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="lonyo-video-thumb">
            <img src="{{ asset($usability->image ) }}" alt="">
            <a class="play-btn video-init" href="{{ $usability->youtube }}">
              <img src="{{ asset('frontend/assets/images/v1/play-icon.svg') }}" alt="">
              <div class="waves wave-1"></div>
              <div class="waves wave-2"></div>
              <div class="waves wave-3"></div>
            </a>
          </div>
        </div>
        <div class="col-lg-7 d-flex align-items-center">
          <div class="lonyo-default-content lonyo-video-section pl-50" data-aos="fade-up" data-aos-duration="500">
            <h2>{{ $usability->title }}</h2>
            <p>{{ $usability->description }}</p>
            <div class="mt-50" data-aos="fade-up" data-aos-duration="700">
              <a class="lonyo-default-btn video-btn" href="{{ $usability->link }}">Download the app</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-md-6">
          <div class="lonyo-process-wrap" data-aos="fade-up" data-aos-duration="500">
            <div class="lonyo-process-number">
              <img src="{{ asset('frontend/assets/images/v1/n1.svg') }}" alt="">
            </div>
            <div class="lonyo-process-title">
              <h4>Connect Your Accounts</h4>
            </div>
            <div class="lonyo-process-data">
              <p>Link your bank, credit card or investment accounts to automatically track transactions and get a complete financial overview</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="lonyo-process-wrap" data-aos="fade-up" data-aos-duration="700">
            <div class="lonyo-process-number">
              <img src="{{ asset('frontend/assets/images/v1/n2.svg') }}" alt="">
            </div>
            <div class="lonyo-process-title">
              <h4>Set Budgets & Goals</h4>
            </div>
            <div class="lonyo-process-data">
              <p>Define your spending limits and savings goals for categories like groceries, bills or future investments to stay on track.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="lonyo-process-wrap" data-aos="fade-up" data-aos-duration="900">
            <div class="lonyo-process-number">
              <img src="{{ asset('frontend/assets/images/v1/n3.svg') }}" alt="">
            </div>
            <div class="lonyo-process-title">
              <h4>Monitor & Automate</h4>
            </div>
            <div class="lonyo-process-data">
              <p>Check your financial dashboard for regular updates and set up automatic payments or savings to simplify management.</p>
            </div>
          </div>
        </div>
        <div class="border-bottom" data-aos="fade-up" data-aos-duration="500"></div>
      </div>
    </div>
  </div>