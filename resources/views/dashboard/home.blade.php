@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="card-dashboard col-md-3">
            <div class="card card-custom-1">
                <div class="card-body-custom">
                    <div class="row-card-custom">
                        <div class="col-8">
                            <h4 class="card-title">BARANG KELUAR</h2>
                            <h5 class="card-title-custom">50 Items Out Today</h3>
                        </div>
                        <div class="col-4">
                            <img style="height: 55px" src="assets/icons/arrow_up_red.png">
                        </div>
                        <div class="card-footer-item-custom-1">
                            <a class="card-link">View Details &nbsp;<i class="mdi mdi-settings"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-dashboard col-md-3">
            <div class="card card-custom-2">
                <div class="card-body-custom">
                    <div class="row-card-custom">
                        <div class="col-8">
                            <h4 class="card-title">BARANG MASUK</h4>
                            <h5 class="card-title-custom">10 Items In Today</h5>
                        </div>
                        <div class="col-4">
                            <img style="height: 55px" src="assets/icons/arrow_down_green.png">
                        </div>
                        <div class="card-footer-item-custom-2">
                            <a class="card-link">View Details &nbsp;<i class="mdi mdi-settings"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-dashboard col-md-3">
            <div class="card card-custom-3">
                <div class="card-body-custom">
                    <div class="row-card-custom">
                        <div class="col-8">
                            <h4 class="card-title">OVERAL QTY.</h4>
                            <h5 class="card-title-custom">90% Items Out Today</h5>
                        </div>
                        <div class="col-4">
                            <img style="height: 55px" src="assets/icons/graph.png">
                        </div>
                        <div class="card-footer-item-custom-3">
                            <a class="card-link">View Details &nbsp;<i class="mdi mdi-settings"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- data table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Data Tables</h5>
                    <p>Riwayat Pengambilan Barang</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered first" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Code</th>
                                    <th>Type</th>
                                    <th>Brand</th>
                                    <th>Quantity</th>
                                    <th>Taken By</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Skun Kabel Tembaga</td>
                                    <td>1B</td>
                                    <td>70</td>
                                    <td>-</td>
                                    <td>3</td>
                                    <td>rusmono</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end data table  -->
        <!-- ============================================================== -->
    </div>
@endsection

@push('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatables/css/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatables/css/buttons.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatables/css/select.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatables/css/fixedHeader.bootstrap4.css')}}">
@endpush
@push('script')

<script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/ajax/jszip.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/ajax/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/dataTables.rowGroup.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/data-table.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/libs/js/main-js.js')}}"></script>

@endpush
