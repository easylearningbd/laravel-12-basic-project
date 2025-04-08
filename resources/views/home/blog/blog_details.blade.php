@extends('home.home_master')
@section('home')

<div class="breadcrumb-wrapper light-bg">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title pb-0">{{ $blog->post_title }}</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><img src="{{ asset('frontend/assets/images/blog/right-arrow.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">Details Page</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End breadcrumb -->

  <div class="lonyo-section-padding7 overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="lonyo-blog-d-wrap">
            <div class="lonyo-blog-d-thumb" data-aos="fade-up" data-aos-duration="700">
              <img src="{{ asset($blog->image) }}" alt="">
            </div>
            <div class="lonyo-blog-meta pb-0">
              <ul>
                <li>
                  <a href="single-blog.html"><img src="{{ asset('frontend/assets/images/blog/date.svg') }}" alt="">{{ $blog->created_at->format('M d Y')  }}</a>
                </li>
                
              </ul>
            </div>
            <div class="lonyo-blog-d-content">
              <h2><a href="single-blog.html">{{ $blog->post_title }}</a></h2>
              <p> {!! $blog->long_descp !!}</p>
            </div>
             
            
          </div>
        </div>
        <div class="col-lg-4">
          <div class="lonyo-blog-sidebar" data-aos="fade-left" data-aos-duration="700">
            <div class="lonyo-blog-widgets">
              <form action="#">
                <div class="lonyo-search-box">
                  <input type="search" placeholder="Type keyword here">
                  <button id="lonyo-search-btn" type="button"><i class="ri-search-line"></i></button>
                </div>
              </form>
            </div>
            <div class="lonyo-blog-widgets">
              <h4>Categories:</h4>
              <div class="lonyo-blog-categorie">
                <ul>
                    @foreach ($blogcat as $blog) 
                    <li><a href="{{ url('blog/category/'.$blog->id) }}">{{ $blog->category_name }} <span>({{ $blog->posts_count }})</span></a></li>
                    @endforeach
                </ul>
              </div>
            </div>
            <div class="lonyo-blog-widgets">
              <h4>Recent Posts</h4>
              @foreach ($recentpost as $recent) 
              <a class="lonyo-blog-recent-post-item" href="single-blog.html">
              <div class="lonyo-blog-recent-post-thumb">
                  <img src="{{ asset($recent->image) }}" alt="" style="width: 100px; height:100px;">
              </div>
              <div class="lonyo-blog-recent-post-data">
                  <ul>
                  <li><img src="{{ asset('frontend/assets/images/blog/date.svg') }}" alt="">{{ $recent->created_at->format('M d Y')  }}</li>
                  </ul>
                  <div>
                  <h4>{{  $recent->post_title }}</h4>
                  </div>
              </div>
              </a>
              @endforeach
              
            </div>
            
          </div>
        </div>
      </div>
      <div class="deivdead-line"></div>
      
       
    </div>
  </div>
  <!-- end blog -->


  <div class="lonyo-content-shape">
    <img src="{{ asset('frontend/assets/images/shape/shape2.svg') }}" alt="">
  </div>

  @include('home.homelayout.apps') 



@endsection