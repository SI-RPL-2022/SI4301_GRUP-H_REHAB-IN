@extends('layouts.homepage-dokter')
@section('main')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                
                    <tr>
                        <th>No Invoice</th> 
                        <th>Nama Layanan</th> 
                        <th>Price</th> 
                        <th style="width:11%;">Status Pembayaran</th>
                        <th>Konfirmasi</th>
                    </tr>
                </thead>
            
                <tbody>
                    @foreach($orderd as $order)
                        <tr>
                            <td>#{{ $order->noInv }}</td>
                            <td>{{ $order->jenislayanan }}</td>
                            <td>
                                Null
                            </td>
                            <td>
                                <a href="{{ route('invdk',['id'=>$order->id]) }}" class="btn btn-warning btn-icon-split">
                                    Check Invoice
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection