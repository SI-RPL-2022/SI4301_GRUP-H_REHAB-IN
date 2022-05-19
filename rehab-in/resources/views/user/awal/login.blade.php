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
                        @if (session('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ (session('message')) }}
                          <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                        @endif
                        @if (session('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{ (session('loginError')) }}
                          <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{ (session('error')) }}
                          <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                      @endif
                      <input type="text" name="username" class="@error('username') is-invalid @enderror" id="username" placeholder="Username" autocomplete="on" required>
                      @error('username')
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
                      <input type="number" name="role" id="role" class="form-control form-control-user" value=0 hidden>
                    </div>
                    <a href="{{ route('ForgetPasswordGet') }}" class="mt-3">FORGET PASSWORD</a>

                    <div class="row">
                        <div class="col-md-3">
                          <button type="submit" id="form-submit" class="main-button ">LOGIN</button>
                        </div>
                        <div class="col-md-3 mt-3">
                          <a href="{{ route('register') }}" class="btn btn-outline-primary mt-3">REGISTER</a>
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
</div>
@endsection
