@extends('layouts.homepage-user')
@section('main')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Riwayat Pembayaran</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Invoice</th> 
                                <th>Bukti pembayaran</th> 
                                <th>Nama Layanan</th> 
                                <th>Deskripsi Layanan</th> 
                                <th style="width:11%;">Status Pembayaran</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>#123321</td>
                                <td><img src="{{ asset('assets/style/user/images/kls-vip.png') }}" alt="" style="width: 30%;"/></td>
                                <td>Reservasi Layanan</td>
                                <td>
                                    Kamar 501
                                </td>
                                <td>
                                    <a href="{{ route('harga') }}" class="btn btn-danger btn-icon-split">
                                        Kirim Bukti pembayaran
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#12345</td>
                                <td><img src="{{ asset('assets/style/images/user-pict.png') }}" alt="" style="width: 30%;"/></td>
                                <td>Reservasi Dokter</td>
                                <td>
                                    Dr. Harimawan
                                </td>
                                <td>
                                    <a href="#" class="btn btn-success btn-icon-split">
                                        Pembayaran telah diterima
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection