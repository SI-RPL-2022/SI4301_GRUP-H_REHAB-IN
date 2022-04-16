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
                                <h4><img src="{{ asset('assets/style/images/kls-vip.png') }}" width="100" alt="velonic"></h4>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <h4>Invoice # <br>
                                    <strong>2015-04-5654667546</strong>
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
                                <p><strong>Order Date: </strong> Jun 15, 2016</p>
                                <p class="m-t-10"><strong>Order Status: </strong> <span class="badge bg-warning">Pending</span></p>
                                <p class="m-t-10"><strong>Order ID: </strong> #123456</p>
                            </div>
                        </div>
                        <div class="mt-40"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                                        <thead>
                                            <tr><th>#</th>
                                            <th>Item</th>
                                            <th>Description</th>
                                            <th>Quantity</th>
                                            <th>Unit Cost</th>
                                            <th>Total</th>
                                        </tr></thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>LCD</td>
                                                <td>Lorem ipsum dolor sit amet.</td>
                                                <td>1</td>
                                                <td>$380</td>
                                                <td>$380</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Mobile</td>
                                                <td>Lorem ipsum dolor sit amet.</td>
                                                <td>5</td>
                                                <td>$50</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>LED</td>
                                                <td>Lorem ipsum dolor sit amet.</td>
                                                <td>2</td>
                                                <td>$500</td>
                                                <td>$1000</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>LCD</td>
                                                <td>Lorem ipsum dolor sit amet.</td>
                                                <td>3</td>
                                                <td>$300</td>
                                                <td>$900</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Mobile</td>
                                                <td>Lorem ipsum dolor sit amet.</td>
                                                <td>5</td>
                                                <td>$80</td>
                                                <td>$400</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row" style="border-radius: 0px;">
                            <div class="col-md-12 text-right">
                                <p class="text-right"><b>Sub-total:</b> 2930.00</p>
                                <p class="text-right">Discout: 12.9%</p>
                                <p class="text-right">VAT: 12.9%</p>
                                <hr>
                                <h3 class="text-right">IDR 123.456.789</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="hidden-print col-md-12 text-right">
                            {{-- <a href="javascript:window.print()" class="btn btn-raised btn-success"><i class="fa fa-print"></i></a> --}}
                            {{-- <a href="#" class="btn btn-raised btn-warning">Menununggu confirm</a> --}}
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Upload bukti pembayaran
                            </button>
                              <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Upload file bukti pembayaran</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- <form action="#" method="POST" enctype="multipart/form-data"> --}}
                                        <form>
                                            <div class="upload-container">
                                                <input type="file" id="file_upload" />
                                            </div>
                                            <br>
                                            <a href="{{ route('') }}" class="btn btn-primary">SUBMIT</a>
                                            {{-- <button class="btn btn-primary" onclick="uploadFiles()">Submit</button> --}}
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
