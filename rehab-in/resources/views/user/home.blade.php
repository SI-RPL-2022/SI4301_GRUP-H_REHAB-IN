@extends('layouts.homepage-user')

@section('main')

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
  
  
  <div id="contact" class="contact-us section" style="margin-top: 50px;">
    <div class="row">
      <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" action="" method="post">
      
            <div class="col-lg-12">
              <div class="user-pict" style="padding: 20px 2px 20px 60px;">
                <div class="row">
                  <div class="col-lg-12">
                      <h4 class="user-profile-header">Artikel Kesehatan</h4>
                          <div class="info-post row">
                            

                              {{-- CONTENT --}}
                              <div class="user-pict" style="background-color: #000; border-radius:23px; max-width:20%;margin-left:3%;">
                                  <div class="col-lg-12">
                                      <h4 class="user-profile-header">Artikel</h4>
                                          <div class="info-post">
                                            
                                          </div>
                                  </div>                              
                              </div>
                              {{-- CONTENT --}}
                            
                           {{-- CONTENT --}}
                           <div class="user-pict" style="background-color: #000; border-radius:23px; max-width:20%;margin-left:3%;">
                            <div class="col-lg-12">
                                <h4 class="user-profile-header">Artikel</h4>
                                    <div class="info-post">
                                      
                                    </div>
                            </div>                              
                        </div>
                        {{-- CONTENT --}}

                        {{-- CONTENT --}}
                        <div class="user-pict" style="background-color: #000; border-radius:23px; max-width:20%;margin-left:3%;">
                          <div class="col-lg-12">
                              <h4 class="user-profile-header">Artikel</h4>
                                  <div class="info-post">
                                    
                                  </div>
                          </div>                              
                      </div>
                      {{-- CONTENT --}}

                       {{-- CONTENT --}}
                       <div class="user-pict" style="background-color: #000; border-radius:23px; max-width:20%;margin-left:3%;">
                        <div class="col-lg-12">
                            <h4 class="user-profile-header">Artikel</h4>
                                <div class="info-post">
                                  
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
          
        </form>
    </div>
  </div>
</div>





@endsection