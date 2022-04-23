@extends('layouts.dashboard-admin')

@section('main')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Konten Artikel</h1>
    <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#add-article"><i
        class="fas fa-plus fa-sm text-white-50"></i> Tambahkan Konten Artikel</a>
</div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Judul Artikel</th>
                                <th>Penulis</th>
                                <th>Konten</th>
                                <th>Tanggal Post</th>
                                <th>Gambar</th>
                                <th style="width:11%;">Aksi</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>#1</td>
                                <td>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</td>
                                <td>Denis</td>
                                <td>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor.
                                    Lorem Ipsum Dolor Sit Amei Eiusmod TemporLorem Ipsum Dolor
                                     Sit Amei Eiusmod TemporLorem Ipsum Dolor Sit Amei Eiusmod Tempor
                                    </td>
                                <td>2011/04/25</td>
                                <td><img src="{{ asset('assets/style/images/artikel1.png') }}" alt="" style="width:100%;" /></td>
                                <td>
                                    <a class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#edit-article">
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
                                <td>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</td>
                                <td>Denis</td>
                                <td>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor.
                                    Lorem Ipsum Dolor Sit Amei Eiusmod TemporLorem Ipsum Dolor
                                     Sit Amei Eiusmod TemporLorem Ipsum Dolor Sit Amei Eiusmod Tempor
                                    </td>
                                <td>2011/04/25</td>
                                <td><img src="{{ asset('assets/style/images/artikel1.png') }}" alt="" style="width:100%;" /></td>
                                <td>
                                    <a class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#edit-article">
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


 <!-- Modal ADD -->
 <div class="modal fade" id="add-article" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/admin/artikel/add" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-2">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Konten Artikel</h5>
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
                                <label class="label-edit-article">Judul Artikel</label><br>
                                <label class="label-edit-article">Penulis</label><br>
                                {{-- <label class="label-edit-article">Tanggal Post</label><br> --}}
                                <label class="label-edit-article">Gambar</label><br>
                                <label class="label-edit-article">Konten</label>

                            </div>

                            <div class="col-10">
                                
                                {{-- <input type="text" name="id_article" id="id_article" class="form-control form-control-user form-edit-article" value="#1" readonly> --}}

                                <input type="text" name="judul_artikel" id="judul_artikel" class="form-control form-control-user form-edit-article">

                                <input type="text" name="penulis" id="penulis" class="form-control form-control-user form-edit-article">

                                {{-- <input type="date" name="tanggal_post" id="tanggal_post" value="" class="form-control form-control-user form-edit-article"> --}}
                                
                                <input type="file" id="image_art" name="image_art" style="margin-top:10px;">

                                <textarea name="konten" id="konten" class="form-control form-control-user form-edit-article-konten"></textarea>
                            
                            </div>    
                        </div>
                    
                </div>
    
            </div>

            
            

        </div>
    </form>
    </div>
  </div>







 <!-- Modal EDIT -->
 <div class="modal fade" id="edit-article" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <div class="col-2">
                <h5 class="modal-title" id="exampleModalLabel">Edit Artikel</h5>
            </div>
            <div class="col-10" style="padding-left: 66%;">
                <input type="submit" value="Simpan" class="btn btn-primary"/>
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
        </div>
        <div class="modal-body">
            <div class="col-12">
                <div class="row">
                        <div class="col-2">

                            <label class="label-edit-article">Id</label><br>
                            <label class="label-edit-article">Judul Artikel</label><br>
                            <label class="label-edit-article">Penulis</label><br>
                            <label class="label-edit-article">Tanggal Post</label><br>
                            <label class="label-edit-article">Gambar</label><br>
                            <label class="label-edit-article">Konten</label>

                        </div>

                        <div class="col-10">
                            
                            <input type="text" name="id_article" id="id_article" class="form-control form-control-user form-edit-article" value="#1" readonly>

                            <input type="text" name="judul_artikel" id="judul_artikel" value="Contoh Judul" class="form-control form-control-user form-edit-article">

                            <input type="text" name="penulis" id="penulis" value="Contoh Penulis" class="form-control form-control-user form-edit-article">

                            <input type="date" name="tanggal_post" id="tanggal_post" value="" class="form-control form-control-user form-edit-article">
                            
                            <input type="file" id="image_art" name="image_art" value="gambar.png" style="margin-top:10px;">

                            <textarea name="konten" id="konten" class="form-control form-control-user form-edit-article-konten">Lorem Ipsum Dolor Sit Amei Eiusmod Tempor. Lorem Ipsum Dolor Sit Amei Eiusmod TemporLorem Ipsum Dolor Sit Amei Eiusmod TemporLorem Ipsum Dolor Sit Amei Eiusmod Tempor</textarea>
                         
                        </div>
                        
                    </div>
            </div>
   
        </div>

        
        

      </div>
    </div>
  </div>