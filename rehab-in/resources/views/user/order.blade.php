@extends('layouts.homepage-user')

@section('main')
    <div class="container">
        @if (session('Done'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{ session('Done') }}
                <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
            </div>
        @endif
        <div class="tab">
            <button class="tablinks" onclick="openHistory(event, 'kamar')" id="defaultOpen">Kamar</button>
            <button class="tablinks" onclick="openHistory(event, 'dokter')">Konsultasi Dokter</button>
        </div>
        <div id="kamar" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            @if ($checkkamar > 0)
                <div class="card shadow mb-4 mt-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Status Order Kamar</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No Invoice</th>
                                        <th>Nama Layanan</th>
                                        <th>Price</th>
                                        <th style="width:11%;">Status Pembayaran</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($order as $kamar)
                                        <tr>
                                            <td>#{{ $kamar->noInv }}</td>
                                            <td>{{ $kamar->jenis }}</td>
                                            <td>
                                                Rp {{ number_format($kamar->kamar->price, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <a href="{{ route('harga', ['id' => $kamar->id]) }}"
                                                    class="btn btn-warning btn-icon-split">
                                                    Check Invoice
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div class="card shadow mb-4 mt-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Status Order Kamar</h6>
                    </div>
                    <div class="card-body">
                        You have nothing here
                    </div>
                </div>
            @endif
        </div>
        {{-- Tab untuk dokter --}}
        <div id="dokter" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>

            @if ($checkdokter > 0)
                <div class="card shadow mb-4 mt-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Riwayat Pembayaran Konsultasi Dokter</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No Invoice</th>
                                        <th>Nama Layanan</th>
                                        <th>Jenis Layanan</th>
                                        <th>Price</th>
                                        <th style="width:11%;">Status Pembayaran</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($orderd as $order)
                                        <tr>
                                            <td>#{{ $order->noInv }}</td>
                                            <td>{{ $order->jenislayanan }}</td>
                                            <td>{{ $order->jenis }}</td>
                                            <td>Rp
                                                {{ number_format($order->price, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <a href="{{ route('invdk', ['id' => $order->id]) }}"
                                                    class="btn btn-warning btn-icon-split">
                                                    Check Invoice
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div class="card shadow mb-4 mt-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Status Order Dokter</h6>
                    </div>
                    <div class="card-body">
                        You have nothing here
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
