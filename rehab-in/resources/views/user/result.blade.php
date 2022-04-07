@extends('layouts.homepage-user')
@section('main')
   <div class="container">
        <div class="row">
            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                <div class="row">
                    <div class="col-3 ms-4">
                        <img src="{{ asset('assets/style/images/kls-vip.png') }}" class="rounded" style="width:100%" alt="kamar">
                    </div>
                    <div class="col">
                        <p style="font-size: 20px">Kamar 501</p>
                        <span>Deskripsi ruangan</span>
                        <p>List description</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                <div class="row">
                    <div class="col">
                        <p style="font-size: 20px">Detail pemesanan reservasi ruangan</p>
                        <span>Total Harga</span>
                        <p>Submit button</p>
                        <p>Submit button</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection
