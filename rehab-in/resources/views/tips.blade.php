@extends('layouts.homepage')

@section('main')
<div id="blog" class="blog">
    <div class="container">
      <div class="row">
        {{-- <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
            <h6>Recent News</h6>
            <h4>Check Our Blog <em>Posts</em></h4>
            <div class="line-dec"></div>
          </div>
        </div> --}}
        <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post-tips">
            <div class="thumb">
              <a href="#"><img src="{{ asset('assets/style/images/tip1.png') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="right-content">
                      <div class="right-content-top">
                        <span class="category">SEO Analysis</span>
                        <span class="date">24 September 2021</span>
                    </div>
                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                    <p style="color: #000; text-align:justify;">
                        Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.
                        Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.
                        Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.
                        Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.
                        Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.
                        Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.
                        Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.
                    </p>
                    <p style="color: #000; text-align:justify;">
                        Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.
                        Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.
                        Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.
                        Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.
                        Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.
                        Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.
                        Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/blog-post-03.jpg" alt=""></a>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
@endsection