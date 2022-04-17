@extends('layouts.dashboard-admin')
@section('main')

{{-- TITLE --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Reservasi Kamar</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-plus fa-sm text-white-50"></i> Tambahkan reservasi</a>
</div>
{{-- TITLE --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="padding-bottom: 10px;">Data Reservasi</h6>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Download CSV File</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Gambar Kamar</th> {{-- take from table kamar --}}
                            <th>Tipe Kamar</th> {{-- take from table kamar --}}
                            <th>Nama Kamar</th> {{-- take from table kamar --}}
                            <th>Nama Pasien</th> {{-- take from table pasien with ID Pasien --}}
                            <th>Waktu Check-In</th> {{-- date --}}
                            <th>Keterangan Pembayaran</th> {{-- dibayar atau belum dibayar --}}
                            <th style="width:11%;">Aksi</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td><img src="{{ asset('assets/style/images/kamar1.png') }}" alt="" style="width:90%;" /></td>
                            <td>Ekonomi</td>
                            <td>Dahlia 101</td>
                            <td>Denis</td>
                            <td>Selasa, 30 Maret 2022</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-icon-split">
                                    <span class="text">Belum lunas</span>
                                </a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                </a>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </a>
                            
                            </td>
                        </tr>
                        <tr>
                            <td>#2</td>
                            <td><img src="{{ asset('assets/style/images/kamar1.png') }}" alt="" style="width:90%;" /></td>
                            <td>Ekonomi</td>
                            <td>Dahlia 101</td>
                            <td>Denis</td>
                            <td>Selasa, 30 Maret 2022</td>
                            <td>
                                <a href="#" class="btn btn-success btn-icon-split">
                                    <span class="text">Lunas</span>
                                </a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                </a>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </a>
                            
                            </td>
                        </tr>
                      
                      
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection