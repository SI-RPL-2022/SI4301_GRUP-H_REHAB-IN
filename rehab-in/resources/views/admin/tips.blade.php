@extends('layouts.dashboard-admin')

@section('main')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Konten Tips Kesehatan</h1>
    <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#add-tips"><i
        class="fas fa-plus fa-sm text-white-50" ></i> Tambahkan tips</a>
</div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" style="padding-bottom:10px;">Data Tips Kesehatan</h6>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Judul Tips</th>
                                <th>Penulis</th>
                                <th>Konten</th>
                                <th>Tanggal Post</th>
                                <th>Gambar</th>
                                <th style="width:11%;">Aksi</th>

                            </tr>
                        </thead>
                    
                        <tbody>

                            @foreach ($tips as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->judul}}</td>
                                <td>{{$item->penulis}}</td>
                                <td>{{$item->desc}}</td>
                                <td>{{$item->created_at}}</td>
                                <td><img src="{{asset('images/'.$item->pic)}}" alt="" style="width:100%; border-radius:10px;" /></td>
                                <td>
                                    <a id="editTips" href="#" class="btn btn-info btn-icon-split" data-id="{{ $item->id }}">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-pencil-alt"></i>
                                        </span>
                                    </a>
                                    <a href="/admin/tips/delete/{{ $item->id }}" class="btn btn-danger btn-icon-split">
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
 <div class="modal fade" id="add-tips" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/admin/tips/add" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-2">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Konten Tips</h5>
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
                                <label class="label-edit-article">Judul Tips</label><br>
                                <label class="label-edit-article">Penulis</label><br>
                                <label class="label-edit-article">Gambar</label><br>
                                <label class="label-edit-article">Konten</label>

                            </div>

                            <div class="col-10">
                                
                                {{-- <input type="text" name="id_article" id="id_article" class="form-control form-control-user form-edit-article" value="#1" readonly> --}}

                                <input type="text" name="judul" id="judul" class="form-control form-control-user form-edit-article">

                                <input type="text" name="penulis" id="penulis" class="form-control form-control-user form-edit-article">

                                {{-- <input type="date" name="tanggal_post" id="tanggal_post" value="" class="form-control form-control-user form-edit-article"> --}}
                                
                                <input type="file" id="pic" name="pic" style="margin-top:10px;">

                                <textarea name="desc" id="desc" class="form-control form-control-user form-edit-article-konten"></textarea>
                            
                            </div>    
                        </div>
                    
                </div>
    
            </div>

            
            

        </div>
    </form>
    </div>
  </div>


 <!-- Modal EDIT -->
 <div class="modal fade" id="edit-tips" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        {{ Form::open(array('url' => '/admin/tips/update','method' => 'PUT', 'enctype'=> 'multipart/form-data')) }}
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-2">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Konten Tips</h5>
                    </div>
                    <div class="col-10" style="padding-left: 66%;">
                        <input id="simpanModalEdit" type="submit" value="Simpan" class="btn btn-primary"/>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <div class="row">
                                <div class="col-2">

                                    <label class="label-edit-article">Id</label><br>
                                    <label class="label-edit-article">Judul Tips</label><br>
                                    <label class="label-edit-article">Penulis</label><br>
                                    <label class="label-edit-article">Tanggal Post</label><br>
                                    <label class="label-edit-article">Gambar</label><br>
                                    <label class="label-edit-article">Konten</label>

                                </div>

                                <div class="col-10">
                                    
                                    <input type="text" name="id" id="modalEditId" class="form-control form-control-user form-edit-article" value="" readonly>

                                    <input type="text" name="judul" id="modalEditJudul_tips" value="" class="form-control form-control-user form-edit-article">

                                    <input type="text" name="penulis" id="modalEditPenulis" value="" class="form-control form-control-user form-edit-article">

                                    <input type="date" name="created_at" id="modalEditCreated_at" value="" class="form-control form-control-user form-edit-article" readonly>
                                    
                                    <input type="file" id="modalEditImage_tips" name="pic" style="margin-top:10px;">

                                    <textarea name="desc" id="modalEditKonten" class="form-control form-control-user form-edit-article-konten"></textarea>
                                
                                </div>
                                
                            </div>
                    </div>
        
                </div>

                
                

            </div>
        {{ Form::close() }}
    </div>
  </div>

@endsection


@section('script')
<script>
$(document).ready(function () {

$('body').on('click', '#editTips', function (event) {

  event.preventDefault();
  
  var id = $(this).data('id');
  let url = "{{ route('admintipsid', ':id') }}";
  url = url.replace(':id', id);
  $.get(url, function (data) {
      console.log(data);
       $('#edit-tips').modal('show');
       $('#modalEditId').val(data.data.id);
       $('#modalEditJudul_tips').val(data.data.judul);
       $('#modalEditPenulis').val(data.data.penulis);
       $('#modalEditCreated_at').val(data.data.created_at.substring(0, 10));
       $('#modalEditImage_tips').val(data.data.pic);
       $('#modalEditKonten').val(data.data.desc);


     
   })
});


}); 



</script>

@endsection