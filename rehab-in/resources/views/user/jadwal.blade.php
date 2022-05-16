@extends('layouts.homepage-user')
@section('main')
    <div class="container">
        <div class="shadow-sm p-3 mb-5 bg-body rounded">
            <a href="{{ route('dokter') }}">
                <button type="button" id="sidebarCollapse" class="btn btn-primary mb-4">
                    <i class="fa fa-backward"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </a>
            <div class="row">
                <div class="col-3 ms-4">
                    <img src="{{ asset('assets\style\images\user-pict.png') }}" class="rounded" style="width:100%" alt="kamar">
                </div>
                <div class="col mt-5 pt-5">
                    <p style="font-size: 20px">{{ $doc->name }}</p>
                    <p>Spesialis asam uram | Bandung, Jawa Barat</p>
                </div>
            </div>


            <div class="row ms-3 mt-4">
                <strong><span style="font-size: 30px; color:grey">About the doctor</span></strong>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro est nemo dolor eaque ad! Obcaecati ipsum architecto qui ipsam et quod harum dolorum totam ipsa illum atque officiis, commodi aperiam ad aut, molestias nobis sunt accusantium quasi debitis ullam. Consequatur fuga dignissimos repudiandae iste animi, atque illo explicabo quaerat assumenda.</p>
            </div>
        </div>
   </div>

    <div class="container">
        <div class="shadow-sm p-4 mb-5 bg-body rounded">
            <form class="ms-4">
                <h3> Masukan jadwal untuk reservasi</h3>
                <div class="mb-3 row">
                    <strong><label class="col-sm-2 col-form-label">Jam Kerja</label></strong>
                    <div class="col-sm-10 ms-md-2">
                        Value jam kerja
                    </div>
                </div>
                <div class="mb-3 row">
                    <strong><label class="col-sm-2 col-form-label mb-1">Tipe konsultasi</label></strong>
                    <div class="col-sm-3 ms-md-2">
                        <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off">
                        <label class="btn btn-outline-success" for="success-outlined">Google Meet (Online)</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="options-outlined" id="primary-outlined" autocomplete="off">
                        <label class="btn btn-outline-primary" for="primary-outlined">Datang ke rumah sakit (Offline)</label>
                    </div>
                </div>
                <div class="mb-3 row">
                    <strong><label class="col-sm-2 col-form-label mb-1">Jenis keluhan</label></strong>
                    <input type="text" class="form-control ms-3 col-11" placeholder="Jenis keluhan" aria-label="Username">
                </div>
                <div class="mb-3 row">
                    <strong><label class="col-sm-2 col-form-label mb-1">Detail keluhan</label></strong>
                    <textarea class="form-control ms-3 col-11" placeholder="Leave the detail here"></textarea>
                </div>
                <div class="mb-3 row">
                    <strong><label class="col-sm-2 col-form-label mb-1">Pilih Waktu</label></strong>
                    <input type="date" class="form-control ms-3 col-11" id="exampleFormControlInput1" placeholder="date">
                </div>

                <div class="mb-4 row ms-1">
                    <a href="{{ route('invoice',['id'=>$doc->id]) }}" class="btn btn-primary me-3 col-sm-2">SUBMIT</a>
                    <a href="{{ route('dokter') }}" class="btn btn-warning col-sm-2">CANCEL</a>
                    {{-- <button type="button" class="btn btn-primary col-sm-1">SUBMIT</button> --}}
                </div>
            </form>
        </div>
     </div>
@endsection
