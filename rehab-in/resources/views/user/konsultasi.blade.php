@extends('layouts.homepage-user')
@section('main')
    <div class="container">
        <div class="row">
            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                <div class="row">
                    <div class="col rounded ms-3 me-3" style="background-color: grey">
                        <div class="row">
                            <div class="col-sm-2 ms-2">
                                <img src="{{ asset('assets/style/images/user-pict.png') }}" alt="" width="100%">
                            </div>
                            <div class="col text-white align-self-center">
                                <div class="row ">
                                    <span style="font-size:30px">Doctor name</span>
                                    <div class="col-md-3">
                                        Special Asam urat
                                    </div>
                                    <div class="col">
                                        Bandung, Jawa Barat
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <strong><span style="font-size:20px"> Hari</span></strong>
                        <p>Hari</p>
                        <br>
                        <strong><span style="font-size:20px">Jam</span></strong>
                        <p>Jam</p>
                        <br>
                        <strong><span style="font-size:30px">Tarif</span></strong>
                        <p> Perhitungan
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
