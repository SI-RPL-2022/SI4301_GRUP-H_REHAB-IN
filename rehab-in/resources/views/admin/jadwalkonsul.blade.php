@extends('layouts.dashboard-admin')
@section('main')

{{-- TITLE --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Table Jadwal Konsultasi</h1>
    <a href="{{ route('inputjadwal') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-plus fa-sm text-white-50"></i> Tambahkan Jadwal</a>

</div>
{{-- TITLE --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Jadwal Konsultasi</h6>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Download CSV File</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Shift</th> {{-- online or offline --}}
                            <th>Durasi</th> {{-- take from table pasien with ID Pasien --}}
                            <th>Tempat</th>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jumat</th>
                            <th>Sabtu</th> 
                            <th>Nama Dokter</th> {{-- take from table dokter with ID Dokter --}}
                            <th style="width:11%;">Aksi</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        @foreach ($jadwal as $sch)
                            
                        
                        <tr>
                            <th>{{ $sch->shift }}</th> {{-- online or offline --}}
                            <th>{{ $sch->durasi }}</th>
                            <th>
                                @if ($sch->tempat=="Online")
                                <a class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            {{ $sch->tempat }}
                                        </span>
                                    </a>
                                    
                                @else
                                <a class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-50">
                                        {{ $sch->tempat }}
                                    </span>
                                </a>
                                @endif
                                
                            </th>
                            <th>
                                @if ($sch->day=="Senin")
                                    {{$sch->namapasien}}
                                @endif
                            </th>
                            <th>
                                @if ($sch->day=="Selasa")
                                {{$sch->namapasien}}
                                @endif
                            </th>
                            <th>
                                @if ($sch->day=="Rabu")
                                {{$sch->namapasien}}
                                @endif
                            </th>
                            <th>
                                @if ($sch->day=="Kamis")
                                {{$sch->namapasien}}
                                @endif
                            </th>
                            <th>
                                @if ($sch->day=="Jumat")
                                {{$sch->namapasien}}
                                @endif
                            </th>
                            <th> 
                                @if ($sch->day=="Sabtu")
                                {{$sch->namapasien}}
                                @endif
                             </th> 
                            <th>{{$sch->namadokter}}</th> {{-- take from table dokter with ID Dokter --}}
                            <td>
                                <a href="jadwalkons/{{$sch->id}}" class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                </a>
                                <a href="jadwalkons/delete/{{$sch->id}}" class="btn btn-danger btn-icon-split">
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