@extends('layouts.dashboard-admin')
@section('main')

{{-- TITLE --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tabel Riwayat Pelayanan</h1>
    {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-plus fa-sm text-white-50"></i> Tambahkan Jadwal</a> --}}

</div>
{{-- TITLE --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Riwayat Pelayanan</h6>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Download CSV File</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        
                        <tr>
                            <th>Id</th>
                            <th>Nomor Tagihan</th> {{-- take from table pasien with ID Pasien --}}
                            <th>Jenis Layanan</th>
                            <th>Bukti Pembayaran</th>
                            <th>Keterangan Pembayaran</th>
                            <th style="width:11%;">Aksi</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        @foreach ($riwayat as $item)
                        <tr>
                            <th>{{$item->id}}</th>
                            <th>{{$item->noinv}}</th> 
                            <th>{{$item->jenis_layanan}}</th>
                            <th>{{$item->bukti_pembayaran}}</th>
                            <th>@if ($item->bukti_pembayaran>0)
                                <a class="btn btn-success btn-icon-split">
                                    <span class="text">Lunas</span>
                                </a>
                                @else
                                <a class="btn btn-danger btn-icon-split">
                                    <span class="text">Belum Lunas</span>
                                </a>
                            @endif
                                
                            </th>
                            <td>
                                <a href="riwayatadm/delete/{{ $item->id }}" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </a>
                            
                            </td>
                        </tr>
                        @endforeach
                        
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection