@extends('layouts.dashboard-admin')
@section('main')
<div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
        <div class="col-lg-6 d-none d-lg-block bg-login-image">
            <img src="{{ asset('assets/style/images/adminlogin.png') }}" alt="" style="width: 100%; padding:120px 30px 30px 30px;"/>
        </div>
        <div class="col-lg-6" >
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Update akun dokter sekarang!</h1>
                </div>
                {{ Form::open(array('url' => '/admin/dbdokter/updatedokter', 'method' => 'PUT', 'enctype'=> 'multipart/form-data')) }}
                <input type="text" name="id" id="id" value="{{$data -> id}}" style="display:none">
                    <div class="form-group">
                      
                         @if (session('Failure'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ (session('Failure')) }}
                            <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                            </div>
                        @endif
                        <input style="margin-bottom: 10px;" type="text" name="name" id="name" class="form-control form-control-user @error('name') is-invalid @enderror" value="{{$data -> name}}" autocomplete="on" required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                        <input style="margin-bottom: 10px;" type="email" name="email" id="email" class="form-control form-control-user @error('email') is-invalid @enderror" pattern="[^ @]*@[^ @]*"  value="{{$data -> email}}" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                        <input style="margin-bottom: 10px;" type="text" name="username" id="username" class="form-control form-control-user @error('username') is-invalid @enderror"  value="{{$data -> username}}" autocomplete="on" required value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                        <input style="margin-bottom: 10px;" type="password" name="password" id="password" class="form-control form-control-user @error('password') is-invalid @enderror"  placeholder="Password" required value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                        <input style="margin-bottom: 10px;" type="password" name="confpw" id="confpw " class="form-control form-control-user @error('confpw') is-invalid @enderror" placeholder="Konfirmasi Password" required>
                        <input style="margin-bottom: 10px;" type="number" name="nohp" id="nohp" class="form-control form-control-user @error('nohp') is-invalid @enderror"  value="{{$data -> nohp}}" required value="{{ old('nohp') }}">
                        <input type="number" name="role" id="role" class="form-control form-control-user" value=2 style="display: none;">
                        @error('nohp')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                        <input style="margin-bottom: 10px;" type="date" name="tanggallahir" id="tanggallahir" class="form-control form-control-user @error('tanggallahir') is-invalid @enderror"  value="{{$data -> tanggallahir}}" required value="{{ old('tanggallahir') }}">
                        @error('tanggallahir')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                        <input style="margin-bottom: 10px;" type="text" name="address" id="address" class="form-control form-control-user @error('address') is-invalid @enderror"  value="{{$data -> address}}" required value="{{ old('address') }}">
                        @error('address')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                   
                    {{-- <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Remember
                                Me</label>
                        </div>
                    </div> --}}
                    
                    <hr>
                    <input class="btn btn-primary btn-user btn-block" value="Update akun" type="submit">
                        
                    
                    {{ Form::close() }}

                {{-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div> --}}
               
            </div>
        </div>
    </div>
</div>
@endsection