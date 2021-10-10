@extends('layouts.dashboard')

@push('extended_css')
    <link rel="stylesheet" href="{{ asset('./vendor/toastr/css/toastr.min.css') }}">
    <link href="{{ asset('./vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endpush

@section('content')

    <x-add-new-investor />

@endsection

@push('extended_scripts')

    <!-- Datatable -->
    <script src="{{ asset('js/investor/editInvestor.js') }}"></script>
    <script src="{{ asset('vendor/toastr/js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('./vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('./js/plugins-init/datatables.init.js') }}"></script>
    <script src="{{ asset('./js/ajaxCall.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('./js/investor/addInvestor.js') }}"></script>
    @include('vendors.sweet')


@endpush
