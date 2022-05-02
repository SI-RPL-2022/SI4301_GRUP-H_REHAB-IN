@extends('layouts.reg')
@section('main')
<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="{{ route('masuk') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                  <div class="img-register">
                        <img src="{{ asset('assets/style/images/login-img.png') }}" alt="Logo login">
                  </div>
              </div>
              <div class="col-lg-6">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="regist-caption">
                          <h4 style="font-weight: bold;">LOGIN</h4>
                        </div>
                    @if (session('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ (session('success')) }}
                        <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                      </div>
                    @endif
                    @if (session('loginError'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ (session('loginError')) }}
                        <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                      </div>
                    @endif
                      <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" placeholder="Email" autocomplete="on" required>
                      @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                      <input type="password" name="password" class="@error('password')is-invalid @enderror" id="password" placeholder="Password" required>
                      @error('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>

                    <div class="col-lg-6">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">LOGIN</button>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
