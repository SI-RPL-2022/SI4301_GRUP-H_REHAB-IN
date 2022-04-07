@extends('layouts.homepage-user')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href=""><img src="{{ asset('assets/style/images/RumahSakit.png') }}" class="mt-2" alt="Gambar rumah sakit">
                    <p class="p-2 text-white">Rumah Sakit</p></a>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href="{{ route('reservasi')}}"><img src="{{ asset('assets/style/images/KamarPasien.png') }}" class="mt-2" alt="Kamar Pasien">
                    <p class="p-1 text-white">Reservasi Kamar</p></a>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href=""><img src="{{ asset('assets/style/images/Dokter.png') }}" class="mt-2" alt="Dokter">
                    <p class="p-2 text-white">Dokter</p></a>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href=""><img src="{{ asset('assets/style/images/Edukasi.png') }}" class="mt-2" alt="Edukasi">
                    <p class="p-3 text-white">Edukasi</p></a>
                </div>
            </div>
        </div>
    </div>
@endsection
