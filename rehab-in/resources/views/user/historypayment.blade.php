@extends('layouts.homepage-user')
@section('main')
    <div class="container">
        <div class="tab">
            <button class="tablinks" onclick="openHistory(event, 'kamar')" id="defaultOpen">Kamar</button>
            <button class="tablinks" onclick="openHistory(event, 'dokter')">Konsultasi Dokter</button>
        </div>
        {{-- Tab untuk kamar --}}
        <div id="kamar" class="tabcontent">
            @if (session('Done'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ (session('Done')) }}
                <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                </div>
            @endif
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            @if ($countkamar>0)
                <div class="card shadow mb-4 mt-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Riwayat Pembayaran Kamar</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No Invoice</th> 
                                        <th>Bukti pembayaran</th>
                                        <th>Status</th> 
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach($jeniskamar as $data)
                                        <tr>
                                            <td>#{{ $data->noinv }}</td>
                                            <td><img src="{{ asset('images/bukti/'.$data->bukti_pembayaran) }}" alt="" style="width: 30%;"/></td>
                                            <td>Sudah membayar</td>
                                            <td>
                                                <a href="/pasien/{{ $data->orderkamar_id }}/orderk/ " class="btn btn-primary btn-icon-split">
                                                    Check Invoice
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div class="card shadow mb-4 mt-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Riwayat Pembayaran Kamar</h6>
                    </div>
                    <div class="card-body">
                        You have nothing here
                    </div>
                </div>
            @endif
        </div>
        
        {{-- Tab untuk dokter --}}
        <div id="dokter" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            @if($countkonsultasi>0)
                <div class="card shadow mb-4 mt-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Riwayat Pembayaran Konsultasi Dokter</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No Invoice</th> 
                                        <th>Bukti pembayaran</th>
                                        <th>Status</th> 
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach ($jeniskonsultasi as $consult)
                                        <tr>
                                            <td>{{ $consult->noInv }}</td>
                                            <td><img src="{{ asset('images/bukti/'.$consult->bukti_pembayaran) }}" alt="" style="width: 30%;"/></td>
                                            <td>Sudah Membayar</td>
                                            <td>
                                                <a href="/pasien/{{ $consult->orderdokter_id }}/orderd/ " class="btn btn-primary btn-icon-split">
                                                    Check Invoice
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div class="card shadow mb-4 mt-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Riwayat Pembayaran Kamar</h6>
                    </div>
                    <div class="card-body">
                        You have nothing here
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection