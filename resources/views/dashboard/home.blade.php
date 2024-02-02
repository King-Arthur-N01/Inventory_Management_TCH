@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="card-dashboard col-md-4">
            <div class="card card-custom-1">
                <div class="card-body-custom">
                    <div class="row-card-custom">
                        <div class="col-6">
                            <img style="height: 70px" src="assets/icons/robotics_2.png">
                        </div>
                        <div class="col-6">
                            <h2 class="card-title">01</h2>
                            <h3 class="card-title">STATUS</h3>
                        </div>
                        <div class="card-footer-item-custom-1">
                            <a class="card-link">View Details &nbsp;<i class="mdi mdi-settings"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-dashboard col-md-4">
            <div class="card card-custom-2">
                <div class="card-body-custom">
                    <div class="row-card-custom">
                        <div class="col-6">
                            <img style="height: 70px" src="assets/icons/bar_chart_2.png">
                        </div>
                        <div class="col-6">
                            <h2 class="card-title">02</h2>
                            <h3 class="card-title">DIAGRAM</h3>
                        </div>
                        <div class="card-footer-item-custom-2">
                            <a class="card-link">View Details &nbsp;<i class="mdi mdi-settings"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-dashboard col-md-4">
            <div class="card card-custom-3">
                <div class="card-body-custom">
                    <div class="row-card-custom">
                        <div class="col-6">
                            <img style="height: 70px" src="assets/icons/maintenance_2.png">
                        </div>
                        <div class="col-6">
                            <h2 class="card-title">03</h2>
                            <h3 class="card-title">SETUP</h3>
                        </div>
                        <div class="card-footer-item-custom-3">
                            <a class="card-link">View Details &nbsp;<i class="mdi mdi-settings"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <<==============================chart bar!!!!==============================>> --}}

    {{-- <<=============================end chart bar!!!!============================>> --}}
@endsection

@push('style')

@endpush
@push('script')

@endpush
