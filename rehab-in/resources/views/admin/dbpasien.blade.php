@extends('layouts.dashboard-admin')
@section('main')

{{-- TITLE --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Pasien</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
{{-- TITLE --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th> 
                            <th>Kode Pasien</th>
                            <th>Foto Pasien</th>
                            <th>Nama Pasien</th>
                            <th>Usia Pasien</th>
                            <th>Alamat</th>
                            <th>No. Hp</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Kondisi</th> 
                            <th style="width:11%;">Aksi</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td>PS01</td>
                            <td><img src="{{ asset('assets/style/images/user-pict.png') }}" alt="" style="width: 100%;"/></td>
                            <td>Rey</td>
                            <td>15 th</td>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </td>
                            <td>0987654</td>
                            <td>rey@mail.com</td>
                            <td>rey1234*</td>
                            <td>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                Quae fuga rerum assumenda, mollitia dolores perferendis et error!
                                Ducimus, earum necessitatibus.
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