@extends('layouts.master')
@section('title','Table Stock')

@section('content')
    <div class="row">
        <!-- ============================================================== -->
        <!-- data table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Items Stock</h5>
                    <div class="col-sm-12 col-md-12">
                        <div class="dt-buttons">
                            <button type="button" class="btn btn-block btn-primary open-popup" href="" tabindex="0" aria-controls="example" data-toggle="modal" data-target="#AdditemsModal">+ Tambah Barang</button>
                        </div>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Code</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Quantity</th>
                                    <th>Minimum Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stockitems as $stockitem)
                                <tr>
                                    <td>{{$stockitem->id}}</td>
                                    <td>{{$stockitem->product_name}}</td>
                                    <td>{{$stockitem->product_code}}</td>
                                    <td>{{$stockitem->category}}</td>
                                    <td>{{$stockitem->status}}</td>
                                    <td>{{$stockitem->quantity}}</td>
                                    <td>{{$stockitem->minimum_quantity}}</td>
                                    <td><a class="btn btn-primary btn-xm" style="color:white" href="">Edit</a>
                                        <a class="btn btn-primary btn-xm" style="color:white" href="{{route('deleteitems',$stockitems->id)}}" onclick="return confirm('Yakin Hapus?')">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Code</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Quantity</th>
                                    <th>Minimum Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end data table  -->
        <!-- ============================================================== -->
    </div>
        <!-- ============================================================== -->
        <!-- MODAL BOOSTRAP POPUP -->
        <!-- ============================================================== -->
        <div class="modal fade" id="AdditemsModal" tabindex="-1" role="dialog" aria-labelledby="AdditemsModalModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="AdditemsModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('pushregister')}}" id="validationform" method="post">
                        @csrf
                        <div class="row" align-items="center">
                            <div class="col-xl">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Nama User</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="name" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">NIK</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="nik" data-parsley-maxlength="5" placeholder="NIK">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" align-items="center">
                            <div class="col-xl">
                                <div class="form-group">
                                    <div>
                                        <label class="col-form-label text-sm-right" style="margin-left: 4px;">Password</label>
                                        <div class="form-password-group" style="margin: 0px;">
                                            <input class="form-password-control form-control-lg" type="password" name="password" required placeholder="Password Min:6 digits" id="password">
                                            <button type="button" class="form-password-control-button fa fa-eye-slash" style="padding: 10px;" id="toggler"></button>
                                        </div>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="form-group">
                                    <div>
                                        <label class="col-form-label text-sm-right" style="margin-left: 4px;">Confirm Password</label>
                                        <div class="form-password-group" style="margin: 0px;">
                                        <input class="form-password-control form-control-lg" type="password" name="password_confirmation" placeholder="Confirm Password" id="confirm_password">
                                        <button type="button" class="form-password-control-button fa fa-eye-slash" style="padding: 10px;" id="confirm_toggler"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4>Department</h4>
                                <label class="custom-control custom-radio">
                                    <input type="radio" name="department" value="Engginering" class="custom-control-input">
                                    <span class="custom-control-label">Engginering</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" name="department"  value="IT" class="custom-control-input">
                                        <span class="custom-control-label">IT</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" name="department" value="Assembly" class="custom-control-input">
                                        <span class="custom-control-label">Assembly</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" name="department"  value="Pressing" class="custom-control-input">
                                    <span class="custom-control-label">Pressing</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" name="department" value="Wealding" class="custom-control-input">
                                    <span class="custom-control-label">Wealding</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" name="department" value="Spot" class="custom-control-input">
                                    <span class="custom-control-label">Spot</span>
                                </label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- END MODAL BOOSTRAP POPUP -->
        <!-- ============================================================== -->
@endsection

@push('style')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatables/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatables/css/buttons.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatables/css/select.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatables/css/fixedHeader.bootstrap4.css')}}">
@endpush

@push('script')

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script src="{{asset('assets/vendor/datatables/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/data-table.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/libs/js/main-js.js')}}"></script>

<script>
    $(document).ready(function(){
        $("#btn-open-modal-add-item").click(function(){ //jika button ini di klik
            $("#modal-add-item").modal("show");// akan memunculkan modal add item
        });
    });
</script>
@endpush
