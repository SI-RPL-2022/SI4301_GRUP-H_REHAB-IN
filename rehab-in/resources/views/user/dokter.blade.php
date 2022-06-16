@extends('layouts.homepage-user')
@section('main')
    <div class="container mb-3">
        <div class="row">
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href="{{ route('user-services') }}">
                        <i class="fa fa-hospital-o fa-5x  mt-3" style="color:white"></i>
                        <p class="p-1 text-white">Rumah Sakit</p>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 bg-primary text-white">
                    <a href="{{ route('reservasi') }}">
                        <i class="fa fa-bed fa-5x  mt-3" style="color:white"></i>
                        <p class="p-1 text-white">Reservasi Kamar</p>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="rounded text-center me-2 text-white" style="background-color:#67a5ff">
                    <i class="fa fa-user-md fa-5x  mt-3" style="color:white"></i>
                    <p class="p-1 text-white">Dokter</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="{{ route('user-services') }}">
            <button type="button" id="sidebarCollapse" class="btn btn-primary mb-4">
                <i class="fa fa-backward"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </a>
        <span class="p-2 text-black" style="font-size:30px">Pilih Opsi</span>


        <div class="row clearfix">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample"> Pilih Online</a>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Pilih Offline
                    </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Masukan jadwal untuk reservasi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('orderoff') }}" method="post">
                                @csrf
                                <div class="modal-body">

                                    <div class="mb-1 row">
                                        <strong><label>Tipe konsultasi: <span
                                                    class="fw-bold text-black">Online</span></label></strong>
                                    </div>
                                    <input type="text" name="layanan" class="form-control" value="Reservasi Konsultasi"
                                        hidden>
                                    <input type="text" name="status" class="form-control" value="Belum membayar" hidden>
                                    <input type="text" name="jenis" value="Offline" hidden>
                                    <input type="text" name="userid" value="{{ auth()->user()->id }}" hidden>
                                    <div class="mb-3 row">
                                        <strong><label class="col-form-label mb-1">Pilih Tanggal</label></strong>
                                        <input type="date" name="waktu" class="form-control ms-3 col-11"
                                            id="exampleFormControlInput1" placeholder="date" required>
                                    </div>
                                    <div class="mb-1 row">
                                        <strong><label>Harga: Rp. 150.000</label></strong>
                                        <input type="text" name="price" value="150000" class="fw-bold text-black"
                                            hidden></input>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Lanjutkan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="collapse" id="collapseExample">
                    <div class="card card-body mt-3">
                        @if ($jumlahdokter > 0)
                            @foreach ($dokter as $doc)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <div class="card" style="width: 18em;">
                                        @if ($doc->pic === null)
                                            <img src="{{ asset('assets/style/images/user-pict.png') }}"
                                                class="card-img-top" width="50" alt="{{ $doc->name }}">
                                        @else
                                            <img src="{{ asset('dokterProfile/' . $doc->pic) }}" class="card-img-top"
                                                width="50" alt="{{ $doc->name }}">
                                        @endif
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $doc->name }}</h5>
                                            <p class="card-text text-center w-bold">{{ $doc->address }}</p>

                                            <div class="mt-3 mb-3 text-center">
                                                <span class="text-black bold">{{ $doc->nohp }}</span>
                                                {{-- <a href="#"><i class="fa fa-facebook fa-2x me-2"></i></a>
                                    <a href="#"><i class="fa fa-dribbble fa-2x me-2"></i></a>
                                    <a href="#"><i class="fa fa-instagram fa-2x me-2"></i></a>
                                    <a href="#"><i class="fa fa-linkedin fa-2x me-2"></i></a>
                                    <a href="#"><i class="fa fa-google fa-2x me-2"></i></a> --}}
                                            </div>
                                            <a href="{{ route('jadwal', ['id' => $doc->id]) }}"
                                                class="btn btn-primary d-flex justify-content-center">Atur jadwal</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="container">
                                <h2 class="text-center">Maaf dokter belum tersedia</h2>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
