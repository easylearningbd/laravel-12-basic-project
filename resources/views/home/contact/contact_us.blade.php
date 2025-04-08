@extends('home.home_master')
@section('home')


<div class="breadcrumb-wrapper light-bg">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title pb-0">Contact Us</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><img src="{{ asset('frontend/assets/images/blog/right-arrow.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">Contact Us</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End breadcrumb -->

  <div class="lonyo-section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="lonyo-default-content">
            <h2>Just say hello. Here's how to reach us</h2>
            <p class="max-w616">Have a question? We have the answer. Whether you need technical support or want to know more about this tool.</p>
            <div class="mt-50">
              <div class="lonyo-contact-us-info-item ">
                <div class="lonyo-contact-us-icon">
                  <a href="mailto:name@email.com"><img src="assets/images/contact-us/email.svg" alt=""></a>
                </div>
                <div class="lonyo-contact-us-content">
                  <a href="mailto:name@email.com">
                    <h4>Send Email:</h4>
                    <p>Support@gmail.com</p>
                  </a>
                </div>
              </div>
              <div class="lonyo-contact-us-info-item ">
                <div class="lonyo-contact-us-icon">
                  <a href="mailto:name@email.com"><img src="assets/images/contact-us/phone.svg" alt=""></a>
                </div>
                <div class="lonyo-contact-us-content">
                  <a href="mailto:name@email.com">
                    <h4>Phone Call:</h4>
                    <p>+088-345-9876</p>
                  </a>
                </div>
              </div>
              <div class="lonyo-contact-us-info-item pb-0">
                <div class="lonyo-contact-us-icon">
                  <a href="mailto:name@email.com"><img src="assets/images/contact-us/email.svg" alt=""></a>
                </div>
                <div class="lonyo-contact-us-content">
                  <h4>Find Us:</h4>
                  <p>Open google maps</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="lonyo-contact-box box2" data-aos="fade-up" data-aos-duration="700">
            <h4>Fill the form below</h4>
    <form action="{{ route('contact.message') }}" method="post">
        @csrf
        
        <div class="lonyo-main-field">
        <p>Full name*</p>
        <input type="text" name="name" placeholder="Enter your name">
        </div>
        <div class="lonyo-main-field">
        <p>Email address*</p>
        <input type="email" name="email" placeholder="Your email address">
        </div>
        <p>Message</p>
        <div class="lonyo-main-field-textarea">
        <textarea class="button-text" name="message" placeholder="Write your message here..."></textarea>
        </div>
        <button class="lonyo-default-btn extra-btn d-block" type="submit">Send your message</button>
    </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->
  <div class="responsive-map">
    <iframe class="lonyo-contact-us-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889" width="600" height="450" allowfullscreen=""></iframe>
  </div>

   @include('home.homelayout.answers')
  <!-- end faq -->

  <div class="lonyo-content-shape">
    <img src="{{ asset('frontend/assets/images/shape/shape2.svg') }}" alt="">
  </div>

   @include('home.homelayout.apps')
  <!-- end cta -->





@endsection