@extends('layouts.dashboard-admin')
@section('main')
{{-- {{dd($order);}} --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Order Layanan Konsultasi</h1>
    {{-- <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#add-tips"><i
        class="fas fa-plus fa-sm text-white-50" ></i> Tambahkan tips</a> --}}
</div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" style="padding-bottom:10px;">Data Orderan Saat Ini</h6>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Invoice</th> 
                                <th>Nama Layanan</th>
                                <th>Tanggal</th>
                                <th>Durasi</th>  
                                <th>Price</th> 
                                <th style="width:11%;">Status Pembayaran</th>
                                <th>Tempat</th> 
                                <th style="width:30%;">Aksi</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($orderd as $item)
                            
                                <tr>
                                    <td>#{{ $item->noInv }}</td>
                                    <td>{{ $item->jenislayanan }}</td>
                                    <td>{{ $item->waktu }}</td>
                                    <td>{{ $item->durasi }}</td>
                                    <td>
                                        Rp{{ $item->price }}
                                    </td>
                                    <td>
                                        {{$item->status}}
                                    </td>
                                    <td>
                                        @if ($item->jenis=="online")
                                            <a class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50"> {{ $item->jenis }}</span> 
                                            </a>
                                        @else
                                            <a class="btn btn-info btn-icon-split">
                                                <span class="icon text-white-50"> {{ $item->jenis }}</span> 
                                            </a>
                                            
                                        @endif
                                       
                                       
                                    </td>
                                    <td>
                                        @if ($item->status=="Belum membayar")
                                            <a href="{{ route('invkons')}}" class="btn btn-warning btn-icon-split">
                                                <span class="icon text-white-50"> Kirim Pesan Tagihan
                                                    <i class="fas fa-envelope"></i>
                                                </span>
                                                
                                            </a>
                                        @else
                                            <a href="/admin/linkmail/{{ $item->dokterid }}" class="btn btn-info btn-icon-split">
                                                <span class="icon text-white-50"> Kirim Link
                                                    <i class="fas fa-envelope"></i>
                                                </span>
                                                
                                            </a>
                                            
                                        @endif
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        
@endsection