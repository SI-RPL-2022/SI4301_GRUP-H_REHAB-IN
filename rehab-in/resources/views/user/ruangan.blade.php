@extends('layouts.homepage-user')
@section('main')
    <div class="container">
        <div class="row">
            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                <div class="row">
                    <div class="col-3 ms-4">
                        <img src="{{ asset('assets/style/images/kls-vip.png') }}" class="rounded" style="width:100%" alt="kamar">
                    </div>
                    <div class="col-sm-2">
                        <p style="font-size: 20px">Kamar 501</p>
                        <span>Deskripsi ruangan</span>
                        <p>List description</p>
                    </div>
                    <div class="col">
                        <form>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Pasien</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pasien" disabled>
                            </div>
                            <div class="mb-3" disabled>
                                <label for="exampleFormControlInput1" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="123456789" disabled>
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
