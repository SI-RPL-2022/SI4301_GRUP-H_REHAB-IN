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
                    <h1 class="h4 text-gray-900 mb-4">Buat jadwal konsultasi sekarang!</h1>
                </div>
                <form class="user" action="{{ route('savejadwal') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        {{-- <input type="number" name="dokterid" id="id" value="{{ $user->id }}" hidden> --}}
                        @if (session('Failure'))
                           <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           {{ (session('Failure')) }}
                           <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                           </div>
                       @endif
                       <select aria-label="Default select example" name="namapasien" id="namapasien" class="form-control-user form-select ms-3 col-11" style="padding:15px; margin-bottom:10px;" id="exampleFormControlInput1" required>
                        @if ($listpasien!=null)
                            <option selected>Pilih Pasien</option>
                            @foreach ($listpasien as $pasien)
                                <option value="{{ $pasien->name }}">{{ $pasien->name }}</option>    
                            @endforeach
                        @else
                            <option selected>Pilih Pasien</option>
                        @endif
                        
                        
                      </select>
                      <select aria-label="Default select example" name="namadokter" id="namadokter" class="form-control-user form-select ms-3 col-11" style="padding:15px; margin-bottom:10px;" id="exampleFormControlInput1" required>
                        @if ($listdokter!=null)
                            <option selected>Pilih Dokter</option>
                            @foreach ($listdokter as $dokter)
                                <option value="{{ $dokter->name }}">{{ $dokter->name }}</option>    
                            @endforeach
                        @else
                            <option selected>Pilih Dokter</option>
                        @endif
                      </select>

                      <select aria-label="Default select example" name="day" id="day" class="form-control-user form-select ms-3 col-11" style="padding:15px; margin-bottom:10px;" id="exampleFormControlInput1" required>
                        <option selected>Hari Konsultasi</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                      </select>
                       
                       <input style="margin-bottom: 10px;" type="text" name="tempat" id="tempat" class="form-control form-control-user @error('tempat') is-invalid @enderror" placeholder="Tempat" autocomplete="on" required value="{{ old('tempat') }}">
                       @error('tempat')
                           <div class="invalid-feedback">
                           {{ $message }}
                           </div>
                       @enderror
                       <input style="margin-bottom: 10px;" type="text" name="shift" id="shift" class="form-control form-control-user @error('shift') is-invalid @enderror" placeholder="shift" autocomplete="on" required value="{{ old('shift') }}">
                       @error('shift')
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
                    <input class="btn btn-primary btn-user btn-block" value="Buat jadwal" type="submit">
                        
                    
                </form>

                {{-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div> --}}
               
            </div>
        </div>
    </div>
</div>
@endsection