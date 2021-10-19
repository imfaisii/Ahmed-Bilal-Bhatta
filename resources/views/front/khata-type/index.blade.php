@extends('layouts.dashboard')

@push('extended_css')
    @include('vendors.toaster')
    @include('vendors.dt')
@endpush

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <h4>Khata Categories Area</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Khata Types</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Details</a></li>
                </ol>
            </div>
        </div>
        <x-khata-types-table />
        <x-modal-new-khata-type />
    </div>
@endsection

@push('extended_scripts')

    <!-- Datatable -->
    <script src="{{ asset('js/khata-type/addKhataType.js') }}"></script>
    <script src="{{ asset('js/khata-type/edit.js') }}"></script>
    @include('vendors.validate')
    @include('vendors.sweet')

@endpush
