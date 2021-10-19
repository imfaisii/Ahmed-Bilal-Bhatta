@extends('layouts.dashboard')

@push('extended_css')
    @include('vendors.toaster')
    @include('vendors.dt')
@endpush

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <h4>Retrictions Area</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Retrictions</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Details</a></li>
                </ol>
            </div>
        </div>
        <x-access-restrictions-table />
    </div>
@endsection

@push('extended_scripts')
    <script src="{{ asset('js/restrictions/main.js') }}"></script>
    <!-- Datatable -->
    @include('vendors.validate')
    @include('vendors.sweet')
@endpush
