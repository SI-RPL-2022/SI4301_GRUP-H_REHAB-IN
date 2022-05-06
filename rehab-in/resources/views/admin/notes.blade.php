@extends('layouts.dashboard-admin')
@section('main')

{{-- TITLE --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Catatan Kesehatan</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-plus fa-sm text-white-50"></i> Tambahkan Catatan Kesehatan</a>
</div>
{{-- TITLE --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="padding-bottom: 10px;">Data Catatan Kesehatan</h6>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Download CSV File</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th>Id</th>
                            <th>Nama Pasien</th> {{-- take from table dokter with ID Dokter --}}
                            <th>Nama Dokter</th> {{-- take from table pasien with ID Pasien --}}
                            <th>Waktu Tidur</th> 
                            <th>Kualitas Tidur</th>
                            <th>Olahraga</th>
                            <th>Mood</th>
                            <th style="width:11%;">Aksi</th>
                        </tr>
                    </thead>
                
                    <tbody>

                        @foreach ($notesehat as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->patient}}</td>
                            <td>{{$item->doctor}}</td>
                            <td>{{$item->waktu}}</td>
                            <td>{{$item->kualitas}}</td>
                            <td>{{$item->olahraga}}</td>
                            <td>{{$item->mood}}</td>
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

                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection