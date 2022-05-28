@extends('layouts.homepage-user')
@section('main')
   <div class="container">
        <div class="row">
            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2>Invoices Detail</h2>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-4 col-sm-4">
                                <h4><img src="{{ asset('images/'.$order->kamar->pic) }}" width="100" alt="velonic"></h4>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <h4>Invoice #
                                    <strong>{{ $order->noInv }}</strong>
                                </h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <address>
                                    <strong>Name Rumah Sakit.</strong><br>
                                    795 Folsom Ave, Suite 546<br>
                                    San Francisco, CA 54656<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-34636
                                </address>
                            </div>
                            <div class="col-md-6 col-sm-6 text-right">
                                <p><strong>Order Date: </strong> {{ $order->created_at }}</p>
                                <p class="m-t-10"><strong>Order Status: </strong> <span class="badge bg-warning text-black">{{ $order->status }}</span></p>
                                <p class="m-t-10"><strong>Order ID: </strong> #{{ $order->noInv }}</p>
                            </div>
                        </div>
                        <div class="mt-40"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                                        <thead>
                                            <tr><th>#</th>
                                            <th>No Kamar</th>
                                            <th>Nama Kamar</th>
                                            <th>Facility</th>
                                            <th>Kelas</th>
                                            <th>Price</th>
                                        </tr></thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $order->kamar->no_kamar }}</td>
                                                <td>{{ $order->kamar->nama_kamar }}</td>
                                                <td>{{ $order->kamar->facility }}</td>
                                                <td>{{ $order->kamar->kelas }}</td>
                                                <td>{{ number_format($order->kamar->price, 0, ",", ".") }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row" style="border-radius: 0px;">
                            <div class="col-md-12 text-right">
                                <h3 class="text-right">Rp  {{ number_format($order->kamar->price, 0, ",", ".") }}</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="hidden-print col-md-12 text-right">
                            {{-- <a href="javascript:window.print()" class="btn btn-raised btn-success"><i class="fa fa-print"></i></a> --}}
                            {{-- <a href="#" class="btn btn-raised btn-warning">Menununggu confirm</a> --}}
                            @if($order->status == 'Sudah Membayar')
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" disabled>
                                    Upload bukti pembayaran
                                </button>
                            @else
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Upload bukti pembayaran
                                </button>
                            @endif
                              <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Upload file bukti pembayaran</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                  <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                      Pemabayaran melalui BCA
                                                    </button>
                                                  </h2>
                                                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body fw-bold" style="text-align: center;">Masukan No. Rek, <code>232156732</code>. Jika sudah melakukan pembayaran silahkan upload bukti pembayaran</div>
                                                  </div>
                                                </div>
                                                <div class="accordion-item">
                                                  <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                      Pembayaran Melalui Mandiri
                                                    </button>
                                                  </h2>
                                                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body fw-bold" style="text-align: center;">Masukan No. Rek, <code>12356732</code>. Jika sudah melakukan pembayaran silahkan upload bukti pembayaran</div>
                                                  </div>
                                                </div>
                                                <div class="accordion-item">
                                                  <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                      Pembayaran Melalui BNI
                                                    </button>
                                                  </h2>
                                                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body fw-bold" style="text-align: center;">Masukan No. Rek, <code>12322156732</code>. Jika sudah melakukan pembayaran silahkan upload bukti pembayaran</div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{ route('input') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" name="inv" value="{{ $order->noInv}}" hidden>
                                            {{-- Untuk upload ke database historis --}}
                                            <input type="text" name="user_id" value="{{ auth()->user()->id }}" hidden>
                                            {{-- Untuk upload ke database historis --}}
                                            <input type="text" name="order_id" value="{{ $order->id }}" hidden> 
                                            {{-- Untuk upload ke database historis --}}
                                            <input type="text" name="kamar_id" value="{{ $order->kamar->id }}" hidden> 
                                            {{-- Untuk upload ke database historis --}}
                                            <input type="text" name="status" value="Sudah Membayar" hidden> 
                                            {{-- untuk database ke kamars --}}
                                            <input type="text" name="updatestatus" value="Kosong" hidden>
                                            {{-- Upload ke dalam database histors --}}
                                            <input type="text" name="jenis_layanan" value="{{ $order->jenis }}" hidden>


                                            <div class="upload-container" required>
                                                {{-- //Untuk upload ke database Historis --}}
                                                <input type="file" name="pic" id="file_upload" />
                                            </div>
                                            <br>
                                            <button class="btn btn-primary" onclick="uploadFiles()">Submit</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                            {{-- <a href="#" class="btn btn-raised btn-primary"></a> --}}
                            {{-- <div class="btn btn-raised btn-success" disabled>Bukti pembayaran suskes</div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
