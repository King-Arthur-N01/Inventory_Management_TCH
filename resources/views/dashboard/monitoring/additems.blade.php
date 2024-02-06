@extends('layouts.master')
@section('title', 'Add Items')
@section('content')
    <div class="row">
        <!-- ============================================================== -->
        <!-- valifation types -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Form Tambah barang</h5>
                <div class="card-body">
                    <form action="{{ route('pushitems') }}" id="validationform" method="post">
                        @csrf
                        <div class="row" align-items="center">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Nama Barang</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_name" placeholder="Nama Barang">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Code Barang</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_code" data-parsley-maxlength="5" placeholder="Code Barang">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" align-items="center">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Type/Model</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_type" placeholder="Type/Model Barang">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Merk/Brand</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_brand" placeholder="Merk/Brand Barang">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" align-items="center">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Quantity</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="quantity"
                                            placeholder="Quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Minimum Quantity</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="minimum_quantity" placeholder="Minimum Quantity">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" align-items="center">
                            <div class="dropdown col-xl-6">
                                <div class="form-group searchable">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Category</label>
                                    <div>
                                        <select selected="selected" class="form-control" name="category" id="category-input">
                                            <option value="" selected disabled hidden>Select Category:</option>
                                            <option value="Proximity Sensor">Proximity Sensor</option>
                                            <option value="Sensor Controller">Sensor Controller</option>
                                            <option value="Photo sensor">Photo sensor</option>
                                            <option value="Counter">Counter</option>
                                            <option value="Timer">Timer</option>
                                            <option value="Relay">Relay</option>
                                            <option value="Socket Relay">Socket Relay</option>
                                            <option value="Contact Block">Contact Block</option>
                                            <option value="Switch">Switch</option>
                                            <option value="Valve">Valve</option>
                                            <option value="Socket Push Button">Socket Push Button</option>
                                            <option value="Digital FO Sensor">Digital FO sensor</option>
                                            <option value="Power Supply">Power Supply</option>
                                            <option value="Pressure Control">Pressure Control</option>
                                            <option value="Remote Crane">Remote Crane</option>
                                            <option value="Warning Light">Warning Light</option>
                                            <option value="Pilot Lamp">Pilot Lamp</option>
                                            <option value="Thermal Overload">Thermal Overload</option>
                                            <option value="Contractor">Contractor</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Keterangan</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_note" placeholder="Contoh: Warna Hijau">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row text-right">
                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <button type="button" href="{{ route('managestock') }}" class="btn btn-space btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/inputmask/css/inputmask.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/select2/css/select2.css') }}">
@endpush
@push('script')
    <!-- custom js -->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.4.1min.js')}}"></script>
    <script src="{{ asset('assets/vendor/inputmask/js/jquery.inputmask.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/custom-js/dropdown.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#category-input').select2();
        });
    </script>
@endpush
