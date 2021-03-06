@extends('layouts.dashboard')

@push('extended_css')
    @include('vendors.toaster')
    @include('vendors.dt')
@endpush

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <h4>Expenses Area</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Expenses</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Details</a></li>
                </ol>
            </div>
        </div>
        <x-expenses-table />
        <x-expense-edit-modal />
    </div>
@endsection

@push('extended_scripts')

    <!-- Datatable -->
    <script src="{{ asset('./js/ajaxCall.js') }}"></script>
    <script src="{{ asset('js/expenses/edit.js') }}"></script>
    <script src="{{ asset('js/expenses/khataType.js') }}"></script>
    @include('vendors.validate')
    @include('vendors.sweet')

@endpush
