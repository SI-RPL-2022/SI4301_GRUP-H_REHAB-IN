@extends('layouts.dashboard-admin')
@section('main')

{{-- TITLE --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Catatan Kesehatan</h1>
    {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-plus fa-sm text-white-50"></i> Tambahkan Catatan Kesehatan</a> --}}
</div>
{{-- TITLE --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="padding-bottom: 10px;">Data Catatan Kesehatan</h6>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Download CSV File</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th>Id</th>
                            <th>Nama Pasien</th> {{-- take from table dokter with ID Dokter --}}
                            
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
                            <td> @foreach ($patient as $ps)
                                {{$ps->name}}
                                @endforeach
                            </td>
                            <td>{{$item->waktu}}</td>
                            <td>{{$item->kualitas}}</td>
                            <td>{{$item->olahraga}}</td>
                            <td>{{$item->mood}}</td>
                            <td>
                                <a href="#" id="note-details" class="btn btn-info btn-icon-split" data-id="{{ $item->id }}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-info"></i>
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
<!-- Modal EDIT -->
<div class="modal fade" id="view-notes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-8">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Catatan Kesehatan Pasien</h5>
                    </div>
                    
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                
                                        <tr>
                                            
                                            <th>Nama Pasien</th> {{-- take from table dokter with ID Dokter --}}
                                            
                                            <th>Waktu Tidur</th> 
                                            <th>Kualitas Tidur</th>
                                            <th>Olahraga</th>
                                            <th>Mood</th>
                                            
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                
                                        @foreach ($notesehat as $item)
                                        <tr>
                                            
                                            <td> @foreach ($patient as $ps)
                                                {{$ps->name}}
                                                @endforeach
                                            </td>
                                            <td>{{$item->descwaktu}}</td>
                                            <td>{{$item->desckualitas}}</td>
                                            <td>{{$item->descolahraga}}</td>
                                            <td>{{$item->descmood}}</td>
                                            
                                        </tr>
                
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        
                </div>

                
                

            </div>
        
    </div>
  </div>


@endsection

@section('script')
  <script>
$(document).ready(function () {

$('body').on('click', '#note-details', function (event) {

    event.preventDefault();
    
    var id = $(this).data('id');
    let url = "{{ route('adminotesid', ':id') }}";
    url = url.replace(':id', id);
    $.get(url, function (data) {
        console.log(data);
         $('#view-notes').modal('show');
         $('#idnotes').val(data.data.id);
         $('#descwaktu').val(data.data.descwaktu);
         $('#desckualitas').val(data.data.desckualitas);
         $('#descolahraga').val(data.data.descolahraga);
         $('#descmood').text(data.data.descmood);


       
     })
});




}); 



  </script>

  @endsection