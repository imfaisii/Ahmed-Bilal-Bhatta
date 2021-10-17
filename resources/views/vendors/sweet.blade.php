@push('extended_css')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/sweetalert2.css')}}">
@endpush

@push('extended_scripts')
    <!-- Sweet Alert -->
    <script src="{{asset('assets/js/sweet-alert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/sweet-alert/app.js')}}"></script>
@endpush
