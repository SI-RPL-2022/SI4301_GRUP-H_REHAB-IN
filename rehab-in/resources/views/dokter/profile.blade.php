@extends('layouts.homepage-user')

@section('main')
    <div class="container-fluid shadow p-3 mb-5" style="border-radius: 55px; background-color: #FFFFFF">
        <div class="container-fluid mx-auto shadow p-3 mb-5" style="background-color: #E7E7E7; margin-top: 29px; border-radius: 50px;">
            <div class="row">
                <div class="col-3 text-center my-auto d-block">
                    <img src="{{ asset('assets/style/images/user-pict.png') }}" class="w-75 mt-5" alt="">
                </div>
                <div class="col-7 my-auto d-block">
                    <p style="color: black; font-weight: 700; font-size: 35px;">Profile Anda</p>
                    <p style="color: black; font-weight: 500; font-size: 80px;">Dr. Denis Gresan</p>
                    <p style="color: black; font-weight: 400; font-size: 26px;">Spesialis asam urat </p>
                </div>
                <div class="col-2 my-auto d-block">
                    <div class="row">
                        <div class="col mt-2">
                            <img src="{{ asset('assets/style/images/rate.png') }}" alt="" class="w-75">
                        </div>
                        <div class="col me-5">
                            <p style="color: black; font-weight: 500; font-size: 48px;">5.0</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-5">
                <p style="color: black; font-weight: 700; font-size: 30px;">Tentang</p>
                <p style="color: black; font-weight: 400; font-size: 26px;margin-top: 20px">Dr. Denis Gresan merupakan lulusan S3 Jurusan Kedokteran dari ITB. Menjadi tulang belakang dari beberapa perkembangan medis pada abad ke 20. Dr. Denis Gresan berpengalaman selama 8 tahun menjadi dokter dan telah menangani lebih dari 10.000 pasien.</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mx-5">
                <p style="color: black; font-weight: 700; font-size: 27px;">Username</p>
                <p style="color: black; font-weight: 500; font-size: 27px; margin-top: 5px">denistaubatgresan</p>
                <hr style="margin-top: 5px">
                <p style="color: black; font-weight: 700; font-size: 27px; margin-top: 25px">Alamat</p>
                <p style="color: black; font-weight: 500; font-size: 27px; margin-top: 5px">Jl. Telekomunikasi No.40, Kecamatan Bojongsoang, Bandung, Jawa Barat</p>
                <hr style="margin-top: 5px">
                <p style="color: black; font-weight: 700; font-size: 27px; margin-top: 25px">Tempat Tanggal Lahir</p>
                <p style="color: black; font-weight: 500; font-size: 27px; margin-top: 5px">Jakarta, 12 Juni 1986</p>
                <hr style="margin-top: 5px">
                <p style="color: black; font-weight: 700; font-size: 27px; margin-top: 25px">Usia</p>
                <p style="color: black; font-weight: 500; font-size: 27px; margin-top: 5px">36</p>
                <hr style="margin-top: 5px">
                <p style="color: black; font-weight: 700; font-size: 27px; margin-top: 25px">Nomor Telepon</p>
                <p style="color: black; font-weight: 500; font-size: 27px; margin-top: 5px">081234567890</p>
                <hr style="margin-top: 5px">
            </div>
    
        </div>
        <div class="row" style="margin-bottom: 50px; margin-top: 35px">
            <div class="col-3" style="margin-left: 70px">
                <a type="button" class="btn btn-primary btn-lg" href="{{ route('editprofiledokter') }}">edit profile</a>
            </div>
        </div>
    </div>
@endsection