@extends('layouts.homepage-user')

@section('main')

{{-- NEWS --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/style/user/css/article.css') }}">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script> 

    <main>
  
      <div id="carousel-article">
  
         <div class="hideLeft">
          <img src="{{asset('assets/style/user/images/article1.png')}}">
        </div>
  
        <div class="prevLeftSecond">
          <img src="{{asset('assets/style/user/images/article2.png')}}">
        </div>
  
        <div class="prev">
          <img src="{{asset('assets/style/user/images/article3.png')}}">
        </div>
  
        <div class="selected">
          <img src="{{asset('assets/style/user/images/article1.png')}}">
        </div>
  
        <div class="next">
          <img src="{{asset('assets/style/user/images/article2.png')}}">
        </div>
  
        <div class="nextRightSecond">
          <img src="{{asset('assets/style/user/images/article3.png')}}">
        </div>
  
        <div class="hideRight">
          <img src="{{asset('assets/style/user/images/article1.png')}}">
        </div>
  
      </div>
  
      <div class="buttons">
        <button id="prev" style="background-color: #4da6e7;padding: 5px 20px;color: white;border: 1px white solid;border-radius: 10px;box-shadow: none;">Prev</button>
        <button id="next" style="background-color: #4da6e7;padding: 5px 20px;color: white;border: 1px white solid;border-radius: 10px;box-shadow: none;">Next</button>
      </div>
  
    </main>
  
    <script src="{{ asset('assets/style/user/js/article.js') }}"></script>
  <script type="text/javascript">
    $(document).keydown(function(e) {
      switch(e.which) {
          case 37: // left
          moveToSelected('prev');
          break;
  
          case 39: // right
          moveToSelected('next');
          break;
  
          default: return;
      }
      e.preventDefault();
  });
  
  $('#carousel div').click(function() {
    moveToSelected($(this));
  });
  
  $('#prev').click(function() {
    moveToSelected('prev');
  });
  
  $('#next').click(function() {
    moveToSelected('next');
  });
  </script>
  
{{-- NEWS --}}


{{-- CURRENT SCHEDULE --}}
<div id="contact" class="contact-us section" style="margin-top: 30px;">
  <div class="row">
    <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
      <form id="contact" action="" method="post">
          <div class="col-lg-12 schedule-card">
            <div class="user-pict-schedule">
              <div class="row">
                <div class="col-lg-12">
                    <h4 class="user-profile-header">Konsultasi Hari Ini</h4>
                        <div class="info-post row" style="padding-top: 0px;padding-bottom: 0px">
                          <div class="col-lg-4">  
                            <img src="{{asset('assets/style/images/doc1.png')}}" alt=""/>
                            <h5 style="font-weight:bold; padding-top:10px;">dr. Muhammad Syahid</h5>
                            <h6 style="color:#fff;">Spesialis Jantung</h6>
                          </div>
                          <div class="col-lg-8 schedule-time-frame">
                            {{-- CONTENT --}}
                            <div class="user-pict-schedule" style="background-color: transparent; border-radius:23px;">
                              <div class="col-lg-12">
                                  <div class="row">
                                    <div class="col-lg-6" style="text-align: left;">
                                      <div class="col-lg-12">
                                        <div class="row">
                                          <div class="col-lg-2">
                                            <span class="fa fa-calendar fa-2x"></span>
                                          </div>
                                          <div class="col-lg-10">
                                            <p class="schedule-content">Jumat, 25 Maret 2022</p>
                                          </div>
                                        </div>  
                                      </div>
                                      <div class="col-lg-12">
                                        <div class="row">
                                          <div class="col-lg-2">
                                            <span class="fa fa-clock-o fa-2x"></span>
                                          </div>
                                          <div class="col-lg-10">
                                            <p class="schedule-content">11.00 - 13.00 WIB</p>
                                          </div>
                                        </div>  
                                      </div>
                                    </div>
                                    <div class="col-lg-6" style="text-align: left;">
                                      <div class="col-lg-12">
                                        <div class="row">
                                          <div class="col-lg-2">
                                            <span class="fa fa-comments-o fa-2x"></span>
                                          </div>
                                          <div class="col-lg-10">
                                            <p class="schedule-content">Jumat, 25 Maret 2022</p>
                                          </div>
                                        </div>  
                                      </div>
                                    </div>
                                  </div>
                              </div>                              
                          </div>
                          {{-- CONTENT --}}
                          </div>
                        </div>

                      </div>
                        </div>
                        
                        </div>
                </div>
              </div>
            </div>
        
      </form>
  </div>
</div>
</div>
{{-- CURRENT SCHEDULE --}}




{{-- HEALTH NOTES --}}

  <div id="contact content" class="p-4 p-md-5" style="">
    <div class="row">
      <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" action="" method="post">
              <div class="user-pict-notes" style="padding: 20px 2px 20px 60px;">
                <div class="row">
                  <div class="col-lg-12">
                      <h4 class="user-profile-header" style="padding-right: 50px;">Catatan Kesehatan</h4>
                          <div class="info-post row" style="padding-top: 0px;padding-bottom: 0px">
                              {{-- CONTENT --}}
                              <div class="col-lg-3" style="border-radius:23px;">
                                  <div class="">
                                      <img src="{{asset('assets/style/user/images/jamsleep.png')}}" alt="">
                                        <h6 style="color: #aaa; padding-top: 5px;">Waktu Tidur</h6>
                                        <p style="font-weight: bold; font-size:15px; color:#000;">5 - 8 Jam</p>
                                  </div>                              
                              </div>
                              {{-- CONTENT --}}

                              {{-- CONTENT --}}
                              <div class="col-lg-3" style="background-color: transparent; border-radius:23px;">
                                <div class="" style="padding: 0px 10px;">
                                    <img src="{{asset('assets/style/user/images/sleepquality.png')}}" alt="">
                                      <h6 style="color: #aaa; padding-top: 5px; min-width:50px;">Kualitas Tidur</h6>
                                      <p style="font-weight: bold; font-size:15px; color:#000;">Normal</p>
                                </div>                              
                            </div>
                            {{-- CONTENT --}}

                            {{-- CONTENT --}}
                            <div class="col-lg-3" style="background-color: transparent; border-radius:23px;">
                              <div class="">
                                  <img src="{{asset('assets/style/user/images/sport.png')}}" alt="">
                                    <h6 style="color: #aaa; padding-top: 5px;">Olahraga</h6>
                                    <p style="font-weight: bold; font-size:15px; color:#000;">Medium</p>
                              </div>                              
                          </div>
                          {{-- CONTENT --}}

                          {{-- CONTENT --}}
                          <div class="col-lg-3" style="background-color: transparent; border-radius:23px;">
                            <div class="">
                                <img src="{{asset('assets/style/user/images/mood.png')}}" alt="">
                                  <h6 style="color: #aaa; padding-top: 5px;">Mood</h6>
                                  <p style="font-weight: bold; font-size:15px; color:#000;">Yeay!</p>
                            </div>                              
                        </div>
                        {{-- CONTENT --}}
                        </div>
                </div>
              </div>

        </form>
  </div>
</div>
</div>
  
@endsection

{{-- HEALTH NOTES --}}
