@extends('layouts.dashboard')

@push('extended_css')
    <link rel="stylesheet" href="{{ asset('./vendor/toastr/css/toastr.min.css') }}">
    <link href="{{ asset('./vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <h4>Investments Area</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Investments</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Details</a></li>
                </ol>
            </div>
        </div>
        <x-investment-money-table />
        <x-modal-new-investment />
    </div>
@endsection

@push('extended_scripts')

    <!-- Datatable -->
    <script src="{{ asset('js/investment/addInvestment.js') }}"></script>
    <script src="{{ asset('js/investment/editInvestment.js') }}"></script>
    <script src="{{ asset('vendor/toastr/js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('./vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('./js/plugins-init/datatables.init.js') }}"></script>
    <script src="{{ asset('./js/ajaxCall.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    @include('vendors.sweet')


@endpush