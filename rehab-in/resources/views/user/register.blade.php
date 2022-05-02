@extends('layouts.reg')

@section('main')
<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="{{ route('registpasien') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                  <div class="img-register">
                  <img src="{{ asset('assets/style/images/register-img.png') }}" alt="">
                  </div>
              </div>
              <div class="col-lg-6">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="regist-caption">
                            <h4 style="font-weight: bold;">Buat Akun</h4>
                        <p >
                            Silahkan isi data diri untuk melakukan pendaftaran. Data anda tidak akan disebarluaskan dan hanya digunakan untuk keperluan rumah sakit.
                        </p>
                    </div>
                      @if (session('Failure'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{ (session('Failure')) }}
                          <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                      @endif
                      <input type="text" name="name" class="@error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" autocomplete="on" required value="{{ old('name') }}">
                      @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                      <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required value="{{ old('email') }}">
                      @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                      <input type="password" name="password" id="password" placeholder="Password" required value="{{ old('password') }}">
                      @error('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                      <input type="password" name="confpw" id="confpw" placeholder="Konfirmasi Password" required>
                      <input type="number" name="nohp" id="handphone" placeholder="Nomor Hp" required value="{{ old('nohp') }}">
                      @error('nohp')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                      <input type="date" name="tanggallahir" id="tanggallahir" placeholder="23/04/2000" required value="{{ old('tanggallahir') }}">
                      @error('tanggallahir')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                      <input type="text" name="address" id="alamat" placeholder="Alamat Rumah" required value="{{ old('address') }}">
                      @error('address')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>

                    <div class="col-lg-6">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">Buat Akun</button>
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
