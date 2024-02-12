@extends('layouts.master')
@section('title', 'Edit Items')
@section('content')
    <div class="row">
        <!-- ============================================================== -->
        <!-- valifation types -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Form Edit barang</h5>
                <div class="card-body">
                    <form action="{{ route('edititem', $stockitems->id) }}" id="updateform" method="post">
                        @csrf
                        @method('put')
                        <div class="row" align-items="center">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Nama Barang</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_name" value="{{ $stockitems->product_name }}" placeholder="Nama Barang">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Code Barang</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_code" data-parsley-maxlength="5" value="{{ $stockitems->product_code }}" placeholder="Code Barang">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" align-items="center">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Type/Model</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_type" value="{{ $stockitems->product_type }}" placeholder="Type/Model Barang">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Merk/Brand</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_brand" value="{{ $stockitems->product_brand }}" placeholder="Merk/Brand Barang">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" align-items="center">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Quantity</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="quantity" value="{{ $stockitems->quantity }}" placeholder="Quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Minimum Quantity</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="minimum_quantity" value="{{ $stockitems->minimum_quantity }}" placeholder="Minimum Quantity">
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
                                            <option data-id="option1" value="Proximity Sensor" {{ $stockitems->category == 'Proximity Sensor' ? 'selected' : '' }} >Proximity Sensor</option>
                                            <option data-id="option2" value="Sensor Controller" {{ $stockitems->category == 'Sensor Controller' ? 'selected' : '' }}>Sensor Controller</option>
                                            <option data-id="option3" value="Photo Sensor" {{ $stockitems->category == 'Photo sensor' ? 'Selected' : '' }}>Photo sensor</option>
                                            <option data-id="option4" value="Counter" {{ $stockitems->category == 'Counter' ? 'selected' : '' }}>Counter</option>
                                            <option data-id="option5" value="Timer" {{ $stockitems->category == 'Timer' ? 'selected' : '' }}>Timer</option>
                                            <option data-id="option6" value="Relay" {{ $stockitems->category == 'Relay' ? 'selected' : '' }}>Relay</option>
                                            <option data-id="option7" value="Socket Relay" {{ $stockitems->category == 'Socket Relay' ? 'selected' : '' }}>Socket Relay</option>
                                            <option data-id="option8" value="Contact Block" {{ $stockitems->category == 'Contact Block' ? 'selected' : '' }}>Contact Block</option>
                                            <option data-id="option9" value="Switch" {{ $stockitems->category == 'Switch' ? 'selected' : '' }}>Switch</option>
                                            <option data-id="option10" value="Valve" {{ $stockitems->category == 'Valve' ? 'selected' : '' }}>Valve</option>
                                            <option data-id="option11" value="Socket Push Button" {{ $stockitems->category == 'Socket Push Button' ? 'selected' : '' }}>Socket Push Button</option>
                                            <option data-id="option12" value="Digital FO Sensor" {{ $stockitems->category == 'Digital FO sensor' ? 'selected' : '' }}>Digital FO sensor</option>
                                            <option data-id="option13" value="Power Supply" {{ $stockitems->category == 'Power Supply' ? 'selected' : '' }}>Power Supply</option>
                                            <option data-id="option14" value="Pressure Control" {{ $stockitems->category == 'Pressure Control' ? 'selected' : '' }}>Pressure Control</option>
                                            <option data-id="option15" value="Remote Crane" {{ $stockitems->category == 'Remote Crane' ? 'selected' : '' }}>Remote Crane</option>
                                            <option data-id="option16" value="Warning Light" {{ $stockitems->category == 'Warning Light' ? 'selected' : '' }}>Warning Light</option>
                                            <option data-id="option17" value="Pilot Lamp" {{ $stockitems->category == 'Pilot Lamp' ? 'selected' : '' }}>Pilot Lamp</option>
                                            <option data-id="option18" value="Thermal Overload" {{ $stockitems->category == 'Thermal Overload' ? 'selected' : '' }}>Thermal Overload</option>
                                            <option data-id="option19" value="Contractor" {{ $stockitems->category == 'Contractor' ? 'selected' : '' }}>Contractor</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Keterangan</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_note" value="{{ $stockitems->product_note }}" placeholder="Contoh: Warna Hijau">
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
    <script src="{{ asset('assets/vendor/jquery/jquery-3.4.1min.js') }}"></script>
    <script src="{{ asset('assets/vendor/inputmask/js/jquery.inputmask.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/custom-js/dropdown.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#category-input').select2();
        });
    </script>
@endpush
