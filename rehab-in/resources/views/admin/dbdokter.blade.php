@extends('layouts.dashboard-admin')
@section('main')

{{-- TITLE --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Dokter</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#add-dokter"><i
        class="fas fa-plus fa-sm text-white-50"></i> Tambahkan dokter</a>
</div>
{{-- TITLE --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="padding-bottom:10px;">Data Dokter</h6>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Download CSV File</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th> 
                            <th>Kode Dokters</th>
                            <th>Foto Dokter</th>
                            <th>Nama Dokter</th>
                            <th>Usia Dokter</th>
                            <th>Spesialis Keahlian</th>
                            <th>Jadwal Praktek</th>
                            <th>Tentang Dokter</th>
                            <th>Kontak Dokter</th> 
                            <th style="width:11%;">Aksi</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td>DOK1</td>
                            <td><img src="{{ asset('assets/style/images/user-pict.png') }}" alt="" style="width: 100%;"/></td>
                            <td>dr. Farhan</td>
                            <td>50 th</td>
                            <td>Spesialis Gigi</td>
                            <td>Senin - jumat (08.00 - 16.00 WIB)</td>
                            <td>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                Quae fuga rerum assumenda, mollitia dolores perferendis et error!
                                Ducimus, earum necessitatibus.
                            </td>
                            <td>?</td>
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
                            <td>DOK2</td>
                            <td><img src="{{ asset('assets/style/images/dok2.png') }}" alt="" style="width: 100%;"/></td>
                            <td>dr. Alex</td>
                            <td>20 th</td>
                            <td>Spesialis Jantung</td>
                            <td>Senin - jumat (16.00 - 21.00 WIB)</td>
                            <td>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                Quae fuga rerum assumenda, mollitia dolores perferendis et error!
                                Ducimus, earum necessitatibus.
                            </td>
                            <td><i class="fas fa-star" style="color: orange;"> 5.0</i></td>
                            <td>?</td>
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

    <!-- Modal ADD Dokter -->
 <div class="modal fade" id="add-dokter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/admin/dbdokter/add" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-2">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Dokter</h5>
                </div>
                <div class="col-10" style="padding-left: 66%;">
                    <input type="submit" value="Tambah" class="btn btn-primary"/>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                </div>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    
                    <div class="row">
                            <div class="col-2">
                                <label class="label-edit-article">Nama Lengkap</label><br>
                                <label class="label-edit-article">Email</label><br>
                                {{-- <label class="label-edit-article">Tanggal Post</label><br> --}}
                                <label class="label-edit-article">Username</label><br>
                                <label class="label-edit-article">Password</label>

                            </div>

                            <div class="col-10">
                                
                                {{-- <input type="text" name="id_article" id="id_article" class="form-control form-control-user form-edit-article" value="#1" readonly> --}}

                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control form-control-user form-edit-article">

                                <input type="email" name="email" id="email" class="form-control form-control-user form-edit-article">

                                {{-- <input type="date" name="tanggal_post" id="tanggal_post" value="" class="form-control form-control-user form-edit-article"> --}}
                                
                                <input type="text" name="username" id="username" class="form-control form-control-user form-edit-article">
                                <input type="text" name="is_dokter" id="is_dokter" value="1" class="form-control form-control-user form-edit-article" hidden>

                                <input type="password" name="password" id="password" class="form-control form-control-user form-edit-article">
                            </div>    
                        </div>
                    
                </div>
    
            </div>

            
            

        </div>
    </form>
    </div>
  </div>

@endsection