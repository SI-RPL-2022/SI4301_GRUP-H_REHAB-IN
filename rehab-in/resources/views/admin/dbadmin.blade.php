@extends('layouts.dashboard-admin')
@section('main')

{{-- TITLE --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Administrator</h1>
    <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#add-admin"><i
        class="fas fa-plus fa-sm text-white-50"></i> Tambahkan Admin</a>
</div>
{{-- TITLE --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="padding-bottom:10px;">List Administrator</h6>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Download CSV File</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th style="width:11%;">Aksi</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
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



     <!-- Modal ADD -->
 <div class="modal fade" id="add-admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/admin/dbadmin/add" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-2">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Administrator</h5>
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

                                <input type="text" name="email" id="email" class="form-control form-control-user form-edit-article">

                                {{-- <input type="date" name="tanggal_post" id="tanggal_post" value="" class="form-control form-control-user form-edit-article"> --}}
                                
                                <input type="text" name="username" id="username" class="form-control form-control-user form-edit-article">

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