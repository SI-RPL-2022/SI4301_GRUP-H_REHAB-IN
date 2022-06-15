@extends('layouts.dashboard-admin')
@section('main')

{{-- TITLE --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Dokter</h1>
    <a href="{{ route('regdokfromadm') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-plus fa-sm text-white-50"></i> Tambahkan dokter</a>
</div>
{{-- TITLE --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="padding-bottom:10px;">Data Dokter</h6>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Download CSV File</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th> 
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Nomor Handphone</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                
                    <tbody>
                    @foreach ($user as $item)
                    <tr>
                            <th>{{$item->id}}</th>
                            <th>{{$item->name}}</th>
                            <th>{{$item->username}}</th>
                            <th>{{$item->email}}</th>
                            <th>{{$item->nohp}}</th>
                            <th>{{$item->address}}</th>
                            <td>
                                <a href="dbdokter/updatedokter/{{$item->id}}" class="btn btn-info btn-icon-split" data-id="{{ $item->id }}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                </a>
                                <a href="/admin/dbdokter/delete/{{ $item->id }}" class="btn btn-danger btn-icon-split">
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