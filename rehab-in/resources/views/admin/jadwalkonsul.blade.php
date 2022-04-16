@extends('layouts.dashboard-admin')
@section('main')

{{-- TITLE --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Jadwal Konsultasi</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
{{-- TITLE --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Jadwal Konsultasi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Jenis Konsultasi</th> {{-- online or offline --}}
                            <th>Nama Pasien</th> {{-- take from table pasien with ID Pasien --}}
                            <th>Jenis Keluhan</th>
                            <th>Detail Keluhan</th> 
                            <th>Nama Dokter</th> {{-- take from table dokter with ID Dokter --}}
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Pembayaran</th>
                            <th style="width:11%;">Aksi</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td>Online</td>
                            <td>Denia</td>
                            <td>Sakit gigi</td>
                            <td>
                                Lorem Ipsum Dolor Sit Amei Eiusmod Tempor.
                                Lorem Ipsum Dolor Sit Amei Eiusmod TemporLorem Ipsum Dolor
                                Sit Amei Eiusmod TemporLorem Ipsum Dolor Sit Amei Eiusmod Tempor
                             </td>
                             <td>dr. Farhan</td>
                             <td>2011/04/25</td>
                            <td>14.00 WIB</td>
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
                        <tr>
                            <td>#2</td>
                            <td>Online</td>
                            <td>Denis</td>
                            <td>Sakit gigi</td>
                            <td>
                                Lorem Ipsum Dolor Sit Amei Eiusmod Tempor.
                                Lorem Ipsum Dolor Sit Amei Eiusmod TemporLorem Ipsum Dolor
                                Sit Amei Eiusmod TemporLorem Ipsum Dolor Sit Amei Eiusmod Tempor
                             </td>
                             <td>dr. Farhan</td>
                             <td>2011/04/25</td>
                            <td>14.00 WIB</td>
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
                        
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection