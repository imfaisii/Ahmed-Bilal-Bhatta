@extends('layouts.dashboard')

@push('extended_css')
    @include('vendors.toaster')
    @include('vendors.dt')
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
    <script src="{{ asset('./js/ajaxCall.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    @include('vendors.validate')
    @include('vendors.sweet')


@endpush
