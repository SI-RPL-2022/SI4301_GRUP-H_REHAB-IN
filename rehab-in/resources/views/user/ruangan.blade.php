@extends('layouts.homepage-user')
@section('main')
    <div class="container">
        <div class="row">
            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                <div class="row">
                    <div class="col-1 ms-2">
                        <a href="{{ route('reservasi') }}">
                            <button type="button" id="sidebarCollapse" class="btn btn-primary mb-4">
                                <i class="fa fa-backward"></i>
                                <span class="sr-only">Toggle Menu</span>
                            </button>
                        </a>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('images/'.$kamar->pic) }}" class="rounded" style="width:100%" alt="kamar">
                    </div>
                    <div class="col-sm-2">
                        <p style="font-size: 20px">{{ $kamar->nama_kamar }}</p>
                        <span>{{ $kamar->kelas }}</span>
                        <p>{{ $kamar->facility }}</p>
                    </div>
                    <div class="col">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Pasien</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1" value="{{ $user->name }}"disabled>
                            </div>
                            <div class="mb-3" hidden>
                                <label for="exampleFormControlInput1" class="form-label">Nomor kamar</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1" value="{{ $kamar->no_kamar }}"disabled>
                            </div>
                            <div class="mb-3" hidden>
                                <label for="exampleFormControlInput1" class="form-label">Nama kamar</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1" value="{{ $kamar->nama_kamar }}"disabled>
                            </div>
                            <div class="mb-3" hidden>
                                <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1" value="{{ $kamar->kelas }}"disabled>
                            </div>
                            <div class="mb-3" hidden>
                                <label for="exampleFormControlInput1" class="form-label">Fasilitas</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1" value="{{ $kamar->facility }}"disabled>
                            </div>
                            <div class="mb-3" disabled>
                                <label for="exampleFormControlInput1" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" value="{{ $kamar->price }}" placeholder="123456789" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jadwal</label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="date">
                            </div>
                            <a href="{{ route('harga') }}" class="btn btn-primary mb-2">CONFIRM</a>
                            {{-- <button type="submit" class="btn btn-primary mb-2">CONFIRM</button> --}}
                            <a href="{{ route('reservasi') }}" class="btn btn-warning mb-2">CANCEL</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection
