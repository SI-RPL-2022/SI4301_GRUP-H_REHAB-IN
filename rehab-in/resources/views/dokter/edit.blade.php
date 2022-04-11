@extends('layouts.homepage-user')

@section('main')
    <div class="row shadow p-3 mb-5" style="border-radius: 55px; margin-inline: 119px; background-color: #FFFFFF">
        <div class="rounded-circle mx-auto shadow p-3 mb-5" style="background-color: #E7E7E7; margin-top: 29px; width: 398px ;height: 398px;">
            <div class="row">
                <div class="card text-center bg-transparent" style="border: 0px">
                    <img class="mx-auto"src="{{ asset('assets/style/images/user-pict.png') }}" alt="" style="width: 318px; height: 322px; margin-bottom:auto; margin-top:20px;">
                </div>
            </div>
        </div>
        <div class="d-grid mx-auto">
            <button class="btn btn-primary rounded-circle mx-auto" type="submit" style="width: 83px; height: 83px;">
                <img src="{{ asset('assets/style/images/camera.png') }}" alt="" style="width: 44.51px; height: 44.51px;">
            </button>
        </div>
        <div class="text-center" style="margin-top: 20px">
            <form action="">
                <div class="mb-3 row">
                    <label for="inputtext" class="col-sm-5 col-form-label text-end" style="font-weight: 700; font-size: 27px;">Display Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-lg" id="inputtext">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputtext" class="col-sm-5 col-form-label text-end" style="font-weight: 700; font-size: 27px;">Alamat</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-lg" id="inputtext">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputtext" class="col-sm-5 col-form-label text-end" style="font-weight: 700; font-size: 27px;">Tempat Tanggal Lahir</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-lg" id="inputtext">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputtext" class="col-sm-5 col-form-label text-end" style="font-weight: 700; font-size: 27px;">Usia</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-lg" id="inputtext">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputtext" class="col-sm-5 col-form-label text-end" style="font-weight: 700; font-size: 27px;">Nomor Telepon</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-lg" id="inputtext">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputtext" class="col-sm-5 col-form-label text-end" style="font-weight: 700; font-size: 27px;">Tentang</label>
                    <div class="col-sm-5">
                        <textarea type="text" class="form-control form-control-lg" id="inputtext"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-center" style="margin-bottom: 50px; margin-top: 35px">
            <div class="col-sm-12">
                <button type="button" class="btn btn-primary btn-lg">edit profile</button>
            </div>
        </div>
    </div>
@endsection