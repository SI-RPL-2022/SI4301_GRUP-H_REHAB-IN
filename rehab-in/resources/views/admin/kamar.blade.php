@extends('layouts.dashboard-admin')
@section('main')

{{-- TITLE --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Kamar</h1>
    <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#add-kamar"><i
        class="fas fa-plus fa-sm text-white-50"></i> Tambahkan kamar</a>
</div>
{{-- TITLE --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="padding-bottom:10px;">Data Kamar</h6>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Download CSV File</a>
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
                            
                            <th style="width:11%;">Aksi</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        @foreach ($kamar as $item)

                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->code}}</td>
                            <td><img src="{{ asset('assets/style/images/kamar1.png') }}" alt="" style="width: 100%;"/></td>
                            <td>{{$item->nama_kamar}}</td>
                            <td>{{$item->no_kamar}}</td>
                            <td>{{$item->kelas}}</td>
                            <td>{{$item->facility}}</td>
                            <td>Rp {{$item->price}}/ 12 Jam</td>
                            
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

     <!-- Modal ADD -->
     <div class="modal fade" id="add-kamar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="'admin/kamar/add" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-2">
                        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Kamar</h5>
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
                                    <label class="label-edit-article">Foto Kamar</label><br>
                                    <label class="label-edit-article">Nama Kamar</label><br>
                                    {{-- <label class="label-edit-article">Tanggal Post</label><br> --}}
                                    <label class="label-edit-article">Kelas</label><br>
                                    <label class="label-edit-article">Fasilitas</label><br>
                                    <label class="label-edit-article">Harga</label>
    
                                </div>
    
                                <div class="col-10">
                                    
                                    {{-- <input type="text" name="id_article" id="id_article" class="form-control form-control-user form-edit-article" value="#1" readonly> --}}
    
                                    <input type="file" id="pic" name="pic" style="margin-top:10px;">

                                    <input type="text" name="nama_kamar" id="nama_kamar" class="form-control form-control-user form-edit-article">
    
                                    <input type="text" name="kelas" id="kelas" class="form-control form-control-user form-edit-article">
    
                                    {{-- <input type="date" name="tanggal_post" id="tanggal_post" value="" class="form-control form-control-user form-edit-article"> --}}
                                    
                                    {{-- <input type="text" name="facility" id="facility" class="form-control form-control-user form-edit-article"> --}}
                                   <div class="checkboxkamars">
                                       <div class="col-12 row">
                                           <div class="row">
                                               <div class="col-2">

                                               </div>
                                               <div class="col-2">

                                                </div>

                                                <div class="col-2">

                                                </div>
                                                <div class="col-2">
 
                                                 </div>
 
                                           </div>
                                        </div>
                                    <input class="form-check-input" type="checkbox" name="facility[]" alt="checkbox" value="Pemrograman" /> Sofa
                                        
                                    </div>
                                    
                                    <input type="number" name="price" id="price" class="form-control form-control-user form-edit-article" >

                                   
                                </div>    
                            </div>
                        
                    </div>
        
                </div>
    
                
                
    
            </div>
        </form>
        </div>
      </div>
    



@endsection