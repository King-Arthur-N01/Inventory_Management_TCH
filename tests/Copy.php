<!DOCTYPE html>
<html>
<li class="nav-item dropdown nav-user">
    <a class="nav-link nav-user-img nav-user-name" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/avatar-1.png')}}" class="user-avatar-md rounded-circle"></a>
    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
        <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
        <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
        <a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-power-off mr-2"></i>Logout</a>
    </div>
</li>
</head>
<body>
    <button class="open-popup">Open Popup</button>
    <div class="popup">
        <div class="popup-content">
            <span class="close-popup">×</span>
            <h2>Registration Form</h2>
            <form>
                <input type="text" id="name" placeholder="Name">
                <input type="email" id="email" placeholder="Email">
                <input type="password" id="password" placeholder="Password">
                <input type="button" id="submit" value="Register">
            </form>
        </div>
    </div>
</body>
</html>

@extends('layouts.master')
@('title', 'Edit Item')
@section('content')
    <div class="">
        <div class="-xl-12 col-lg-12 colmd-12 colsm-12 col12">
            <div class="">
                <h5 class="card-header">Form Edit barang</h5>                <div class="card-body">
                    <form action="{{ route('updateitem', $item->id) }}" id="registerform" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row" align-items="center">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Nama Barang</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_name" value="{{ $item->product_name }}" placeholder="Nama Barang">
                                    </div>
                              div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Code Barang</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_code" data-parsley-maxlength="5" value="{{ $item->product_code }}" placeholder="Code Barang">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" align-items="center">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Type/Model</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_type" value="{{ $item->product_type }}" placeholder="Type/Model Barang">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Merk/Brand</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_brand" value="{{ $item->product_brand }}" placeholder="Merk/Brand Barang">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" align-items="center">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Quantity</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="quantity" value="{{ $item->quantity }}"
                                            placeholder="Quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Minimum Quantity</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="minimum_quantity" value="{{ $item->minimum_quantity }}" placeholder="Minimum Quantity">
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
                                            <option value="Proximity Sensor" {{ $stockitems->category == 'Proximity Sensor' ? 'selected' : '' }}>Proximity Sensor</option>
                                            <option value="Sensor Controller" {{ $stockitems->category == 'Sensor Controller' ? 'selected' : '' }}>Sensor Controller</option>
                                            <option value="Photo sensor" {{ $stockitems->category == 'Photo sensor' ? 'selected' : '' }}>Photo sensor</option>
                                            <option value="Counter" {{ $stockitems->category == 'Counter' ? 'selected' : '' }}>Counter</option>
                                            <option value="Timer" {{ $stockitems->category == 'Timer' ? 'selected' : '' }}>Timer</option>
                                            <option value="Relay" {{ $stockitems->category == 'Relay' ? 'selected' : '' }}>Relay</option>
                                            <option value="Socket Relay" {{ $stockitems->category == 'Socket Relay' ? 'selected' : '' }}>Socket Relay</option>
                                            <option value="Contact Block" {{ $stockitems->category == 'Contact Block' ? 'selected' : '' }}>Contact Block</option>
                                            <option value="Switch" {{ $stockitems->category == 'Switch' ? 'selected' : '' }}>Switch</option>
                                            <option value="Valve" {{ $stockitems->category == 'Valve' ? 'selected' : '' }}>Valve</option>
                                            <option value="Socket Push Button" {{ $stockitems->category == 'Socket Push Button' ? 'selected' : '' }}>Socket Push Button</option>
                                            <option value="Digital FO Sensor" {{ $stockitems->category == 'Digital FO sensor' ? 'selected' : '' }}>Digital FO sensor</option>
                                            <option value="Power Supply" {{ $stockitems->category == 'Power Supply' ? 'selected' : '' }}>Power Supply</option>
                                            <option value="Pressure Control" {{ $stockitems->category == 'Pressure Control' ? 'selected' : '' }}>Pressure Control</option>
                                            <option value="Remote Crane" {{ $stockitems->category == 'Remote Crane' ? 'selected' : '' }}>Remote Crane</option>
                                            <option value="Warning Light" {{ $stockitems->category == 'Warning Light' ? 'selected' : '' }}>Warning Light</option>
                                            <option value="Pilot Lamp" {{ $stockitems->category == 'Pilot Lamp' ? 'selected' : '' }}>Pilot Lamp</option>
                                            <option value="Thermal Overload" {{ $stockitems->category == 'Thermal Overload' ? 'selected' : '' }}>Thermal Overload</option>
                                            <option value="Contractor" {{ $stockitems->category == 'Contractor' ? 'selected' : '' }}>Contractor</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label text-sm-right" style="margin-left: 4px;">Keterangan</label>
                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="product_note" value="{{ $item->product_note }}" placeholder="Contoh: Warna Hijau">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row text-right">
                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                <button type="submit" class="btn btn-space btn-primary">Update</button>
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
