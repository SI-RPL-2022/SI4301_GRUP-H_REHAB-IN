@extends('layouts.homepage-dokter')
@section('main')
    <div id="contact" class="contact-us section" style="margin-top: 20px;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="user-pict">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="user-profile-header" style="text-align: left">Catatan kesehatan</h4>
                                            @if (session('success'))
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    {{ session('success') }}
                                                    <div type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></div>
                                                </div>
                                            @endif
                                            <div class="info-post">
                                                <form action="catkes">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="text-black fw-bold" style="text-align: left">Cari
                                                                Pasien :
                                                            </p>
                                                            <input type="text" placeholder="Cari pasien" name="search"
                                                                value="{{ request('search') }}">
                                                        </div>
                                                        <div class="col">
                                                            <button type="submit" style="margin-top:37px;"><i
                                                                    class="fa fa-search"></i></button>
                                                        </div>
                                                </form>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="container-fluid">
                                                    <table class="table table-striped table-hover">
                                                        <tr>
                                                            <th>Nama</th>
                                                            <th>Tanggal lahir</th>
                                                            <th>Alamat</th>
                                                            <th>Nomor handphone</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <tr>
                                                            @foreach ($pasien as $ps)
                                                                <td>{{ $ps->name }}</td>
                                                                <td>{{ $ps->tanggallahir }}</td>
                                                                <td>{{ $ps->address }}</td>
                                                                <td>{{ $ps->nohp }}</td>
                                                                <td>
                                                                    <a href="{{ route('inputcat', ['id' => $ps->id]) }}"
                                                                        class="btn btn-primary">Input Catatan
                                                                        Keshatan</a>
                                                                    <a href="{{ route('editcatkes', ['id' => $ps->id]) }}"
                                                                        class="btn btn-warning">Edit Catatan
                                                                        Keshatan</a>
                                                                </td>
                                                            @endforeach
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="d-flex justify-content-center">
                                                {{ $pasien->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
