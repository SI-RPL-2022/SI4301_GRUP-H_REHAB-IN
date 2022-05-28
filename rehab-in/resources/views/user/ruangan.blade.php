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
                        <span>{{ $kamar->kelas }}</span><br>
                        <span>{{ $kamar->facility }}</span>
                    </div>
                    <div class="col">
                        <form action="{{ route('inv') }}" method="POST">
                            @csrf
                            <input type="text" name="id_kamar" class="form-control" value="{{ $kamar->id }}" hidden>
                            <input type="text" name="id_user" class="form-control" value="{{ $user->id }}" hidden>
                            <input type="text" name="jenis" class="form-control" value="Reservasi Layanan Kamar" hidden>
                            <input type="text" name="status" class="form-control" value="Belum membayar" hidden>
                           
                            <div class="mb-3" disabled>
                                <label for="harga" class="form-label">Harga</label>
                                <input class="form-control" id="harga" value="{{ number_format($kamar->price, 0, ",", ".") }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="jadwal" class="form-label">Jadwal</label>
                                <input type="datetime-local" name="date" class="form-control" id="jadwal" placeholder="date" required>
                            </div>
                            {{-- <a href="{{ route('harga') }}" class="btn btn-primary mb-2">CONFIRM</a> --}}
                            <button type="submit" class="btn btn-primary mb-2">CONFIRM</button>
                            <a href="{{ route('reservasi') }}" class="btn btn-warning mb-2">CANCEL</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection
