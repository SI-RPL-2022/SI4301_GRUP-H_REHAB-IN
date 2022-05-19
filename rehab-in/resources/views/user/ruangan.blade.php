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
                        <form action="{{ route('inv') }}" method="post">
                            @csrf
                            <input type="id_kamar" name="id_kamar" class="form-control" value="{{ $kamar->id }}" hidden>
                            <input type="id_user" name="id_user" class="form-control" value="{{ $user->id }}" hidden>
                            <input type="jenis" name="jenis" class="form-control" value="Reservasi Layanan Kamar" hidden>
                           
                            <div class="mb-3" disabled>
                                <label for="exampleFormControlInput1" class="form-label">Harga</label>
                                <input type="number" name="price" class="form-control" id="exampleFormControlInput1" value="{{ $kamar->price }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jadwal</label>
                                <input type="date" name="date" class="form-control" id="exampleFormControlInput1" placeholder="date">
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
