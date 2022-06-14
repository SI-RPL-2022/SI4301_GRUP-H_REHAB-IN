@extends('layouts.homepage-user')
@section('main')
    <div class="container mb-3">
        <div class="row">
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href="{{ route('user-services') }}">
                        <i class="fa fa-hospital-o fa-5x  mt-3" style="color:white" ></i>
                        <p class="p-1 text-white">Rumah Sakit</p>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 text-white" style="background-color:#67a5ff">
                    <i class="fa fa-bed fa-5x  mt-3" style="color:white" ></i>
                    <p class="p-1 text-white">Reservasi Kamar</p>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href="{{ route('dokter')}}">
                        <i class="fa fa-user-md fa-5x  mt-3" style="color:white" ></i>
                        <p class="p-1 text-white">Dokter</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="{{ route('user-services') }}">
            <button type="button" id="sidebarCollapse" class="btn btn-primary mb-4">
                <i class="fa fa-backward"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </a><span class="p-2 text-black" style="font-size:30px">Kamar yang tersedia</span>
        @if($check > 0)
            @foreach($kamar as $kamar)
                <div class="row">
                    <div class="shadow-sm p-3 mb-5 bg-body rounded">
                        <div class="row">
                            <div class="col ms-4" >
                                <img src="{{ asset('images/'.$kamar->pic) }}" class="rounded" style="width:45%" alt="kamar">
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p style="font-size:30px; color:rgb(51, 51, 51); font-weight:bold;">{{ $kamar->nama_kamar }}</p>
                                    <div class="col" style="color:rgb(51, 51, 51); font-weight:bold;">
                                        {{ $kamar->no_kamar }}
                                    </div>
                                    <div class="col" style="color:rgb(51, 51, 51); font-weight:bold;">
                                        {{ $kamar->kelas }}
                                    </div>
                                </div>
                            </div>
                            <div class="col text-center">
                                <br>
                                <?php 
                                    $senin = 1;
                                ?>
                                <a href="{{ route('ruangan',['id'=>$kamar->id]) }}" class="btn btn-primary mb-2">Pilih Kamar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="container">
                <h2 class="text-center">Maaf kamar belum tersedia</h2>
            </div>
        @endif
    </div>
@endsection
