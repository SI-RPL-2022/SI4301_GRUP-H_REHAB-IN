@extends('layouts.dashboard-admin')
@section('main')

{{-- TITLE --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Kamar</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
{{-- TITLE --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kamar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th> 
                            <th>Kode Kamar</th>
                            <th>Foto Kamar</th>
                            <th>Nama</th>
                            <th>Nomor</th>
                            <th>Kelas</th>
                            <th>Fasilitas</th>
                            <th>Harga</th>
                            <th>Rating</th> 
                            <th style="width:11%;">Aksi</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td>KMR1</td>
                            <td><img src="{{ asset('assets/style/images/kamar1.png') }}" alt="" style="width: 100%;"/></td>
                            <td>Kamar Dahlia</td>
                            <td>101</td>
                            <td>Ekonomi</td>
                            <td>Sofa, AC, Kasur, Meja, Lemari, dll</td>
                            <td>Rp.150.000,00 / 12 Jam</td>
                            <td><i class="fas fa-star" style="color: orange;"> 5.0</i></td>
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