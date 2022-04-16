@extends('layouts.dashboard-admin')

@section('main')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Konten Tips Kesehatan</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
                                <th>Judul Tips</th>
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
                                <td>lorem.png</td>
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
                                <td>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</td>
                                <td>Denis</td>
                                <td>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor.
                                    Lorem Ipsum Dolor Sit Amei Eiusmod TemporLorem Ipsum Dolor
                                     Sit Amei Eiusmod TemporLorem Ipsum Dolor Sit Amei Eiusmod Tempor
                                    </td>
                                <td>2011/04/25</td>
                                <td>lorem.png</td>
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
                                <td>#3</td>
                                <td>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</td>
                                <td>Denis</td>
                                <td>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor.
                                    Lorem Ipsum Dolor Sit Amei Eiusmod TemporLorem Ipsum Dolor
                                     Sit Amei Eiusmod TemporLorem Ipsum Dolor Sit Amei Eiusmod Tempor
                                    </td>
                                <td>2011/04/25</td>
                                <td>lorem.png</td>
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