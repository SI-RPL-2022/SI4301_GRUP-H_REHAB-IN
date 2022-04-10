@extends('layouts.homepage-user')

@section('main')
<div id="notes" class="notes section">
  <div class="container">
    <div class="row">
      {{-- <div class="col-lg-12">
        <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
          <h6>Our Services</h6>
          <h4>What Our Agency <em>Provides</em></h4>
          <div class="line-dec"></div>
        </div>
      </div> --}}
      <div class="col-lg-12">
        <div class="naccs">
          <div class="grid">
            <div class="row">
              <div class="col-lg-12">
                <div class="menu">
                  <div class="first-thumb active">
                    <div class="thumb">
                      <span class="icon"><img src="{{asset('assets/style/user/images/jamsleep.png')}}" alt=""></span>
                        Waktu Tidur
                    </div>
                  </div>
                  <div>
                    <div class="thumb">                 
                      <span class="icon"><img src="{{asset('assets/style/user/images/sleepquality.png')}}" alt=""></span>
                      Kualitas Tidur
                    </div>
                  </div>
                  <div>
                    <div class="thumb">                 
                      <span class="icon"><img src="{{asset('assets/style/user/images/sport.png')}}" alt=""></span>
                      Olahraga
                    </div>
                  </div>
                  <div>
                    <div class="thumb">                 
                      <span class="icon"><img src="{{asset('assets/style/user/images/mood.png')}}" alt=""></span>
                      Mood
                    </div>
                  </div>
                </div>
              </div> 
              <div class="col-lg-12">
                <ul class="nacc">
                  <li class="active">
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-6 align-self-center">
                            <div class="left-text">
                              <h4>SEO Analysis &amp; Daily Reports</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                dover lipsum lorem and the others.</p>
                              <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                            </div>
                          </div>
                          <div class="col-lg-6 align-self-center">
                            <div class="right-image">
                              <img src="{{asset('assets/style/images/jamsleepco.png')}}" alt="">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-6 align-self-center">
                            <div class="left-text">
                              <h4>Online Shopping &amp; Tracking ID</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                dover lipsum lorem and the others.</p>
                              <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                            </div>
                          </div>
                          <div class="col-lg-6 align-self-center">
                            <div class="right-image">
                              <img src="{{asset('assets/style/images/moodco.png')}}" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-6 align-self-center">
                            <div class="left-text">
                              <h4>Online Shopping &amp; Tracking ID</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                dover lipsum lorem and the others.</p>
                              <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                            </div>
                          </div>
                          <div class="col-lg-6 align-self-center">
                            <div class="right-image">
                              <img src="{{asset('assets/style/images/moodco.png')}}" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-6 align-self-center">
                            <div class="left-text">
                              <h4>Online Shopping &amp; Tracking ID</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                dover lipsum lorem and the others.</p>
                              <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                            </div>
                          </div>
                          <div class="col-lg-6 align-self-center">
                            <div class="right-image">
                              <img src="{{asset('assets/style/images/moodco.png')}}" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li> 
                </ul>
              </div>          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
