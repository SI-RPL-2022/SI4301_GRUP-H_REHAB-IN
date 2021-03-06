@extends('layouts.homepage')

@section('main')
<div id="blog" class="blog">
    <div class="container">
      <div class="row">
      
      <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post-tips">
            <div class="thumb">
              <a href="#"><img src="{{asset('images/'.$tips->pic)}}" alt=""></a>
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
                        <span class="category">{{$tips->penulis}}</span>
                        <span class="date">{{$tips->created_at}}</span>
                    </div>
                    <a href="#"><h4>{{$tips->judul}}</h4></a>
                    <p style="color: #000; text-align:justify;">
                      {{$tips->desc}}
                    </p>
                   
                  </div>
                </div>
              </div>
              {{-- <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/blog-post-03.jpg" alt=""></a>
                  </div>

                </div>
              </div> --}}

            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
@endsection